<?php

namespace TouhouThemeDB\Api;

use ApiQueryBase;

class TDBRelations extends ApiQueryBase {
	public function execute() {
		$result = $this->getResult();
		foreach ( \TouhouThemeDB\Relation::DATA as $key => &$value ) {
			$result->addValue( null, $key, $value );
		}
	}
};
