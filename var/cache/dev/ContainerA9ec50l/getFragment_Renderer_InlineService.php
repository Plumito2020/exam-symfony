<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fragment.renderer.inline' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Fragment\\FragmentRendererInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Fragment\\RoutableFragmentRenderer.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Fragment\\InlineFragmentRenderer.php';

$this->services['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer(${($_ = isset($this->services['http_kernel']) ? $this->services['http_kernel'] : $this->getHttpKernelService()) && false ?: '_'}, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'});

$instance->setFragmentPath('/_fragment');

return $instance;
