<?php
declare(strict_types=1);

namespace SomeDemo\SomeList\Setup;

use Magento\Eav\Setup\EavSetup;

class BlogSetup extends EavSetup
{

    public function getDefaultEntities()
    {
        return [
             \SomeDemo\SomeList\Model\Blog::ENTITY => [
                'entity_model' => \SomeDemo\SomeList\Model\ResourceModel\Blog::class,
                'table' => 'somedemo_blog_entity',
                'attributes' => [
                    'title' => [
                        'type' => 'static'
                    ]
                ]
            ]
        ];
    }
}

