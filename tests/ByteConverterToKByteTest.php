<?php

namespace tests;

use Byte\ByteConverter;

class ByteConverterToKByteTest extends \PHPUnit_Framework_TestCase
{	
    protected $converter;
    
	protected function setUp() {
	    $this->converter = new ByteConverter();
	}
	
	protected function tearDown() {
	    $this->converter = null;
	}
	
	public function testByteConvertByteToKByte() {
	    $this->assertEquals(1, $this->converter->getKBytes('1024b'));
	}
	
	public function testByteConvertKByteToKByte() {
	    $this->assertEquals(1024, $this->converter->getKBytes('1024k'));
	}
	
	public function testByteConvertMByteToKByte() {
	    $this->assertEquals(1048576, $this->converter->getKBytes('1024m'));
	}
	
	public function testByteConvertGByteToKByte() {
	    $this->assertEquals(1073741824, $this->converter->getKBytes('1024g'));
	}
}
