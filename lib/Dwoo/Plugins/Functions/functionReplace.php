<?php
namespace Dwoo\Plugins\Functions;
use Dwoo\Compiler;

/**
 * Replaces the search string by the replace string
 * <pre>
 *  * value : the string to search into
 *  * search : the string to search for
 *  * replace : the string to use as a replacement
 * </pre>
 * This software is provided 'as-is', without any express or implied warranty.
 * In no event will the authors be held liable for any damages arising from the use of this software.
 *
 * @author     Jordi Boggiano <j.boggiano@seld.be>
 * @copyright  Copyright (c) 2008, Jordi Boggiano
 * @license    http://dwoo.org/LICENSE   Modified BSD License
 * @link       http://dwoo.org/
 * @version    2.0
 * @date       2013-09-06
 * @package    Dwoo
 */
function functionReplaceCompile(Compiler $compiler, $value, $search, $replace, $case_sensitive = true) {
	if ($case_sensitive === false) {
		return 'str_ireplace(' . $search . ', ' . $replace . ', ' . $value . ')';
	}
	else {
		return 'str_replace(' . $search . ', ' . $replace . ', ' . $value . ')';
	}
}
