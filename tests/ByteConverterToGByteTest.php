<?php

namespace tests;

use Byte\ByteConverter;

class ByteConverterToGByteTest extends \PHPUnit_Framework_TestCase
{	
    protected $converter;
    
	protected function setUp() {
	    $this->converter = new ByteConverter();
	}
	
	protected function tearDown() {
	    $this->converter = null;
	}
	
	public function testByteConvertByteToGByte() {
	    $this->assertEquals(1, $this->converter->getGBytes('1073741824b'));
	}
	
	public function testByteConvertKByteToGByte() {
	    $this->assertEquals(1, $this->converter->getGBytes('1048576k'));
	}
	
	public function testByteConvertMByteToGByte() {
	    $this->assertEquals(1, $this->converter->getGBytes('1024m'));
	}
	
	public function testByteConvertGByteToGByte() {
	    $this->assertEquals(1, $this->converter->getGBytes('1g'));
	}
}
