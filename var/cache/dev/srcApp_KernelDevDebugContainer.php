<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJ2j7tm4\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJ2j7tm4/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJ2j7tm4.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJ2j7tm4\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerJ2j7tm4\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'J2j7tm4',
    'container.build_id' => '3bf8e9b2',
    'container.build_time' => 1573832755,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJ2j7tm4');
