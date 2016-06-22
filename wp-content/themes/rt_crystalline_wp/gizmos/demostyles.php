<?php
/**
 * @version   1.5 August 19, 2014
 * @author    RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2014 RocketTheme, LLC
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 */

defined('GANTRY_VERSION') or die();

gantry_import('core.gantrygizmo');

/**
 * @package     gantry
 * @subpackage  features
 */
class GantryGizmoDemoStyles extends GantryGizmo {

    var $_name = 'demostyles';

    function init() {
        
        global $gantry;
	
		$gantry->addStyle("demo-styles.css");

    }
}