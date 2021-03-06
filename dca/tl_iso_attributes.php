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
 *
 * @copyright  Ruud Walraven 2010
 * @author     Ruud Walraven <ruud.walraven@gmail.com>
 * @license    LGPL
 */

/**
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_iso_attributes']['palettes']['text'] = str_replace(',datepicker', ',datepicker,calculation_operator', $GLOBALS['TL_DCA']['tl_iso_attributes']['palettes']['text']);


/**
 * Fields
 */
array_insert($GLOBALS['TL_DCA']['tl_iso_attributes']['fields']['options']['eval']['columnFields'], 2, array
(
	'price' => array
	(
		'label'     => &$GLOBALS['TL_LANG']['tl_iso_attributes']['options']['price'],
		'inputType' => 'text',
		'eval'      => array('class' => 'tl_text_2'),
	),
));

$GLOBALS['TL_DCA']['tl_iso_attributes']['fields']['calculation_operator'] = array
(
	'label'     => &$GLOBALS['TL_LANG']['tl_iso_attributes']['calculation_operator'],
	'inputType' => 'select',
	'options'   => array('+', '-', '*', '/'),
	'eval'      => array('includeBlankOption' => true)
);
