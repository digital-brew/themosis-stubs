<?php

return \StubsGenerator\Finder::create()
    ->in('source/vendor/themosis/framework')
    ->files()
    ->append(
        \StubsGenerator\Finder::create()
            ->in(['source/vendor/themosis/themosis'])
            ->files()
    )
    ->sortByName();
