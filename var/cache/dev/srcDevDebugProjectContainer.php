<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container0pilyxa\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container0pilyxa/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container0pilyxa.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\Container0pilyxa\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \Container0pilyxa\srcDevDebugProjectContainer([
    'container.build_hash' => '0pilyxa',
    'container.build_id' => 'c7b33239',
    'container.build_time' => 1588157341,
], __DIR__.\DIRECTORY_SEPARATOR.'Container0pilyxa');
