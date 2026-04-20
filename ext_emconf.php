<?php

/***********************************************************************
 * Extension Manager/Repository config file for ext "t3up_heaaderimage".
 **********************************************************************/

/** @var string $_EXTKEY */
$EM_CONF[$_EXTKEY] = [
    'title'            => 'T3UP - Headerimage',
    'description'      => 'Headerimage as a content element',
    'version'          => '13.2.06',
    'state'            => 'stable',
    'category'         => 'fe',
    'author'           => 'Michael Lang',
    'author_email'     => 'info@t3ac.de',
    'author_company'   => 'Mediadesign',
    'uploadfolder'     => false,
    'createDirs'       => '',
    'clearcacheonload' => false,
    'constraints'      => [
        'depends'   => [
            'typo3'          => '13.4.0-',
            't3up'           => '13.2-',
        ],
        'conflicts' => [],
        'suggests'  => [],
    ],
];
