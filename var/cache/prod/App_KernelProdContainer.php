<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBztHo1O\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBztHo1O/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerBztHo1O.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerBztHo1O\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerBztHo1O\App_KernelProdContainer([
    'container.build_hash' => 'BztHo1O',
    'container.build_id' => 'a7c38abb',
    'container.build_time' => 1590679853,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBztHo1O');
