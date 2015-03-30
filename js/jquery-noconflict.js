/**
 * Add Jquery/Jquery UI support
 *
 * @category    Ash
 * @package     Ash_Jquery
 * @copyright   Copyright (c) 2013 August Ash, Inc. (http://www.augustash.com)
 * @license     LICENSE.txt (MIT)
 */

/**
 * The below replaces jQuery's "$" with a "$J".
 *
 * Example Usage:
 *
 * $J(document).ready(function() {
 *     $J('<div id="mydiv">Hello World!</div>').appendTo($J('body'));
 *     $J('#mydiv').dialog();
 * });
 */

var $J = jQuery.noConflict();
