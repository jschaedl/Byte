<?php

namespace tests;

use Byte\ByteConverter;

class ByteConverterToByteTest extends \PHPUnit_Framework_TestCase
{	
    const G_Bytes = 1073741824;
    const M_Bytes = 1048576;
    const K_Bytes = 1024;
    
    protected $converter;
    
	protected function setUp() {
	    $this->converter = new ByteConverter();
	}
	
	protected function tearDown() {
	    $this->converter = null;
	}
	
	public function testByteConvertGByteToByte() {
		$this->assertEquals(self::G_Bytes, $this->converter->getBytes('1g'));
		$this->assertEquals(5*self::G_Bytes, $this->converter->getBytes('5g'));
		$this->assertEquals(10*self::G_Bytes, $this->converter->getBytes('10g'));
	}
	
	public function testByteConvertMByteToByte() {
	    $this->assertEquals(self::M_Bytes, $this->converter->getBytes('1m'));
	    $this->assertEquals(5*self::M_Bytes, $this->converter->getBytes('5m'));
	    $this->assertEquals(10*self::M_Bytes, $this->converter->getBytes('10m'));
	}
	
	public function testByteConvertKByteToByte() {
	    $this->assertEquals(self::K_Bytes, $this->converter->getBytes('1k'));
	    $this->assertEquals(5*self::K_Bytes, $this->converter->getBytes('5k'));
	    $this->assertEquals(10*self::K_Bytes, $this->converter->getBytes('10k'));
	}
}