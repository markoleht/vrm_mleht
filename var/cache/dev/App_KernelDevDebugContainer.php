<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXZ5QNvB\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXZ5QNvB/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXZ5QNvB.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXZ5QNvB\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXZ5QNvB\App_KernelDevDebugContainer([
    'container.build_hash' => 'XZ5QNvB',
    'container.build_id' => 'da76dfd5',
    'container.build_time' => 1599811161,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXZ5QNvB');
