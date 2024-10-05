<?php

return \StubsGenerator\Finder::create()
    ->in('source/vendor/themosis/framework/src')
    ->files()
    ->append(
        \StubsGenerator\Finder::create()
            ->in(['source/vendor/themosis/themosis/app'])
            ->files()
    )
    ->sortByName();
