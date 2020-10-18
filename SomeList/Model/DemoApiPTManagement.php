<?php
declare(strict_types=1);

namespace SomeDemo\SomeList\Model;

class DemoApiPTManagement implements \SomeDemo\SomeList\Api\DemoApiPTManagementInterface
{

    /**
     * {@inheritdoc}
     */
    public function putDemoApiPT($param)
    {
        return 'hello api PUT return the $param ' . $param;
    }
}

