<?php
/**
 * RedirectWarning MediaWiki extension.
 *
 * This extension adds a preferences checkbox allowing users to have all
 * changes to pages on the wiki emailed to them.
 *
 * Written by Lysander
 * https://www.boywiki.org/en/User:Lysander
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 * @ingroup Extensions
 */

# Alert the user that this is not a valid entry point to MediaWiki if the user tries to access the
# extension file directly.
if( !defined('MEDIAWIKI' ) ) {
	die( 'This file is a MediaWiki extension. It is not a valid entry point' );
}

$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,
	'name' => 'RedirectWarning',
	'author' => 'Nathan Larson',
	'url' => 'https://www.boywiki.org/en/User:Lysander/RedirectWarning',
	'descriptionmsg' => 'redirectwarning-desc',
	'version' => '1.1.1',
);

$wgAutoloadClasses['SpecialRedirectWarning'] = __DIR__ . '/SpecialRedirectWarning.php';
$wgMessagesDirs['RedirectWarning'] = __DIR__ . '/i18n';
#$wgExtensionMessagesFiles['RedirectWarning'] = __DIR__ . '/RedirectWarning.i18n.php';
$wgSpecialPages['RedirectWarning'] = 'SpecialRedirectWarning';