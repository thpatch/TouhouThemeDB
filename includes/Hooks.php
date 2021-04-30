<?php

namespace TouhouThemeDB;

use Parser;

class Hooks {
	const MAGIC_WORD_ID = 'MAG_tdb'; // must match the one defined in TouhouThemeDB.i18n.magic.php

	public static function onRegistration() {
		global $wgTranslateGroupRoot, $wgTranslateGroupFiles, $wgTranslateMessageNamespaces;
		// Only really necessary because processMessageChanges.php is dumb.
		$wgTranslateGroupRoot = __DIR__ . "/../resources";

		$wgTranslateGroupFiles[] = "$wgTranslateGroupRoot/themedb.yml";
		$wgTranslateMessageNamespaces[] = NS_THEMEDB;
	}

	public static function onParserFirstCallInit( Parser $parser ) {
		$parser->setFunctionHook(
			self::MAGIC_WORD_ID, [ self::class, 'onTDB' ], Parser::SFH_NO_HASH
		);
	 }

	public static function onTDB( Parser $parser, $param1, $param2 = '', $param3 = '' ) {
		switch ( $param1 ) {
			case 'relation':   	return Relation::relation( $param2 );
			case 'sourcecount':	return Relation::sourcecount( $param2 );
			case 'source':     	return Relation::source( $param2, intval( $param3 ) );
			case 'counts':     	return Count::counts( $param2 );
		}

		$components = explode ( '/', $param1 );
		if ( count($components) == 2 ) {
			return ( Title::lookup( $components[0], $components[1] ) ?? null );
		}
		return [ 'found' => false ];
	}
};
