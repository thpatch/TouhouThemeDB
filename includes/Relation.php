<?php

namespace TouhouThemeDB;

class Relation {
	public const DATA = [
		"th04_29" => [ 'a', ["th04_04"], ],
		"th04_30" => [ 'a', ["th04_15"], ],
		"th06_01" => [ 'a', ["th_main"], ],
		"th06_16" => [ 'a', ["th_main"], ],
		"mcd_01_02" => [ 'd', ["sh01_18"], ],
		"mcd_01_03" => [ 'd', ["sh02_08"], ],
		"mcd_01_04" => [ 'a', ["th06_07"], ],
		"mcd_01_05" => [ 'a', ["th01_05"], ],
		"mcd_01_06" => [ 'd', ["sh02_10"], ],
		"mcd_01_07" => [ 'a', ["sh01_09"], ],
		"mcd_01_09" => [ 'd', ["tmgc_01"], ],
		"mcd_01_10" => [ 'a', ["th03_04"], ],
		"mcd_01_11" => [ 'd', ["th06_15"], ],
		"mcd_01_12" => [ 'a', ["th01_02"], ],
		"th07_01" => [ 'a', ["th_main"], ],
		"th07_14" => [ 'a', ["th07_13"], ],
		"th07_17" => [ 'd', ["th07_15"], ],
		"th07_18" => [ 'a', ["th07_16"], ],
		"mcd_02_03" => [ 'a', ["th07_10"], ],
		"mcd_02_09" => [ 'a', ["sh01_11"], ],
		"mcd_02_10" => [ 'd', ["th07_16"], ],
		"th08_01" => [ 'a', ["th_main"], ],
		"th08_02" => [ 'd', ["mcd_02_05"], ],
		"th08_08" => [ 'a', ["th_main"], ],
		"th08_09" => [ 'a', ["th04_10"], ],
		"th08_10" => [ 'a', ["th02_09"], ],
		"th08_20" => [ 'a', ["th03_19"], ],
		"th075_01" => [ 'a', ["th075_34"], ],
		"th075_02" => [ 'a', ["th03_03"], ],
		"th075_03" => [ 'a', ["th04_10"], ],
		"th075_04" => [ 'a', ["th02_09"], ],
		"th075_05" => [ 'a', ["sh01_17"], ],
		"th075_06" => [ 'a', ["th06_10"], ],
		"th075_07" => [ 'a', ["th06_11"], ],
		"th075_08" => [ 'd', ["th07_06"], ],
		"th075_09" => [ 'a', ["th07_07"], ],
		"th075_10" => [ 'a', ["th06_09"], ],
		"th075_11" => [ 'a', ["th06_08"], ],
		"th075_12" => [ 'a', ["th07_11"], ],
		"th075_13" => [ 'a', ["th07_10"], ],
		"th075_14" => [ 'a', ["th06_13"], ],
		"th075_15" => [ 'd', ["th07_13"], ],
		"th075_20" => [ 'a', ["th075_34"], ],
		"mcd_03_03" => [ 'a', ["th06_06"], ],
		"mcd_03_04" => [ 'd', ["th08_13"], ],
		"mcd_03_06" => [ 'a', ["th08_08"], ],
		"mcd_03_07" => [ 'd', ["th075_17"], ],
		"mcd_03_08" => [ 'd', ["th07_07"], ],
		"mcd_03_10" => [ 'a', ["sh01_14"], ],
		"mcd_03_11" => [ 'd', ["th08_20"], ],
		"th09_01" => [ 'a', ["th_main"], ],
		"th09_05" => [ 'd', ["mcd_02_03"], ],
		"th09_06" => [ 'd', ["th08_12"], ],
		"th09_07" => [ 'a', ["th06_05"], ],
		"th09_08" => [ 'd', ["th07_09"], ],
		"th09_09" => [ 'd', ["th08_05"], ],
		"th09_16" => [ 'a', ["th09_01"], ],
		"mcd_baijr_01" => [ 'a', ["th09_11"], ],
		"mcd_baijr_02" => [ 'd', ["th09_07"], ],
		"mcd_baijr_03" => [ 'd', ["th09_16"], ],
		"th095_01" => [ 'a', ["th_main"], ],
		"th095_06" => [ 'a', ["th09_11"], ],
		"mcd_04_03" => [ 'd', ["th08_15"], ],
		"mcd_04_04" => [ 'd', ["th09_14"], ],
		"mcd_04_06" => [ 'd', ["th09_10"], ],
		"mcd_04_07" => [ 'd', ["th08_18"], ],
		"mcd_04_08" => [ 'd', ["th095_05"], ],
		"mcd_04_09" => [ 'a', ["th06_09"], ],
		"mcd_04_10" => [ 'd', ["th08_14"], ],
		"mcd_05_03" => [ 'a', ["th095_04"], ],
		"mcd_05_05" => [ 'd', ["th075_16"], ],
		"mcd_05_09" => [ 'a', ["th07_18"], ],
		"mcd_pmiss_03" => [ 'a', ["zsw_07"], ],
		"th10_01" => [ 'a', ["th_main"], ],
		"th10_18" => [ 'a', ["th10_13"], ],
		"alcostg_01" => [ 'a', ["alcostg_02"], ],
		"mcd_fairy02_01" => [ 'a', ["mcd_fairy01_01", "th06_15"], ],
		"mcd_ssib_03" => [ 'a', ["alcostg_06"], ],
		"th105_02" => [ 'a', ["th105_01"], ],
		"th105_04" => [ 'a', ["th105_01"], ],
		"th105_05" => [ 'a', ["th105_01"], ],
		"th105_08" => [ 'a', ["th105_01"], ],
		"th105_09" => [ 'a', ["th105_01"], ],
		"th105_11" => [ 'a', ["th105_01"], ],
		"th105_12" => [ 'a', ["th105_01"], ],
		"th105_14" => [ 'a', ["th105_01"], ],
		"th105_16" => [ 'a', ["th105_15"], ],
		"th105_17" => [ 'a', ["th105_01"], ],
		"th105_18" => [ 'a', ["th105_01"], ],
		"th105_19" => [ 'a', ["th03_03"], ],
		"th105_20" => [ 'a', ["th04_11"], ],
		"th105_21" => [ 'a', ["th09_04"], ],
		"th105_22" => [ 'a', ["th07_06"], ],
		"th105_23" => [ 'a', ["th07_11"], ],
		"th105_24" => [ 'a', ["th06_09"], ],
		"th105_25" => [ 'a', ["th07_13"], ],
		"th105_26" => [ 'a', ["th06_13"], ],
		"th105_27" => [ 'a', ["th075_17"], ],
		"th105_28" => [ 'a', ["th075_34"], ],
		"th105_29" => [ 'a', ["th08_12"], ],
		"th105_30" => [ 'a', ["th09_11"], ],
		"th105_31" => [ 'a', ["th09_14"], ],
		"th11_01" => [ 'a', ["th_main"], ],
		"th11_18" => [ 'd', ["th10_18"], ],
		"mcd_fairy03_02" => [ 'd', ["mcd_fairy01_01"], ],
		"mcd_fairy03_03" => [ 'd', ["mcd_fairy01_02"], ],
		"mcd_fairy03_04" => [ 'd', ["mcd_fairy01_03"], ],
		"mcd_gom_02" => [ 'd', ["sh01_08"], ],
		"th12_01" => [ 'a', ["th_main"], ],
		"th12_16" => [ 'a', ["th12_01"], ],
		"th12_17" => [ 'a', ["th12_13"], ],
		"th12_18" => [ 'd', ["th10_18"], ],
		"th123_01" => [ 'a', ["th105_01"], ],
		"th123_02" => [ 'a', ["th075_01"], ],
		"th123_04" => [ 'd', ["th10_11"], ],
		"th123_05" => [ 'a', ["th06_05"], ],
		"th123_07" => [ 'a', ["th06_06"], ],
		"th123_08" => [ 'a', ["th11_13"], ],
		"th123_11" => [ 'd', ["th123_10"], ],
		"th123_12" => [ 'a', ["sh01_18"], ],
		"th123_13" => [ 'a', ["th02_09"], ],
		"th123_14" => [ 'a', ["th05_17"], ],
		"th123_15" => [ 'd', ["th075_11"], ],
		"th123_16" => [ 'a', ["th10_14"], ],
		"th123_18" => [ 'a', ["th123_17", "th123_01"], ],
		"th123_19" => [ 'a', ["th03_03"], ],
		"th125_01" => [ 'a', ["th_main"], ],
		"th125_06" => [ 'd', ["th10_09"], ],
		"th125_07" => [ 'a', ["th125_01"], ],
		"mcd_fairy05_02" => [ 'd', ["th125_03"], ],
		"th128_01" => [ 'a', ["th_main"], ],
		"th128_02" => [ 'd', ["mcd_fairy03_01"], ],
		"th128_09" => [ 'a', ["th128_01"], ],
		"th128_10" => [ 'a', ["th10_18"], ],
		"mcd_fairy06_01" => [ 'a', ["th128_04"], ],
		"mcd_fairy06_02" => [ 'd', ["th128_05"], ],
		"mcd_fairy06_03" => [ 'd', ["th128_06"], ],
		"mcd_055_02" => [ 'a', ["th125_05"], ],
		"mcd_055_03" => [ 'd', ["th10_14"], ],
		"th13_01" => [ 'a', ["th_main"], ],
		"th13_18" => [ 'd', ["th128_10"], ],
		"mcd_fairy07_01" => [ 'd', ["th128_08"], ],
		"mcd_fairy07_02" => [ 'd', ["th128_03"], ],
		"mcd_fairy07_03" => [ 'd', ["th13_09"], ],
		"mcd_06_03" => [ 'a', ["th13_08"], ],
		"mcd_06_04" => [ 'a', ["mcd_fairy04_01"], ],
		"mcd_06_06" => [ 'a', ["th12_14"], ],
		"mcd_06_07" => [ 'a', ["th11_15"], ],
		"mcd_06_09" => [ 'a', ["th12_13"], ],
		"mcd_07_03" => [ 'a', ["th11_08"], ],
		"mcd_07_04" => [ 'a', ["th09_15"], ],
		"mcd_07_07" => [ 'a', ["th13_14"], ],
		"mcd_07_08" => [ 'a', ["th123_10"], ],
		"mcd_07_10" => [ 'a', ["th13_06"], ],
	];

