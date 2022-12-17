<?php

namespace TouhouThemeDB\Api;

use ApiBase, ApiQueryBase;
use TouhouThemeDB\Title;

class TDBTitles extends ApiQueryBase {
	public function getAllowedParams() {
		return array(
			'language' => array(
				ApiBase::PARAM_TYPE => 'string',
				APIBase::PARAM_REQUIRED => true,
			)
		);
	}

	public function execute() {
		$language = $this->extractRequestParams()['language'];

		$collection = Title::getGroup()->initCollection( $language );
		$collection->loadTranslations();

		$ret = array();
		foreach ( $collection as $id => $value ) {
			$trans = $value->translation();
			if ( $trans ) {
				$ret[$id] = $trans;
			}
		}
		foreach ( Title::REDIRECTS as $from => &$to ) {
			if ( isset( $ret[$to] ) ) {
				$ret[$from] = array( $to );
			}
		}

		$result = $this->getResult();
		foreach ( $ret as $key => &$value ) {
			$result->addValue( null, $key, $value );
		}
	}

	protected function getExamplesMessages(): array {
		return [
			'action=query&list=tdbtitles&language=ja&format=json&utf8&rawcontinue' => 'apihelp-query+tdbtitles-example-ja',
			'action=query&list=tdbtitles&language=eo&format=json&utf8&rawcontinue' => 'apihelp-query+tdbtitles-example-eo'
		];
	}
};
