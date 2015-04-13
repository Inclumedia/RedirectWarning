<?php
class SpecialRedirectWarning extends SpecialPage {
	function __construct() {
		parent::__construct( 'RedirectWarning' );
	}

	function execute( $par ) {
		$validSchemes = array( 'http', 'https' );
		$request = $this->getRequest();
		$output = $this->getOutput();
		$this->setHeaders();
		$parsed = parse_url( $par );
		if ( isset( $parsed['scheme'] ) ) {
			if ( in_array( $parsed['scheme'], $validSchemes ) ) {
				throw new ErrorPageError( 'redirectwarning-goodurl',
					'redirectwarning-goodurltext', $par
				);
			}
		}
		$title = Title::newFromText( $par );
		if ( $title ) {
			if ( !$title->isExternal() ) {
				$this->throwInvalid( $par );
			}
			throw new ErrorPageError( 'redirectwarning-goodinterwiki',
				'redirectwarning-goodinterwikitext',
				$par
			);
		} else {
			$this->throwInvalid( $par );
		}
	}

	function throwInvalid( $par ) {
		throw new ErrorPageError( 'redirectwarning-invalid',
			'redirectwarning-invalidtext', $par );
	}
}