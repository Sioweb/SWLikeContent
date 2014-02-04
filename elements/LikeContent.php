<?php

/*
 * Contao Open Source CMS
 * Copyright (C) 2005-2012 Leo Feyer
 *
 */

namespace sioweb\contao\extensions\content;

/**
* @file LikeContent.php
* @class LikeContent
* @author Sascha Weidner
* @version 3.0.0
* @package sioweb.contao.extensions.content
* @copyright Sioweb - Sascha Weidner
*/
 
class LikeContent extends \ContentElement
{
	
	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_like_default';


	/**
	 * Return if there are no files
	 * @return string
	 */
	public function generate()
	{
		return parent::generate();
	}
	
	public function compile() 
	{
		$Likes = \SWLikecontentModel::findBy('button_id',$this->id);
		if($Likes == null)
			return false;

		while($Likes->next())
			if($Likes->session_id == session_id())
				$this->Template->same_session = 1;
		$this->Template->countLikes = $Likes->count();
		$this->Template->likeText = $GLOBALS['like_content']['like_text'];
	}
}