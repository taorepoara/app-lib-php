<?php

namespace Lenra\App\Components;

function Listener(string $name)
{
    return new ListenerBuilder($name);
}
