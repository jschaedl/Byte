<?php

namespace tests;

use Byte\ByteConverter;

class ByteConverterToByteTest extends \PHPUnit_Framework_TestCase
{	
    const G_BYTES = 1073741824;
    const M_BYTES = 1048576;
    const K_BYTES = 1024;
    
    protected $converter;
    
	protected function setUp() {
	    $this->converter = new ByteConverter();
	}
	
	protected function tearDown() {
	    $this->converter = null;
	}
	
	public function testByteConvertGByteToByte() {
		$this->assertEquals(self::G_BYTES, $this->converter->getBYTES('1g'));
		$this->assertEquals(5*self::G_BYTES, $this->converter->getBYTES('5g'));
		$this->assertEquals(10*self::G_BYTES, $this->converter->getBYTES('10g'));
	}
	
	public function testByteConvertMByteToByte() {
	    $this->assertEquals(self::M_BYTES, $this->converter->getBYTES('1m'));
	    $this->assertEquals(5*self::M_BYTES, $this->converter->getBYTES('5m'));
	    $this->assertEquals(10*self::M_BYTES, $this->converter->getBYTES('10m'));
	}
	
	public function testByteConvertKByteToByte() {
	    $this->assertEquals(self::K_BYTES, $this->converter->getBYTES('1k'));
	    $this->assertEquals(5*self::K_BYTES, $this->converter->getBYTES('5k'));
	    $this->assertEquals(10*self::K_BYTES, $this->converter->getBytes('10k'));
	}
}