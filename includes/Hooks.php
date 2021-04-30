<?php

namespace TouhouThemeDB;

class Hooks {
	public static function onRegistration() {
		global $wgTranslateGroupRoot, $wgTranslateGroupFiles, $wgTranslateMessageNamespaces;
		// Only really necessary because processMessageChanges.php is dumb.
		$wgTranslateGroupRoot = __DIR__ . "/../resources";

		$wgTranslateGroupFiles[] = "$wgTranslateGroupRoot/themedb.yml";
		$wgTranslateMessageNamespaces[] = NS_THEMEDB;
	}
};
