<?php
declare(strict_types=1);

namespace SomeDemo\SomeList\Plugin\Magento\Company\Controller\Adminhtml\Index;

class Save
{

    /**
     * @param \Magento\Company\Controller\Adminhtml\Index\Save $subject
     * @param $result
     * @return mixed
     */
    public function afterSetCompanyRequestData(
        \Magento\Company\Controller\Adminhtml\Index\Save $subject,
        $result
    ) {
        $result->setData('is_active', $subject->getRequest()->getPostValue('general')['is_active']);

        return $result;
    }
}

