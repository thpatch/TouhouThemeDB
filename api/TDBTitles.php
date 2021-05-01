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
				$ret["$id/$language"] = $trans;
			}
		}
		foreach ( Title::REDIRECTS as $from => &$to ) {
			$dst = "$to/$language";
			if ( isset( $ret[$dst] ) ) {
				$ret["$from/$language"] = array( $dst );
			}
		}

		$result = $this->getResult();
		foreach ( $ret as $key => &$value ) {
			$result->addValue( null, $key, $value );
		}
	}
};
