<?php

namespace TouhouThemeDB;

use MediaWiki\MediaWikiServices;
use MessageGroup, MessageGroups, SpecialPage;

class Title {
	protected const GROUP_ID = 'themedb';
	public const REDIRECTS = array(
		"mcd_01_04" => "th06_07",
		"mcd_01_05" => "th01_05",
		"mcd_01_09" => "tmgc_01",
		"mcd_01_11" => "th06_15",
		"mcd_01_12" => "th01_02",
		"mcd_02_03" => "th07_10",
		"mcd_02_09" => "sh01_11",
		"mcd_02_10" => "th07_16",
		"th08_02" => "mcd_02_05",
		"th075_02" => "th03_03",
		"th075_03" => "th04_10",
		"th075_04" => "th02_09",
		"th075_06" => "th06_10",
		"th075_07" => "th06_11",
		"th075_08" => "th07_06",
		"th075_10" => "th06_09",
		"th075_11" => "th06_08",
		"th075_12" => "th07_11",
		"th075_13" => "th07_10",
		"th075_14" => "th06_13",
		"th075_15" => "th07_13",
		"mcd_03_03" => "th06_06",
		"mcd_03_04" => "th08_13",
		"mcd_03_06" => "th08_08",
		"mcd_03_07" => "th075_17",
		"mcd_03_08" => "th07_07",
		"th09_05" => "th07_10",
		"th09_06" => "th08_12",
		"th09_08" => "th07_09",
		"mcd_baijr_01" => "th09_11",
		"mcd_baijr_02" => "th09_07",
		"th095_06" => "th09_11",
		"mcd_04_03" => "th08_15",
		"mcd_04_04" => "th09_14",
		"mcd_04_06" => "th09_10",
		"mcd_04_07" => "th08_18",
		"mcd_04_08" => "th095_05",
		"mcd_04_09" => "th06_09",
		"mcd_04_10" => "th08_14",
		"mcd_05_03" => "th095_04",
		"mcd_05_05" => "th075_16",
		"mcd_05_09" => "th07_18",
		"th105_19" => "th03_03",
		"th105_20" => "th04_11",
		"th105_21" => "th09_04",
		"th105_22" => "th07_06",
		"th105_23" => "th07_11",
		"th105_24" => "th06_09",
		"th105_25" => "th07_13",
		"th105_26" => "th06_13",
		"th105_27" => "th075_17",
		"th105_28" => "th075_34",
		"th105_29" => "th08_12",
		"th105_30" => "th09_11",
		"th105_31" => "th09_14",
		"th11_18" => "th10_18",
		"mcd_fairy03_02" => "mcd_fairy01_01",
		"mcd_fairy03_03" => "mcd_fairy01_02",
		"mcd_fairy03_04" => "mcd_fairy01_03",
		"mcd_gom_02" => "sh01_08",
		"th12_18" => "th10_18",
		"th123_02" => "th075_01",
		"th123_04" => "th10_11",
		"th123_05" => "th06_05",
		"th123_07" => "th06_06",
		"th123_08" => "th11_13",
		"th123_12" => "sh01_18",
		"th123_13" => "th02_09",
		"th123_14" => "th05_17",
		"th123_15" => "th06_08",
		"th123_16" => "th10_14",
		"th125_06" => "th10_09",
		"mcd_fairy05_02" => "th125_03",
		"th128_02" => "mcd_fairy03_01",
		"th128_10" => "th10_18",
		"mcd_fairy06_01" => "th128_04",
		"mcd_fairy06_02" => "th128_05",
		"mcd_fairy06_03" => "th128_06",
		"mcd_055_02" => "th125_05",
		"mcd_055_03" => "th10_14",
		"th13_18" => "th10_18",
		"mcd_fairy07_01" => "th128_08",
		"mcd_fairy07_02" => "th128_03",
		"mcd_fairy07_03" => "th13_09",
		"mcd_06_03" => "th13_08",
		"mcd_06_04" => "mcd_fairy04_01",
		"mcd_06_06" => "th12_14",
		"mcd_06_07" => "th11_15",
		"mcd_06_09" => "th12_13",
		"mcd_07_03" => "th11_08",
		"mcd_07_04" => "th09_15",
		"mcd_07_07" => "th13_14",
		"mcd_07_08" => "th123_10",
		"mcd_07_10" => "th13_06",
		"th14_18" => "th10_18",
		"th135_02" => "th09_02",
		"th135_03" => "th128_08",
		"th135_04" => "th12_07",
		"th135_05" => "th12_13",
		"th135_06" => "th13_11",
		"th135_07" => "th13_13",
		"th135_08" => "th10_07",
		"th135_09" => "th11_15",
		"th135_10" => "th13_15",
		"th143_06" => "th14_03",
		"th143_07" => "th14_11",
		"th143_08" => "th14_09",
		"th143_09" => "th10_09",
		"th145_19" => "mcd_01_02",
		"th145_20" => "th08_10",
		"th145_21" => "th12_07",
		"th145_22" => "th12_13",
		"th145_23" => "th13_11",
		"th145_24" => "th13_13",
		"th145_25" => "th10_07",
		"th145_26" => "th11_15",
		"th145_27" => "th135_11",
		"th145_28" => "th135_12",
		"th145_29" => "th08_18",
		"th145_30" => "th14_13",
		"th15_18" => "th10_18",
		"mcd_08_02" => "th15_08",
		"mcd_08_04" => "th15_05",
		"mcd_08_07" => "th14_10",
		"mcd_08_09" => "th15_12",
		"mcd_08_10" => "th15_13",
		"mcd_08_11" => "th143_05",
		"mcd_scoow02_01" => "th145_ps4_04",
		"mcd_scoow02_03" => "th145_16",
		"mcd_09_03" => "th14_11",
		"mcd_09_05" => "th13_11",
		"mcd_09_06" => "th15_15",
		"mcd_09_08" => "th12_10",
		"mcd_09_09" => "th135_26",
		"th145_ps4_01" => "th08_12",
		"mcd_fs_02" => "th14_04",
		"mcd_fs_03" => "th15_03",
		"mcd_scoow03_01" => "mcd_03_01",
		"mcd_scoow03_02" => "th14_02",
		"mcd_scoow03_03" => "alcostg_06",
		"th16_18" => "th10_18",
		"th155_01" => "mcd_01_02",
		"th155_02" => "th08_10",
		"th155_03" => "th12_07",
		"th155_04" => "th12_13",
		"th155_05" => "th13_11",
		"th155_06" => "th13_13",
		"th155_07" => "th10_07",
		"th155_08" => "th11_15",
		"th155_09" => "th135_11",
		"th155_10" => "th135_12",
		"th155_11" => "th08_18",
		"th155_12" => "th14_13",
		"th155_13" => "th145_14",
		"th155_14" => "th145_16",
		"th155_15" => "th08_12",
		"th155_16" => "th15_07",
		"th155_17" => "th105_15",
		"th155_18" => "th075_17",
		"th155_38" => "th145_ps4_04",
		"th155_39" => "th145_ps4_02",
		"th155_40" => "th145_ps4_03",
		"th155_41" => "th145_ps4_06",
		"th155_58" => "th123_17",
		"mcd_scoow05_03" => "th07_18",
		"th165_05" => "mcd_09_01",
		"th165_06" => "mcd_09_02",
		"th165_07" => "th15_07",
		"th165_08" => "th16_13",
		"th17_18" => "th10_18",
		"th18_18" => "th10_18",
		"th175_04" => "mcd_gom_01",
		"th175_05" => "th11_02",
		"th175_06" => "th11_06",
		"th175_07" => "th11_12",
		"th175_08" => "th10_12",
		"th175_10" => "th17_06",
		"th175_11" => "th06_14",
		"th175_12" => "th08_09",
		"th175_13" => "th08_10",
		"th175_14" => "th11_03",
		"th175_15" => "th12_05",
		"th175_16" => "th12_09",
		"th175_17" => "th10_13",
		"th175_18" => "th155_37",
		"th175_19" => "th11_07",
		"th175_20" => "th11_13",
		"th175_21" => "th17_07",
		"th175_22" => "th06_15",
		"mcd_095_02" => "th16_08",
		"mcd_095_03" => "th18_13",
		"th185_07" => "th165_03",
		"th185_08" => "th18_12",
		"th185_09" => "th18_13",
		"th185_10" => "th18_17",
		"th19_10" => "th10_10",
		"th19_11" => "th07_17",
		"th19_12" => "th16_07",
		"th19_13" => "th12_02",
		"th19_14" => "th15_02",
		"th19_15" => "th11_11",
		"th19_16" => "th18_10",
		"th19_17" => "th13_15",
		"th19_18" => "th17_09",
		"th19_19" => "th17_15",
		"th19_20" => "th175_23",
	);

