<?php
declare(strict_types=1);

namespace SomeDemo\SomeList\Model;

use Magento\Framework\Api\DataObjectHelper;
use SomeDemo\SomeList\Api\Data\BlogInterface;
use SomeDemo\SomeList\Api\Data\BlogInterfaceFactory;

class Blog extends \Magento\Framework\Model\AbstractModel
{

    protected $_eventPrefix = 'somedemo_somelist_blog';
    protected $_eventPrefix = 'somedemo_blog_entity';
    protected $dataObjectHelper;

    const ENTITY = 'somedemo_blog_entity';
    protected $blogDataFactory;


    /**
     * @param \Magento\Framework\Model\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param BlogInterfaceFactory $blogDataFactory
     * @param DataObjectHelper $dataObjectHelper
     * @param \SomeDemo\SomeList\Model\ResourceModel\Blog $resource
     * @param \SomeDemo\SomeList\Model\ResourceModel\Blog\Collection $resourceCollection
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        BlogInterfaceFactory $blogDataFactory,
        DataObjectHelper $dataObjectHelper,
        \SomeDemo\SomeList\Model\ResourceModel\Blog $resource,
        \SomeDemo\SomeList\Model\ResourceModel\Blog\Collection $resourceCollection,
        array $data = []
    ) {
        $this->blogDataFactory = $blogDataFactory;
        $this->dataObjectHelper = $dataObjectHelper;
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }

    /**
     * Retrieve blog model with blog data
     * @return BlogInterface
     */
    public function getDataModel()
    {
        $blogData = $this->getData();
        
        $blogDataObject = $this->blogDataFactory->create();
        $this->dataObjectHelper->populateWithArray(
            $blogDataObject,
            $blogData,
            BlogInterface::class
        );
        
        return $blogDataObject;
    }
}

