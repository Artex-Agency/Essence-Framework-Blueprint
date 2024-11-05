<?php

namespace Artex\Essence;

use Artex\Essence\Engine\Bootstrap;


class Essence
{


    public function __construct()
    {
        echo '<h1>ARTEX ESSENCE: CORE</h1>';

        $Bootstrap = new Bootstrap();
    }



}