	public static function getGroup(): MessageGroup {
		static $group = null;
		return ( $group ??= MessageGroups::getGroup( self::GROUP_ID ) );
	}

	/**
	 * Common theme title sanitizer for general display and APIs.
	 *
	 * @return string Sanitized theme title. `null` will sanitize to "".
	 */
	public static function sanitize( ?string $title ): string {
		// Leading whitespace (MediaWiki already trims trailing whitespace)
		$title = ltrim( $title ?? "" );

		// HTML comments
		$title = preg_replace( '/\s*<!--(.*?)-->\s*/s', '', $title );

		return $title;
	}

	/**
	 * Looks up the translation for the theme with the given ID in the given language. Follows the
	 * same-name `self::REDIRECTS`, does not follow any #REDIRECTs on the translation page.
	 *
	 * @return ?string Empty string for nonexistent translations, null for invalid theme IDs.
	 */
	public static function lookup( string $id, string $lang ): ?string {
		$group = self::getGroup();

		// Per-language message collection cache.
		static $collections = array();

		if ( isset( self::REDIRECTS[$id] ) ) {
			$id = self::REDIRECTS[$id];
		}

		if ( $lang == 'ja' ) {
			return $group->getMessage( $id, $lang );
		} else if ( !isset( $collections[$lang] ) ) {
			$collections[$lang] = $group->initCollection( $lang );
			$collections[$lang]->loadTranslations();
		}

		// Nonexistent themes really shouldn't raise an exception that prevents an entire page
		// from rendering.
		if ( !isset( $collections[$lang][$id] ) ) {
			return null;
		}
		return self::sanitize( $collections[$lang][$id]->translation() );
	}

