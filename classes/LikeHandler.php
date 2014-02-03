<?php

/*
 * Contao Open Source CMS
 * Copyright (C) 2005-2012 Leo Feyer
 *
 */

namespace sioweb\contao\extensions\content;

/**
* @file LikeHandler.php
* @class LikeHandler
* @author Sascha Weidner
* @version 3.0.0
* @package sioweb.contao.extensions.content
* @copyright Sioweb - Sascha Weidner
*/
 
class LikeHandler extends \Frontend
{

	public function increaseLike()
	{
		$ButtonID = \Input::post('id');
		$Like = \Input::post('like');
		if(!$Like)
			$Like = 1;
		$UserIP = md5(date('Y').\Environment::get('ip'));
		$getIP = \SWLikecontentModel::findIpAndId($UserIP,$ButtonID);

		$countLikes = \SWLikecontentModel::countBy('button_id',$ButtonID);

		if($getIP != null)
			return array('msg' => $GLOBALS['like_content'][0],'code' => 0);

		if($ButtonID && $UserIP)
			$like = new SWLikecontentModel();
			$like->ip = $UserIP;
			$like->like = $Like;
			$like->button_id = $ButtonID;
			$like->session_id = session_id();
			$like->save();

		return array('msg' => $GLOBALS['like_content'][10],'count' => ($countLikes+1),'code' => 10);
	}
}