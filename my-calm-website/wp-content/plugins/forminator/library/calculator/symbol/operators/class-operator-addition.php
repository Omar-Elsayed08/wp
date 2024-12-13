<?php
/**
 * The Forminator_Calculator_Symbol_Operator_Addition class.
 *
 * @package Forminator
 */

/**
 * Operator for mathematical addition.
 * Example: "1+2" => 3
 *
 * @see     https://en.wikipedia.org/wiki/Addition
 */
class Forminator_Calculator_Symbol_Operator_Addition extends Forminator_Calculator_Symbol_Operator_Abstract {

	/**
	 * Identifiers
	 *
	 * @var array
	 */
	protected $identifiers = array( '+' );

	/**
	 * Precedence
	 *
	 * @var int
	 */
	protected $precedence = 100;

	/**
	 * Operate
	 *
	 * @inheritdoc
	 * @param int $left_number Left number.
	 * @param int $right_number Right number.
	 */
	public function operate( $left_number, $right_number ) {
		return $left_number + $right_number;
	}
}