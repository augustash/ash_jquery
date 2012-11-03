<?php
/**
 * Add Jquery/Jquery UI support
 *
 * @category    Ash
 * @package     Ash_Core
 * @copyright   Copyright (c) 2012 August Ash, Inc. (http://www.augustash.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Core data helper
 *
 * @category    Ash
 * @package     Ash_Jquery
 * @author      August Ash Team <core@augustash.com>
 */
class Ash_Jquery_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * jQuery Enabled
     *
     * @var string
     */
    const XML_PATH_JQUERY_FRONT_ENABLED = 'ash_jquery/jquery/front_enabled';

    /**
     * jQuery UI Enabled
     *
     * @var string
     */
    const XML_PATH_JQUERYUI_FRONT_ENABLED = 'ash_jquery/jquery_ui/front_enabled';

    /**
     * jQuery Enabled
     *
     * @var string
     */
    const XML_PATH_JQUERY_ADMIN_ENABLED = 'ash_jquery/jquery/admin_enabled';

    /**
     * jQuery UI Enabled
     *
     * @var string
     */
    const XML_PATH_JQUERYUI_ADMIN_ENABLED = 'ash_jquery/jquery_ui/admin_enabled';

    /**
     * Check if jQuery is enabled globally
     *
     * @param  string $type
     * @return bool
     */
    static public function isEnabled($type='jquery')
    {
        return (self::_isEnabled('front', $type) && self::_isEnabled('admin', $type));
    }

    /**
     * Check if jQuery is enabled on frontend
     *
     * @param  string $type
     * @return bool
     */
    static public function isEnabledOnFront($type='jquery')
    {
        return self::_isEnabled('front', $type);
    }

    /**
     * Check if jQuery is enabled on admin
     *
     * @param  string $type
     * @return bool
     */
    static public function isEnabledOnAdmin($type='jquery')
    {
        return self::_isEnabled('admin', $type);
    }

    /**
     * Check if is enabled
     *
     * @param  string $location
     * @param  string $type
     * @return bool
     */
    static protected function _isEnabled($location, $type='jquery')
    {
        if ($location == 'front') {
            switch ($type) {
                case 'jquery':
                    if (Mage::getStoreConfig(self::XML_PATH_JQUERY_FRONT_ENABLED)) {
                        return true;
                    }
                    break;
                case 'jquery_ui':
                    if (Mage::getStoreConfig(self::XML_PATH_JQUERYUI_FRONT_ENABLED)) {
                        return true;
                    }
                    break;
            }
        } elseif ($location == 'admin') {
            switch ($type) {
                case 'jquery':
                    if (Mage::getStoreConfig(self::XML_PATH_JQUERY_ADMIN_ENABLED)) {
                        return true;
                    }
                    break;
                case 'jquery_ui':
                    if (Mage::getStoreConfig(self::XML_PATH_JQUERYUI_ADMIN_ENABLED)) {
                        return true;
                    }
                    break;
            }
        }

        return false;
    }
}
