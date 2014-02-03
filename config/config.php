<?php

/*
 * Contao Open Source CMS
 * Copyright (C) 2005-2012 Leo Feyer
 *
 */

/**
* @file config.php
* @author Sascha Weidner
* @version 3.0.0
* @package sioweb.contao.extensions.glossar
* @copyright Sioweb - Sascha Weidner
*/



if(TL_MODE == 'FE')
{
	$GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/SWLikeContent/assets/like.js';
	$GLOBALS['TL_CSS']['like_css'] = 'system/modules/SWLikeContent/assets/like.css';
	$GLOBALS['TL_JQUERY'][] = '<script>var Contao = {request_token: "'.$_SESSION['REQUEST_TOKEN'].'"};</script>';
}


$GLOBALS['TL_CTE']['texts']['sw_likecontent'] = 'LikeContent';


if($_POST['increase_like'] == 1)
$GLOBALS['TL_HOOKS']['dispatchAjax'][] = array('LikeHandler', 'increaseLike');
