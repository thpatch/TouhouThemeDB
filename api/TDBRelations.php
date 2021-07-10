<?php

namespace TouhouThemeDB\Api;

use ApiQueryBase;

class TDBRelations extends ApiQueryBase {
	public function isReadMode(): bool {
		return false;
	}

	public function execute() {
		$result = $this->getResult();
		foreach ( \TouhouThemeDB\Relation::DATA as $key => &$value ) {
			$result->addValue( null, $key, $value );
		}
	}

	protected function getExamplesMessages(): array {
		return [
			'action=query&list=tdbrelations&format=json&rawcontinue' => 'apihelp-query+tdbrelations-example-sane'
		];
	}
};
