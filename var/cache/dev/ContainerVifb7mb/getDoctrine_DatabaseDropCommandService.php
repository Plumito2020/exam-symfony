<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine.database_drop_command' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\console\\Command\\Command.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle\\Command\\DoctrineCommand.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle\\Command\\DropDatabaseDoctrineCommand.php';

$this->services['doctrine.database_drop_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->load('getDoctrineService.php')) && false ?: '_'});

$instance->setName('doctrine:database:drop');

return $instance;