<?php
/**
 * This file has been @generated by a phing task by {@link BuildMetadataPHPFromXml}.
 * See [README.md](README.md#generating-data) for more information.
 *
 * Pull requests changing data in these files will not be accepted. See the
 * [FAQ in the README](README.md#problems-with-invalid-numbers] on how to make
 * metadata changes.
 *
 * Do not modify this file directly!
 */


return array(
	'generalDesc'                   =>
		array(
			'NationalNumberPattern'   => '92\\d{7}|(?:[15]|8\\d)\\d{8}',
			'PossibleLength'          =>
				array(
					0 => 9,
					1 => 10,
				),
			'PossibleLengthLocalOnly' =>
				array(
					0 => 7,
				),
		),
	'fixedLine'                     =>
		array(
			'NationalNumberPattern'   => '1(?:1\\d|2[24-8]|3[35-8]|4[3-68]|6[2-5]|7[235-7])\\d{6}',
			'ExampleNumber'           => '112345678',
			'PossibleLength'          =>
				array(
					0 => 9,
				),
			'PossibleLengthLocalOnly' =>
				array(
					0 => 7,
				),
		),
	'mobile'                        =>
		array(
			'NationalNumberPattern'   => '5(?:[013-689]\\d|7[0-36-8])\\d{6}',
			'ExampleNumber'           => '512345678',
			'PossibleLength'          =>
				array(
					0 => 9,
				),
			'PossibleLengthLocalOnly' =>
				array(),
		),
	'tollFree'                      =>
		array(
			'NationalNumberPattern'   => '800\\d{7}',
			'ExampleNumber'           => '8001234567',
			'PossibleLength'          =>
				array(
					0 => 10,
				),
			'PossibleLengthLocalOnly' =>
				array(),
		),
	'premiumRate'                   =>
		array(
			'NationalNumberPattern'   => '925\\d{6}',
			'ExampleNumber'           => '925012345',
			'PossibleLength'          =>
				array(
					0 => 9,
				),
			'PossibleLengthLocalOnly' =>
				array(),
		),
	'sharedCost'                    =>
		array(
			'NationalNumberPattern'   => '920\\d{6}',
			'ExampleNumber'           => '920012345',
			'PossibleLength'          =>
				array(
					0 => 9,
				),
			'PossibleLengthLocalOnly' =>
				array(),
		),
	'personalNumber'                =>
		array(
			'PossibleLength'          =>
				array(
					0 => - 1,
				),
			'PossibleLengthLocalOnly' =>
				array(),
		),
	'voip'                          =>
		array(
			'PossibleLength'          =>
				array(
					0 => - 1,
				),
			'PossibleLengthLocalOnly' =>
				array(),
		),
	'pager'                         =>
		array(
			'PossibleLength'          =>
				array(
					0 => - 1,
				),
			'PossibleLengthLocalOnly' =>
				array(),
		),
	'uan'                           =>
		array(
			'NationalNumberPattern'   => '811\\d{7}',
			'ExampleNumber'           => '8110123456',
			'PossibleLength'          =>
				array(
					0 => 10,
				),
			'PossibleLengthLocalOnly' =>
				array(),
		),
	'voicemail'                     =>
		array(
			'PossibleLength'          =>
				array(
					0 => - 1,
				),
			'PossibleLengthLocalOnly' =>
				array(),
		),
	'noInternationalDialling'       =>
		array(
			'PossibleLength'          =>
				array(
					0 => - 1,
				),
			'PossibleLengthLocalOnly' =>
				array(),
		),
	'id'                            => 'SA',
	'countryCode'                   => 966,
	'internationalPrefix'           => '00',
	'nationalPrefix'                => '0',
	'nationalPrefixForParsing'      => '0',
	'sameMobileAndFixedLinePattern' => false,
	'numberFormat'                  =>
		array(
			0 =>
				array(
					'pattern'                              => '(\\d{4})(\\d{5})',
					'format'                               => '$1 $2',
					'leadingDigitsPatterns'                =>
						array(
							0 => '9',
						),
					'nationalPrefixFormattingRule'         => '',
					'domesticCarrierCodeFormattingRule'    => '',
					'nationalPrefixOptionalWhenFormatting' => false,
				),
			1 =>
				array(
					'pattern'                              => '(\\d{2})(\\d{3})(\\d{4})',
					'format'                               => '$1 $2 $3',
					'leadingDigitsPatterns'                =>
						array(
							0 => '1',
						),
					'nationalPrefixFormattingRule'         => '0$1',
					'domesticCarrierCodeFormattingRule'    => '',
					'nationalPrefixOptionalWhenFormatting' => false,
				),
			2 =>
				array(
					'pattern'                              => '(\\d{2})(\\d{3})(\\d{4})',
					'format'                               => '$1 $2 $3',
					'leadingDigitsPatterns'                =>
						array(
							0 => '5',
						),
					'nationalPrefixFormattingRule'         => '0$1',
					'domesticCarrierCodeFormattingRule'    => '',
					'nationalPrefixOptionalWhenFormatting' => false,
				),
			3 =>
				array(
					'pattern'                              => '(\\d{3})(\\d{3})(\\d{3,4})',
					'format'                               => '$1 $2 $3',
					'leadingDigitsPatterns'                =>
						array(
							0 => '81',
						),
					'nationalPrefixFormattingRule'         => '0$1',
					'domesticCarrierCodeFormattingRule'    => '',
					'nationalPrefixOptionalWhenFormatting' => false,
				),
			4 =>
				array(
					'pattern'                              => '(\\d{3})(\\d{3})(\\d{4})',
					'format'                               => '$1 $2 $3',
					'leadingDigitsPatterns'                =>
						array(
							0 => '8',
						),
					'nationalPrefixFormattingRule'         => '',
					'domesticCarrierCodeFormattingRule'    => '',
					'nationalPrefixOptionalWhenFormatting' => false,
				),
		),
	'intlNumberFormat'              =>
		array(),
	'mainCountryForCode'            => false,
	'leadingZeroPossible'           => false,
	'mobileNumberPortableRegion'    => true,
);
