<?php
declare(strict_types=1);

namespace SomeDemo\SomeList\ViewModel\Product;

class Breadcrumbs extends \Magento\Framework\DataObject implements \Magento\Framework\View\Element\Block\ArgumentInterface
{

    /**
     * Breadcrumbs constructor.
     *
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return string
     */
    public function getProductName()
    {
        //Your viewModel code
        // you can use me in your template like:
        // $viewModel = $block->getData('viewModel');
        // echo $viewModel->getProductName();
        
        return __('Hello Developer!');
    }
}

