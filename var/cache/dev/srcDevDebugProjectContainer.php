<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container86jxsp5\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container86jxsp5/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container86jxsp5.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\Container86jxsp5\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \Container86jxsp5\srcDevDebugProjectContainer([
    'container.build_hash' => '86jxsp5',
    'container.build_id' => '752992a8',
    'container.build_time' => 1587810041,
], __DIR__.\DIRECTORY_SEPARATOR.'Container86jxsp5');
