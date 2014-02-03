<?php

/*
 * Contao Open Source CMS
 * Copyright (C) 2005-2012 Leo Feyer
 *
 */

/**
* @file autoload.php
* @author Sascha Weidner
* @version 3.0.0
* @package sioweb.contao.extensions.content
* @copyright Sioweb - Sascha Weidner
*/


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'sioweb\contao\extensions\content'
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'sioweb\contao\extensions\content\LikeHandler'			=> 'system/modules/SWLikeContent/classes/LikeHandler.php',

	// Elements
	'sioweb\contao\extensions\content\LikeContent'			=> 'system/modules/SWLikeContent/elements/LikeContent.php',

	// Models
	'sioweb\contao\extensions\content\SWLikecontentModel'	=> 'system/modules/SWLikeContent/models/SWLikecontentModel.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_like_default'       	   => 'system/modules/SWLikeContent/templates',
));
