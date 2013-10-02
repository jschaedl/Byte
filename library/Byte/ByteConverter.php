<?php

namespace Byte;

class ByteConverter 
{    
    const Byte_Shorty = 'b';
    const K_Byte_Shorty = 'k';
    const M_Byte_Shorty = 'm';
    const G_Byte_Shorty = 'g';
    
    protected static $units = array(
        self::Byte_Shorty => 1,
        self::K_Byte_Shorty => 1024,
        self::M_Byte_Shorty => 1048576,
        self::G_Byte_Shorty => 1073741824
    );
    
	public function getBytes($input) {
	    return $this->compute($input, self::Byte_Shorty);
	}
	
	public function getKBytes($input) {
	    return $this->compute($input, self::K_Byte_Shorty);
	}
	
	public function getMBytes($input) {
	    return $this->compute($input, self::M_Byte_Shorty);
	}
	
	public function getGBytes($input) {
	    return $this->compute($input, self::G_Byte_Shorty);
	}
	
	private function compute($input, $unitOut) {
	    $value = (int)substr($input, 0, -1);
	    $unitIn = strtolower(substr($input, -1));
	    return (isset(self::$units[$unitIn])) ?
	       (($value * self::$units[$unitIn]) / self::$units[$unitOut]) : 0;
	}
}
