<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXQB8yRx\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXQB8yRx/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXQB8yRx.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXQB8yRx\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerXQB8yRx\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'XQB8yRx',
    'container.build_id' => 'a39f538a',
    'container.build_time' => 1573079803,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXQB8yRx');
