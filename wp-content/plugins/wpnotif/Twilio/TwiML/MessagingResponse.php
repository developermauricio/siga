<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\TwiML;

class MessagingResponse extends TwiML {
	/**
	 * MessagingResponse constructor.
	 */
	public function __construct() {
		parent::__construct( 'Response', null );
	}

	/**
	 * Add Message child.
	 *
	 * @param string $body Message Body
	 * @param array $attributes Optional attributes
	 *
	 * @return TwiML Child element.
	 */
	public function message( $body, $attributes = array() ) {
		return $this->nest( new Messaging\Message( $body, $attributes ) );
	}

	/**
	 * Add Redirect child.
	 *
	 * @param url $url Redirect URL
	 * @param array $attributes Optional attributes
	 *
	 * @return TwiML Child element.
	 */
	public function redirect( $url, $attributes = array() ) {
		return $this->nest( new Messaging\Redirect( $url, $attributes ) );
	}
}