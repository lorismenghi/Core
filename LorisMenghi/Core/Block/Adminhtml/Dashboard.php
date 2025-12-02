<?php
declare(strict_types=1);

namespace LorisMenghi\Core\Block\Adminhtml;

use Magento\Backend\Block\Template;
use Magento\Backend\Block\Template\Context;
use Magento\Framework\Locale\ResolverInterface;

class Dashboard extends Template
{
    public function __construct(
        Context $context,
        private readonly ResolverInterface $localeResolver,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }

    public function getLanguageCode(): string
    {
        $locale = $this->localeResolver->getLocale();

        if (str_starts_with($locale, 'it')) {
            return 'it';
        }

        return 'en';
    }
}

