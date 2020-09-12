<?php

namespace Bytology\CodeTest\Console\Command;

use Magento\Framework\Console\Cli;
use Magento\Framework\Module\ModuleList;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ListModules extends Command
{
    protected $moduleList;
    public function __construct(
        ModuleList $moduleList,
        string $name = null
    ) {
        $this->moduleList = $moduleList;
        parent::__construct($name);
    }

    /**
     * @inheritDoc
     */
    protected function configure()
    {
        $this->setName("check-active")
            ->setDescription("This commands will list all active modules.");
        parent::configure();
    }

    /**
     * @inheritDoc
     */
    public function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("<info>Enabled Modules List:</info>");
        $this->printEnabledModules($output);
        $output->writeln('');
    }

    /**
     * @param OutputInterface $output
     * @return int
     */
    private function printEnabledModules(OutputInterface $output)
    {
        /** @var ModuleList $enabledModules */
        $enabledModules = $this->moduleList->getNames();
        if (count($enabledModules) === 0) {
            $output->writeln('None');
            return Cli::RETURN_FAILURE;
        }
        $output->writeln(join("\n", $enabledModules));
        return \Magento\Framework\Console\Cli::RETURN_SUCCESS;
    }
}
