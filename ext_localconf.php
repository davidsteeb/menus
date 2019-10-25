<?php

defined('TYPO3_MODE') or die();

$GLOBALS['TYPO3_CONF_VARS']['FE']['ContentObjects'] = array_merge($GLOBALS['TYPO3_CONF_VARS']['FE']['ContentObjects'], [
    'TREEMENU' => \B13\Menus\ContentObject\TreeMenuContentObject::class,
    'LISTMENU' => \B13\Menus\ContentObject\ListMenuContentObject::class,
    'LANGUAGEMENU' => \B13\Menus\ContentObject\LanguageMenuContentObject::class,
    'BREADCRUMBS' => \B13\Menus\ContentObject\BreadcrumbsContentObject::class
]);