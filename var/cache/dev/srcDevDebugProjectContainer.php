<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVifb7mb\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVifb7mb/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerVifb7mb.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerVifb7mb\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerVifb7mb\srcDevDebugProjectContainer([
    'container.build_hash' => 'Vifb7mb',
    'container.build_id' => '77cab2ff',
    'container.build_time' => 1593795861,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVifb7mb');