<?php

namespace Byte;

class ByteConverter 
{
	const BYTE_STRING = 'b';
	const K_BYTE_STRING = 'k';
	const M_BYTE_STRING = 'm';
	const G_BYTE_STRING = 'g';
	
	protected static $units = array (
			self::BYTE_STRING => 1,
			self::K_BYTE_STRING => 1024,
			self::M_BYTE_STRING => 1048576,
			self::G_BYTE_STRING => 1073741824 
	);
	
	public function getBytes($input) {
		return $this->compute ( $input, self::BYTE_STRING );
	}
	
	public function getKBytes($input) {
		return $this->compute ( $input, self::K_BYTE_STRING );
	}
	
	public function getMBytes($input) {
		return $this->compute ( $input, self::M_BYTE_STRING );
	}
	
	public function getGBytes($input) {
		return $this->compute ( $input, self::G_BYTE_STRING );
	}
	
	private function compute($input, $unitOut) {
		$value = ( int ) substr ( $input, 0, - 1 );
		$unitIn = strtolower ( substr ( $input, - 1 ) );
		return (isset ( self::$units [$unitIn] )) ? 
			(($value * self::$units [$unitIn]) / self::$units [$unitOut]) : 0;
	}
}
