<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHLnrFGF\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHLnrFGF/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerHLnrFGF.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerHLnrFGF\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerHLnrFGF\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'HLnrFGF',
    'container.build_id' => '22a9587f',
    'container.build_time' => 1540908139,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerHLnrFGF');
