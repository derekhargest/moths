<?php
/**
 * @version   1.5 August 19, 2014
 * @author    RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2014 RocketTheme, LLC
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 */
class CrystallineSplitMenuFormatter extends AbstractRokMenuFormatter {

    function format_subnode(&$node) {
        // Format the current node
        if ($node->hasChildren()) {
            $node->addLinkClass("daddy");
        } else {
            $node->addLinkClass("orphan");
        }

        $node->addLinkClass("item");
    }
}