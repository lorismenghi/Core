<?php
declare(strict_types=1);

namespace LorisMenghi\Core\Controller\Adminhtml\Index;

use Magento\Backend\App\Action;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action
{
    public const ADMIN_RESOURCE = 'LorisMenghi_Core::all';

    public function __construct(
        Action\Context $context,
        private readonly PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
    }

    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('LorisMenghi_Core::dashboard');
        $resultPage->getConfig()->getTitle()->prepend(__('LorisMenghi - Dashboard'));
        return $resultPage;
    }
}

