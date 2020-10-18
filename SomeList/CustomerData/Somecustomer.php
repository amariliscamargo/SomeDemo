<?php
declare(strict_types=1);

namespace SomeDemo\SomeList\CustomerData;

class Somecustomer
{

    protected $logger;

    /**
     * Constructor
     *
     * @param \Psr\Log\LoggerInterface $logger
     */
    public function __construct(\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * {@inheritdoc}
     */
    public function getSectionData()
    {
        return []
    }
}

