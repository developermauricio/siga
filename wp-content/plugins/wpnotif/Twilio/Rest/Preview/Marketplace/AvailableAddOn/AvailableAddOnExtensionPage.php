<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Preview\Marketplace\AvailableAddOn;

use Twilio\Page;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contact help@twilio.com.
 */
class AvailableAddOnExtensionPage extends Page {
	public function __construct( $version, $response, $solution ) {
		parent::__construct( $version, $response );

		// Path Solution
		$this->solution = $solution;
	}

	public function buildInstance( array $payload ) {
		return new AvailableAddOnExtensionInstance(
			$this->version,
			$payload,
			$this->solution['availableAddOnSid']
		);
	}

	/**
	 * Provide a friendly representation
	 *
	 * @return string Machine friendly representation
	 */
	public function __toString() {
		return '[Twilio.Preview.Marketplace.AvailableAddOnExtensionPage]';
	}
}