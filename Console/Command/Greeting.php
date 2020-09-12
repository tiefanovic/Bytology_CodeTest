<?php


namespace Bytology\CodeTest\Console\Command;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class Greeting extends Command
{
    const USER = "user";

    /**
     * @inheritDoc
     */
    protected function configure()
    {
        $this->setName("greeting")
            ->setDescription("This command will send you a greetings :)")
            ->addOption(
                self::USER,
                'u',
                InputOption::VALUE_OPTIONAL,
                "User Name"
            );
        parent::configure();
    }

    /**
     * @inheritDoc
     */
    public function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln(sprintf("hello <comment>%s</comment>", $input->getOption(self::USER)));
    }
}
