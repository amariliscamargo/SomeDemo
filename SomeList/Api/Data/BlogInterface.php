<?php
declare(strict_types=1);

namespace SomeDemo\SomeList\Api\Data;

interface BlogInterface extends \Magento\Framework\Api\ExtensibleDataInterface
{

    const ENTITY_ID = 'entity_id';
    const BLOG_ID = 'blog_id';
    const CONTENT = 'content';
    const TITLE = 'title';

    /**
     * Get blog_id
     * @return string|null
     */
    public function getBlogId();

    /**
     * Set blog_id
     * @param string $blogId
     * @return \SomeDemo\SomeList\Api\Data\BlogInterface
     */
    public function setBlogId($blogId);

    /**
     * Get content
     * @return string|null
     */
    public function getContent();

    /**
     * Set content
     * @param string $content
     * @return \SomeDemo\SomeList\Api\Data\BlogInterface
     */
    public function setContent($content);

    /**
     * Retrieve existing extension attributes object or create a new one.
     * @return \SomeDemo\SomeList\Api\Data\BlogExtensionInterface|null
     */
    public function getExtensionAttributes();

    /**
     * Set an extension attributes object.
     * @param \SomeDemo\SomeList\Api\Data\BlogExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \SomeDemo\SomeList\Api\Data\BlogExtensionInterface $extensionAttributes
    );

    /**
     * Get entity_id
     * @return string|null
     */
    public function getEntityId();

    /**
     * Set entity_id
     * @param string $entityId
     * @return \SomeDemo\SomeList\Api\Data\BlogInterface
     */
    public function setEntityId($entityId);

    /**
     * Get title
     * @return string|null
     */
    public function getTitle();

    /**
     * Set title
     * @param string $title
     * @return \SomeDemo\SomeList\Api\Data\BlogInterface
     */
    public function setTitle($title);
}

