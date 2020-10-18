<?php
declare(strict_types=1);

namespace SomeDemo\SomeList\Model;

class DemoApiGTManagement implements \SomeDemo\SomeList\Api\DemoApiGTManagementInterface
{

    /**
     * {@inheritdoc}
     */
    public function getDemoApiGT($param)
    {
        return 'hello api GET return the $param ' . $param;
    }
}

