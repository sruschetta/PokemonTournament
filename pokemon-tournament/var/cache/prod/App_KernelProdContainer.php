<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNxE19as\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNxE19as/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerNxE19as.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerNxE19as\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerNxE19as\App_KernelProdContainer([
    'container.build_hash' => 'NxE19as',
    'container.build_id' => 'ed0a48dc',
    'container.build_time' => 1586794116,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNxE19as');
