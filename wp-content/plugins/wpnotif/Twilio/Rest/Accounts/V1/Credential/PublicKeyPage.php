<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Accounts\V1\Credential;

use Twilio\Page;

class PublicKeyPage extends Page {
	public function __construct( $version, $response, $solution ) {
		parent::__construct( $version, $response );

		// Path Solution
		$this->solution = $solution;
	}

	public function buildInstance( array $payload ) {
		return new PublicKeyInstance( $this->version, $payload );
	}

	/**
	 * Provide a friendly representation
	 *
	 * @return string Machine friendly representation
	 */
	public function __toString() {
		return '[Twilio.Accounts.V1.PublicKeyPage]';
	}
}