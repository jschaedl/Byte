<?php

namespace Byte;

class ByteConverter 
{    
    const Byte_String = 'b';
    const K_Byte_String = 'k';
    const M_Byte_String = 'm';
    const G_Byte_String = 'g';
    
    protected static $units = array(
        self::Byte_String => 1,
        self::K_Byte_String => 1024,
        self::M_Byte_String => 1048576,
        self::G_Byte_String => 1073741824
    );
    
	public function getBytes($input) {
	    return $this->compute($input, self::Byte_String);
	}
	
	public function getKBytes($input) {
	    return $this->compute($input, self::K_Byte_String);
	}
	
	public function getMBytes($input) {
	    return $this->compute($input, self::M_Byte_String);
	}
	
	public function getGBytes($input) {
	    return $this->compute($input, self::G_Byte_String);
	}
	
	private function compute($input, $unitOut) {
	    $value = (int)substr($input, 0, -1);
	    $unitIn = strtolower(substr($input, -1));
	    return (isset(self::$units[$unitIn])) ?
	       (($value * self::$units[$unitIn]) / self::$units[$unitOut]) : 0;
	}
}
