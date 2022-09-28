<?php
defined('TYPO3_MODE') or die();


/***************
 * Assign Icon
 */
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['image'] = 't3up_headerimage';

call_user_func(function () {
    
     $customLanguageFilePrefix   = 'LLL:EXT:t3up_headerimage/Resources/Private/Language/locallang_backend.xlf:';
     $frontendLanguageFilePrefix = 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:';

    // Add the CType "headerimage_content"
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
        'tt_content',
        'CType',
        ['Headerimage', 'headerimage_content', 't3up_headerimage']
    );

    // Define what fields to display
    $GLOBALS['TCA']['tt_content']['types']['headerimage_content'] = [
        'showitem' => '
            --palette--;    
                ' . $frontendLanguageFilePrefix . 'palette.general;general,  
                 header,header_link,subheader,
                 image, 
		    --div--;LLL:EXT:t3up_headerimage/Resources/Private/Language/locallang_backend.xlf:headerimage.flexvalues, pi_flexform,
		    --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
		    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,space_after_class,
		    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,
		    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
		    --palette--;;hidden,
		    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
		      
        ',
        'columnsOverrides' => [
            'image' => [
                'config' => [
                    'maxitems' => '1',
                    'minitems' => '1'
                ]
            ],
            'header' => [
                'config' => [
                    'eval' => 'required'
                ]
            ],
        ]
    ];

    // Add a flexform to the Headerimage CType
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
        '*',
        'FILE:EXT:t3up_headerimage/Configuration/FlexForms/HeaderimageContent.xml',
        'headerimage_content'
    );

});
