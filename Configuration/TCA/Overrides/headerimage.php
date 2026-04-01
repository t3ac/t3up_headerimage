<?php

defined('TYPO3') || die('Access denied.');

/***************
 * Assign Icon
 */
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['t3upheaderimage_content'] = 't3upheaderimage_content';

call_user_func(function () {
    
     $frontendLanguageFilePrefix = 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:';

    // Add the CType "headerimage_content"
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
        'tt_content',
        'CType',
        ['Headerimage', 't3upheaderimage_content', 't3upheaderimage_content']
    );

    // Define what fields to display
    $GLOBALS['TCA']['tt_content']['types']['t3upheaderimage_content'] = [
        'showitem' => '
            --palette--;    
                ' . $frontendLanguageFilePrefix . 'palette.general;general,  
                 header,header_link,subheader,
                 assets, 
		    --div--;LLL:EXT:t3up_headerimage/Resources/Private/Language/locallang.xlf:headerimage.flexvalues, pi_flexform,
		    --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
		    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,space_after_class,
		    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,
		    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
		    --palette--;;hidden,
		    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
		      
        ',
        'columnsOverrides' => [
            'assets' => [
                'config' => [
                    'maxitems' => '1',
                    'minitems' => '1'
                ]
            ],
        ]
    ];

    // Add a flexform to the Headerimage CType
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
        '*',
        'FILE:EXT:t3up_headerimage/Configuration/FlexForms/HeaderimageContent.xml',
        't3upheaderimage_content'
    );

});