	protected static function throwIfEmptyID( string &$id ) {
		if ( $id === '' ) {
			throw new \InvalidArgumentException( "Parameter 1 must not be empty" );
		}
	}

	public static function relation( string $id ): string {
		self::throwIfEmptyID( $id );
		$relation = self::DATA[$id] ?? null;
		return ( $relation ? $relation[0] : '' );
	}

	public static function sourcecount( string $id ): int {
		self::throwIfEmptyID( $id );
		$relation = self::DATA[$id] ?? null;
		return ( $relation ? count( $relation[1] ) : 0 );
	}

	public static function source( string $id, int $num ): string {
		self::throwIfEmptyID( $id );
		// No error check here! The user should have called `sourcecount( $id )` before.
		return self::DATA[$id][1][$num];
	}

	/**
	 * @return array [ <number of arrangements>, <number of duplicates> ]
	 */
	public static function countByType(): array {
		static $ret = null;
		$ret ??= array_reduce( self::DATA, function( array $carry, $item ) {
			switch( $item[0] ) {
				case "a": return [ ( $carry[0] + 1 ), $carry[1] ];
				case "d": return [ $carry[0], ( $carry[1] + 1 ) ];
			}
			throw new \DomainException( "Invalid relation type for $item" );
		}, [ 0, 0 ]);
		return $ret;
	}

	public static function countOfArrangements(): int {
		return self::countByType()[0];
	}

	public static function countOfDuplicates(): int {
		return self::countByType()[1];
	}
};
