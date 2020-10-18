<?php
declare(strict_types=1);

namespace SomeDemo\SomeList\Model\ResourceModel;

class Blog extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('somedemo_somelist_blog', 'blog_id');

        $this->setType('somedemo_blog_entity');
    }
}

