<?php

namespace RRoek\DoctrineToolsBundle\EventListener;

use Doctrine\Persistence\ObjectManager;
use Gedmo\Loggable\LoggableListener as GedmoListener;

class LoggableListener extends GedmoListener
{
    public function getConfiguration(ObjectManager $objectManager, $class)
    {
        $config = parent::getConfiguration($objectManager, $class);
        if (!isset($config['versioned'])) {
            $classMetadata = $objectManager->getClassMetadata($class);
            $config['versioned'] = $classMetadata->getFieldNames();
        }
        return $config;
    }
}
