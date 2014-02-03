<?php

/*
 * Contao Open Source CMS
 * Copyright (C) 2005-2012 Leo Feyer
 *
 */

namespace sioweb\contao\extensions\content;

/**
* @file SWLikecontentModel.php
* @class SWLikecontentModel
* @author Sascha Weidner
* @version 3.0.0
* @package sioweb.contao.extensions.content
* @copyright Sioweb - Sascha Weidner
*/
 

if(!class_exists('SWLikecontentModel'))
{
	
class SWLikecontentModel extends \Model
{
	/**
	 * Table name
	 * @var string
	 */
	protected static $strTable = 'tl_sw_likecontent';

	public static function findIpAndId($ip, $id,$arrOptions = array())
	{
		$t = static::$strTable;
		$arrColumns = array("$t.ip=? AND $t.button_id = ?");

		return static::findOneBy($arrColumns, array($ip,$id), $arrOptions);
	}
}

}