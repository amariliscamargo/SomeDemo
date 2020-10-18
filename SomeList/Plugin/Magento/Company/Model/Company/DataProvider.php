<?php
declare(strict_types=1);

namespace SomeDemo\SomeList\Plugin\Magento\Company\Model\Company;

class DataProvider
{

    /**
     * @param \Magento\Company\Model\Company\DataProvider $subject
     * @param $result
     * @return mixed
     */
    public function afterGetGeneralData(
        \Magento\Company\Model\Company\DataProvider $subject,
        $result,
        \Magento\Company\Api\Data\CompanyInterface $company
    ) {
        $result['is_active'] = $company->getData('is_active');

        return $result;
    }
}

