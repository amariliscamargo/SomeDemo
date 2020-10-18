<?php
declare(strict_types=1);

namespace SomeDemo\SomeList\Setup\Patch\Data;

use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;
use SomeDemo\SomeList\Setup\BlogSetup;
use SomeDemo\SomeList\Setup\BlogSetupFactory;

class DefaultBlogEntity implements DataPatchInterface
{

    /**
     * @var ModuleDataSetupInterface
     */
    private $moduleDataSetup;
    /**
     * @var BlogSetup
     */
    private $blogSetupFactory;

    /**
     * Constructor
     *
     * @param ModuleDataSetupInterface $moduleDataSetup
     * @param BlogSetupFactory $blogSetupFactory
     */
    public function __construct(
        ModuleDataSetupInterface $moduleDataSetup,
        BlogSetupFactory $blogSetupFactory
    ) {
        $this->moduleDataSetup = $moduleDataSetup;
        $this->blogSetupFactory = $blogSetupFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function apply()
    {
        $this->moduleDataSetup->getConnection()->startSetup();
        /** @var BlogSetup $customerSetup */
        $blogSetup = $this->blogSetupFactory->create(['setup' => $this->moduleDataSetup]);
        $blogSetup->installEntities();
        

        $this->moduleDataSetup->getConnection()->endSetup();
    }

    /**
     * {@inheritdoc}
     */
    public function getAliases()
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public static function getDependencies()
    {
        return [
        
        ];
    }
}

