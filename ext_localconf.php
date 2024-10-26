<?php

defined('TYPO3_MODE') || defined('TYPO3') || die('Access denied.');

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

call_user_func(static function () {
  
    
    /* ==  Add TSconfig ============================================ */
    ExtensionManagementUtility::addPageTSConfig("@import 'EXT:t3up_headerimage/Configuration/TsConfig/Page/Mod/Wizards/NewContentElement.tsconfig'");
    
   	// Register icons
     $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
        
     $iconRegistry->registerIcon(
            't3upheaderimage_content',
            \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
            ['source' => 'EXT:t3up_headerimage/Resources/Public/Icons/t3upheaderimage.svg']
    ); 
     
     // Add backend preview hook
     $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['t3upheaderimage_content'] =
     T3ac\T3upHeaderimage\Hooks\HeaderimagePreviewRenderer::class;
     
}); 
