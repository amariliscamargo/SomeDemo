<?php
declare(strict_types=1);

namespace SomeDemo\SomeList\Model\Product\Type;

class Someproduct extends \Magento\GroupedProduct\Model\Product\Type\Grouped
{

    const TYPE_ID = 'someproduct';

    /**
     * {@inheritdoc}
     */
    public function deleteTypeSpecificData(\Magento\Catalog\Model\Product $product)
    {
        // method intentionally empty
    }
}

