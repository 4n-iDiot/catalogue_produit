<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRu2KW2M\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRu2KW2M/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRu2KW2M.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRu2KW2M\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerRu2KW2M\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'Ru2KW2M',
    'container.build_id' => 'a6c3a74f',
    'container.build_time' => 1572536176,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRu2KW2M');