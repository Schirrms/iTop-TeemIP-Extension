<?php
//
// iTop module definition file
//

SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'schirrms-teemip-extension/0.1.1',
	array(
		// Identification
		//
		'label' => 'TeemIP Extention for my own modules',
		'category' => 'business',

		// Setup
		//
		'dependencies' => array(
			'teemip-config-mgmt-adaptor/2.7.0',
			'schirrms-generic-connection/0.7.2',
			'schirrms-management-module/0.1.0'
		),
		'mandatory' => false,
		'visible' => true,

		// Components
		//
		'datamodel' => array(
			'model.schirrms-teemip-extension.php'
		),
		'webservice' => array(
			
		),
		'data.struct' => array(
			// add your 'structure' definition XML files here,
		),
		'data.sample' => array(
			// add your sample data XML files here,
		),
		
		// Documentation
		//
		'doc.manual_setup' => '', // hyperlink to manual setup documentation, if any
		'doc.more_information' => '', // hyperlink to more information, if any 

		// Default settings
		//
		'settings' => array(
			// Module specific settings go here, if any
		),
	)
);


?>
