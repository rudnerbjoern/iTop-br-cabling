<?php

/**
 * @copyright   Copyright (C) 2021 Björn Rudner
 * @license     https://www.gnu.org/licenses/gpl-3.0.en.html
 * @version     2021-05-12
 *
 * iTop module definition file
 */

SetupWebPage::AddModule(
    __FILE__, // Path to the current file, all other file names are relative to the directory containing this file
    'br-cabling/0.2.0',
    array(
        // Identification
        //
        'label' => 'Datamodel: Cabling between CIs',
        'category' => 'business',

        // Setup
        //
        'dependencies' => array(
            'itop-config-mgmt/2.7.1',
            'itop-datacenter-mgmt/2.7.0',
            'teemip-datacenter-mgmt-adaptor/2.7.0',
            'teemip-network-mgmt-extended/1.1.0',
            'itop-virtualization-mgmt/2.7.0',
            'itop-storage-mgmt/2.7.0'
        ),
        'mandatory' => false,
        'visible' => true,

        // Components
        //
        'datamodel' => array(),
        'webservice' => array(),
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
