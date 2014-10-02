<?php
if(!defined('TYPO3_MODE')) {
	die('Access denied.');
}


/*
 * SETUP TYPE
 */
$GLOBALS['TCA']['tt_content']['types']['trbcebutton_button']['showitem']	= '
	--palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.general;general,
	layout;LLL:EXT:cms/locallang_ttc.xlf:layout_formlabel,
	tx_trb_basics_fontawesome_icon,
	header;LLL:EXT:cms/locallang_ttc.xlf:header_formlabel,
	--linebreak--,
	header_link;LLL:EXT:cms/locallang_ttc.xlf:header_link_formlabel,

--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,
	--palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.visibility;visibility,
	--palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.access;access,

--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.extended,

--div--;LLL:EXT:lang/locallang_tca.xlf:sys_category.tabs.category,
	categories

';
