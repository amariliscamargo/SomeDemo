<?php
declare(strict_types=1);

namespace SomeDemo\SomeList\Model;

class DemoApiDLManagement implements \SomeDemo\SomeList\Api\DemoApiDLManagementInterface
{

    /**
     * {@inheritdoc}
     */
    public function deleteDemoApiDL($param)
    {
        return 'hello api DELETE return the $param ' . $param;
    }
}

