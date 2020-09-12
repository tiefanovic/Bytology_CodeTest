<?php
namespace Bytology\CodeTest\Observer;

use Magento\Customer\Model\Session;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\View\LayoutInterface;

class LayoutUpdate implements ObserverInterface
{
    protected $session;

    public function __construct(
        Session $session
    ) {
        $this->session = $session;
    }

    /**
     * @inheritDoc
     */
    public function execute(Observer $observer)
    {
        /** @var LayoutInterface $layout */
        $layout = $observer->getLayout();
        if ($this->session->isLoggedIn()) {
            $layout->getUpdate()->addHandle("customer_loggedin_css");
        }
    }
}
