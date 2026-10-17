<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;
use TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider;


return [
    't3up-headerimage' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:t3up_headerimage/Resources/Public/Icons/t3upheaderimage.svg',
    ],
];