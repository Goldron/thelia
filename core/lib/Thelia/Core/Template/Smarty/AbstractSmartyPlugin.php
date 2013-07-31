<?php
/*************************************************************************************/
/*                                                                                   */
/*      Thelia	                                                                     */
/*                                                                                   */
/*      Copyright (c) OpenStudio                                                     */
/*	    email : info@thelia.net                                                      */
/*      web : http://www.thelia.net                                                  */
/*                                                                                   */
/*      This program is free software; you can redistribute it and/or modify         */
/*      it under the terms of the GNU General Public License as published by         */
/*      the Free Software Foundation; either version 3 of the License                */
/*                                                                                   */
/*      This program is distributed in the hope that it will be useful,              */
/*      but WITHOUT ANY WARRANTY; without even the implied warranty of               */
/*      MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the                */
/*      GNU General Public License for more details.                                 */
/*                                                                                   */
/*      You should have received a copy of the GNU General Public License            */
/*	    along with this program. If not, see <http://www.gnu.org/licenses/>.         */
/*                                                                                   */
/*************************************************************************************/

namespace Thelia\Core\Template\Smarty;

/**
 *
 * The class all Smarty Thelia plugin shoud extend
 *
 * Class AbstractSmartyPlugin
 * @package Thelia\Core\Template\Smarty
 */
abstract class AbstractSmartyPlugin
{
	/**
	 * Explode a comma separated list in a array, trimming all array elements
	 *
	 * @param unknown $commaSeparatedValues
	 * @return multitype:
	 */
	protected function _explode($commaSeparatedValues)
	{
		$array = explode(',', $commaSeparatedValues);

		if (array_walk($array, function(&$item) {
			$item = strtoupper(trim($item));
		})) {
			return $array;
		}

		return array();
	}

    /**
     * @return an array of SmartyPluginDescriptor
     */
    public abstract function getPluginDescriptors();
}
