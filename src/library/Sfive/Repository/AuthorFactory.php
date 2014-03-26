<?php

namespace Sfive\Repository;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class AuthorFactory implements FactoryInterface
{
    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     *
     * @return Author
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $authorRepository = new Author();

        return $authorRepository;
    }
}
