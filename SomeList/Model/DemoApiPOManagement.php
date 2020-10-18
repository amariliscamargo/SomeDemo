<?php
declare(strict_types=1);

namespace SomeDemo\SomeList\Model;

class DemoApiPOManagement implements \SomeDemo\SomeList\Api\DemoApiPOManagementInterface
{

    /**
     * {@inheritdoc}
     */
    public function postDemoApiPO($param)
    {
        return 'hello api POST return the $param ' . $param;
    }
}

