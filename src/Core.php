<?php

namespace Artex\Essence;

use \Artex\Essence\Engine\Bootstrap;

class Core
{


    public function __construct()
    {



        echo '<h1>ARTEX ESSENCE: CORE</h1>';
        echo '<p>CORE PATH: ' . CORE_PATH . '</p>';
        //echo '<p>CORE VENDOR PATH: ' . CORE_VENDOR_PATH . '</p>';


        $Bootstrap = new Bootstrap();
    }



}