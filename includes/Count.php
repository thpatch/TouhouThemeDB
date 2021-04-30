<?php

namespace TouhouThemeDB;

class Count {
	protected static function addCountsTo( &$ret, $map ): int {
		$total = 0;
		foreach ( $map as $id => $value ) {
			$game = substr( $id, 0, strrpos( $id, '_' ) );
			if ( !isset( $ret[$game] ) ) {
				$ret[$game] = 0;
			}
			// Skip alternative titles
			if ( is_numeric( $id[-1] ) ) {
				$ret[$game]++;
				$total++;
			}
		}
		return $total;
	}

	public static function counts( string $id ): int {
		if ( $id === '' ) {
			throw new \InvalidArgumentException( "Parameter 1 must not be empty" );
		}

		// Maps game IDs to the number of themes they contain.
		static $counts = array();
		static $total = 0;
		if ( count( $counts ) === 0 ) {
			$total += self::addCountsTo( $counts, Title::getGroup()->getDefinitions() );
			$total += self::addCountsTo( $counts, Title::REDIRECTS );
		}

		switch( $id ) {
			case "total":     	return $total;
			case "normalized":	return ( $total - Relation::countOfDuplicates() );
			case "unique":    	return ( $total - Relation::countOfArrangements() - Relation::countOfDuplicates() );
		}
		if ( !isset( $counts[$id]) ) {
			throw new \InvalidArgumentException( "Got no themes for \"$id\"?" );
		}
		return $counts[$id];
	}
};
