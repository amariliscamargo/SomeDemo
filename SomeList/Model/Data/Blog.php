<?php
declare(strict_types=1);

namespace SomeDemo\SomeList\Model\Data;

use SomeDemo\SomeList\Api\Data\BlogInterface;

class Blog extends \Magento\Framework\Api\AbstractExtensibleObject implements BlogInterface
{

    /**
     * Get blog_id
     * @return string|null
     */
    public function getBlogId()
    {
        return $this->_get(self::BLOG_ID);
    }

    /**
     * Set blog_id
     * @param string $blogId
     * @return \SomeDemo\SomeList\Api\Data\BlogInterface
     */
    public function setBlogId($blogId)
    {
        return $this->setData(self::BLOG_ID, $blogId);
    }

    /**
     * Get content
     * @return string|null
     */
    public function getContent()
    {
        return $this->_get(self::CONTENT);
    }

    /**
     * Set content
     * @param string $content
     * @return \SomeDemo\SomeList\Api\Data\BlogInterface
     */
    public function setContent($content)
    {
        return $this->setData(self::CONTENT, $content);
    }

    /**
     * Retrieve existing extension attributes object or create a new one.
     * @return \SomeDemo\SomeList\Api\Data\BlogExtensionInterface|null
     */
    public function getExtensionAttributes()
    {
        return $this->_getExtensionAttributes();
    }

    /**
     * Set an extension attributes object.
     * @param \SomeDemo\SomeList\Api\Data\BlogExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \SomeDemo\SomeList\Api\Data\BlogExtensionInterface $extensionAttributes
    ) {
        return $this->_setExtensionAttributes($extensionAttributes);
    }

    /**
     * Get entity_id
     * @return string|null
     */
    public function getEntityId()
    {
        return $this->_get(self::ENTITY_ID);
    }

    /**
     * Set entity_id
     * @param string $entityId
     * @return \SomeDemo\SomeList\Api\Data\BlogInterface
     */
    public function setEntityId($entityId)
    {
        return $this->setData(self::ENTITY_ID, $entityId);
    }

    /**
     * Get title
     * @return string|null
     */
    public function getTitle()
    {
        return $this->_get(self::TITLE);
    }

    /**
     * Set title
     * @param string $title
     * @return \SomeDemo\SomeList\Api\Data\BlogInterface
     */
    public function setTitle($title)
    {
        return $this->setData(self::TITLE, $title);
    }
}

