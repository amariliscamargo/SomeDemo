<?php
declare(strict_types=1);

namespace SomeDemo\SomeList\Plugin\Magento\Catalog\Model;

class Product
{

    public function afterGetPrice(
        \Magento\Catalog\Model\Product $subject,
        $result
    ) {
        //Your plugin code
        return $result;
    }
}

