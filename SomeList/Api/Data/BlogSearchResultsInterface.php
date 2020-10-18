<?php
declare(strict_types=1);

namespace SomeDemo\SomeList\Api\Data;

interface BlogSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{

    /**
     * Get Blog list.
     * @return \SomeDemo\SomeList\Api\Data\BlogInterface[]
     */
    public function getItems();

    /**
     * Set content list.
     * @param \SomeDemo\SomeList\Api\Data\BlogInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}