	/**
	 * Combines a lookup with an edit link. Falls back on regular lookup if ($lang === 'ja').
	 *
	 * @return ?array Parser hook array with an HTML link, or null for invalid theme IDs.
	 */
	public static function lookupEditLink( string $id, string $lang ): ?array {
		static $specialTranslate = null;
		static $untranslatedString = array();

		$title = self::lookup( $id, $lang );
		if ( $title === null ) {
			return null;
		}

		if ( $lang === 'ja' ) {
			return [ $title ];
		}

		if ( isset( self::REDIRECTS[$id] ) ) {
			$id = self::REDIRECTS[$id];
		}

		$specialTranslate ??= SpecialPage::getTitleFor( 'Translate' );
		$linkRenderer = MediaWikiServices::getInstance()->getLinkRenderer();
		$target = $specialTranslate->createFragmentTarget( $id );
		$attribs = [
			'class' => 'tdb-theme',
			'title' => "$id",
		];
		if ( $title === '' ) {
			$untranslatedString[$lang] ??= wfMessage( 'tdb-untranslated' )->inLanguage( $lang );
			$title = $untranslatedString[$lang];
			$attribs['class'] .= ' new';
		}
		$link = $linkRenderer->makeKnownLink( $target, $title, $attribs, [
			// See TranslatablePage::getTranslationUrl()
			'group' => self::GROUP_ID,
			'filter' => '', // yup, defaults to '!translated' otherwise
			'language' => $lang,
		] );
		return [ $link, 'isHTML' => true ];
	}
};
