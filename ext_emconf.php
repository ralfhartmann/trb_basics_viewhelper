<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "trb_basics_viewhelper"
 *
 * Auto generated by Extension Builder 2014-10-01
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'TRB Basics: View Helper',
	'description' => 'Set of helpful view helpers',
	'category' => 'plugin',
	'author' => 'Boris Günther',
	'author_email' => 'info@boris-guenther.de',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => '0',
	'createDirs' => '',
	'clearCacheOnLoad' => 1,
	'version' => '2.0.0',
	'constraints' => array(
		'depends' => array(
			'typo3' => '6.2',
			'trb_basics' => '2.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
			'trb_basics_typoscript' => '2.0',
		),
	),
);