<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine_migrations.diff_command' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\console\\Command\\Command.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\DoctrineCommand.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\DiffCommand.php';

$this->services['doctrine_migrations.diff_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\DiffCommand(${($_ = isset($this->services['doctrine.migrations.dependency_factory']) ? $this->services['doctrine.migrations.dependency_factory'] : $this->load('getDoctrine_Migrations_DependencyFactoryService.php')) && false ?: '_'}, 'doctrine:migrations:diff');

$instance->setName('doctrine:migrations:diff');

return $instance;
