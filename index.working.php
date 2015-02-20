<?php

define( 'IPB_THIS_SCRIPT', 'public' );
require_once( './initdata.php' );/*noLibHook*/

require_once( IPS_ROOT_PATH . 'sources/base/ipsRegistry.php' );/*noLibHook*/
require_once( IPS_ROOT_PATH . 'sources/base/ipsController.php' );/*noLibHook*/
ipsController::run();

exit();