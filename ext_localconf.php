<?php

/*
 * This file is part of the composer package t3ac/t3up_headerimage.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

defined('TYPO3') || die('Access denied.');

call_user_func(static function () {
  
    // Add PageTSConfig
   	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
         '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:t3up_headerimage/Configuration/TsConfig/Page/Mod/Wizards/NewContentElement.typoscript">');
            
   	// Register icons
     $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
        
     $iconRegistry->registerIcon(
            't3upheaderimage_content',
            \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
            ['source' => 'EXT:t3up_headerimage/Resources/Public/Icons/t3upheaderimage.png']
    ); 
     
     // Add backend preview hook
     $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['t3upheaderimage_content'] =
     T3ac\T3upHeaderimage\Hooks\HeaderimagePreviewRenderer::class;
     
}); 