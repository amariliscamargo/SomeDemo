<?php
declare(strict_types=1);

namespace SomeDemo\SomeList\Block\Widget;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

class ProductStock extends Template implements BlockInterface
{

    protected $_template = "widget/productstock.phtml";

}

