<?php
/**
 * Metadata version
 */
$sMetadataVersion = '1.1';
 
/**
 * Module information
 */
$aModule = array(
    'id'           => 'psCDN',
    'title'        => 'psCDN',
    'description'  => array(
        'de' => 'Unterschiedliche URLs f&uuml;r CSS, IMG und JS Dateien.',
        'en' => 'Uses different URLs for CSS/IMG/JS files.',
    ),
    'thumbnail'    => '',
    'version'      => '1.0.0',
    'author'       => 'Proud Sourcing GmbH',
    'url'          => 'http://www.proudcommerce.com',
    'email'        => 'support@proudcommerce.com',
    'extend'       => array(
        'oxviewconfig'    =>      'proudsourcing/psCDN/core/pscdn_oxviewconfig'
    ),
    'files' => array(
    ),
   'templates' => array(
    ),
   'blocks' => array(
    ),
   'settings' => array(
    )
);