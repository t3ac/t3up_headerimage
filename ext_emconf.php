<?php

/***********************************************************************
 * Extension Manager/Repository config file for ext "t3up_heaaderimage".
 **********************************************************************/

/** @var string $_EXTKEY */
$EM_CONF[$_EXTKEY] = [
    'title'            => 'T3UP - Headerimage',
    'description'      => 'Headerimage as a content element',
    'version'          => '11.1.02',
    'state'            => 'stable',
    'category'         => 'fe',
    'author'           => 'Michael Lang',
    'author_email'     => 'michael.lang@h-da.de',
    'author_company'   => 'h_da Hochschule Darmstadt',
    'uploadfolder'     => false,
    'createDirs'       => '',
    'clearcacheonload' => false,
    'constraints'      => [
        'depends'   => [
            'typo3' => '11.5.0-',
        ],
        'conflicts' => [],
        'suggests'  => [],
    ],
];
