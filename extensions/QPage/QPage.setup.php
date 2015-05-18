<?php
/**
 * QPage a part of QWiki extension - show Quranic pages as holy quran.
 *
 * @link https://www.mediawiki.org/wiki/Extension:QPage Documentation
 *
 * @file
 * @ingroup Extensions
 * @package MediaWiki
 * @author M. Nasiri
 * @copyright (C) 2015 Tim Starling
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 */

if ( !defined( 'MEDIAWIKI' ) ) {
   die( 'This file is a MediaWiki extension, it is not a valid entry point' );
}

global $wgAutoloadClasses;
$wgAutoloadClasses['QPage'] = __DIR__ . '/QPage.body.php';
$wgSpecialPageGroups['QPage'] = 'pagetools';

$wgHooks['ParserFirstCallInit'][] = 'QPage::onParseInit';
// Extension credits that will show up on Special:Version    
$wgExtensionCredits['validextensionclass'][] = array(
    'path'           => __FILE__,
	'name'           => 'QPage',
	'version'        => '1.0',
	'author'         => 'M MN', 
	'url'            => 'https://www.mediawiki.org/wiki/Extension:QWiki',
	'descriptionmsg' => 'example-desc', // Message key in i18n file.
    'description'    => 'This extension is QPage a part of QWiki extension - show Quranic pages as holy quran.'
);
 
//$wgExtensionMessagesFiles[] = __DIR__ . '/Example.i18n.php';

