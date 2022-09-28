<?php

/*
 * This file is part of the composer package t3ac/t3up-headerimage.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

defined('TYPO3') || die('Access denied.');

(function () {
   /**
    * Extension key
    */
   $extensionKey = 't3up_headerimage';
   
   
    // Add PageTSConfig
   	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
         '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $extensionKey . '/Configuration/TsConfig/Page/Mod/Wizards/NewContentElement.typoscript">');
            
     // register icons
     $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
        
     $iconRegistry->registerIcon(
            't3up_headerimage',
            \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
            ['source' => 'EXT:t3up_headerimage/Resources/Public/Icons/t3upheaderimage.svg']
    ); 
})();
