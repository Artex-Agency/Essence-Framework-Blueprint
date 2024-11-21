<?php /*
¸_______¸__¸ ¸__¸___¸   ¸_______¸_______¸
┊   _   ┊   Y   ┊   ┊   ┊       ┊       ┊
┊   l   ┊   ┊   ┊   ┊   ┊   |___┊  [____┊
┊   ____┊   ┊   ┊   ┊___┊___¸   ┊  ¸__]_ 
┊   ┊   ┊   |   ┊   l   ┊   ]   ┊  [    ┊    
┊   ┊   ┊       ┊       ┊       ┊       ┊
'---`   `-------^-------^-------^-------'
░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
ARTEX PULSE ⦙⦙⦙⦙ APPLICATION FRAMEWORK CORE
░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░ */
/**
 * Artex Pulse - Easiest Static Blog Generator
 * 
 * @author      James Gober <james@jamesgober.com>
 * @copyright   2025 Artex Agency Inc.
 * @link        https://artexagency.com/
 * @version     1.0.0
 */
declare(strict_types=1);

namespace Essence\Core;

use \Essence\Essence;
use \Essence\Core\Bootstrap;

/**
 * Core
 * 
 * @package    Essence\Core
 * @category   Core
 * @access     public
 * @version    1.0.0
 * @since      1.0.0
 * @link       https://artexessence.com/pulse/ Project Website
 * @license    Artex Permissive Software License (APSL)
 */
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