<?php
declare(strict_types=1);

namespace SomeDemo\SomeList\Model\ResourceModel\Blog;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * @var string
     */
    protected $_idFieldName = 'blog_id';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            \SomeDemo\SomeList\Model\Blog::class,
            \SomeDemo\SomeList\Model\ResourceModel\Blog::class
        );
    }
}

