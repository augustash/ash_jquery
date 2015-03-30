<?php
/**
 * Add Jquery/Jquery UI support
 *
 * @category    Ash
 * @package     Ash_Jquery
 * @copyright   Copyright (c) 2015 August Ash, Inc. (http://www.augustash.com)
 * @license     LICENSE.txt (MIT)
 */

class Ash_Jquery_Model_System_Config_Source_Version_Jquery
{
    /**
     * Select options array
     *
     * @var array
     */
    protected $_options;

    /**
     * Return a dropdown menu array of values
     *
     * @return  array
     */
    public function toOptionArray()
    {
        $this->_options = array(
            array('value' => '', 'label' => Mage::helper('adminhtml')->__('-- Please Select --')),
            array('value' => '1.11.2', 'label' => '1.11.2'),
            array('value' => '2.1.3', 'label' => '2.1.3'),
        );

        return $this->_options;
    }
}
