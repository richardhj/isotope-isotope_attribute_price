<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2011 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Ruud Walraven 2010
 * @author     Ruud Walraven <ruud.walraven@gmail.com>
 * @license    LGPL
 */


/**
 * Hook to add ajax upload option
 */
$GLOBALS['ISO_HOOKS']['calculatePrice'][] = array('IsotopeAttributePrice', 'attributePrice');

// Makes price adjustable by js in case not a variant product
$GLOBALS['ISO_HOOKS']['generateAttribute'][] = array('IsotopeAttributePrice', 'addPriceToVariants');

// Add option price options to the onchange handler
$GLOBALS['ISO_HOOKS']['generateProduct'][] = array('IsotopeAttributePrice', 'pickAdditionalAjaxOptions');

// calculate price when updated trough ajax
$GLOBALS['ISO_HOOKS']['generateAjaxProduct'][] = array('IsotopeAttributePrice', 'updateAjaxAttributePrice');
