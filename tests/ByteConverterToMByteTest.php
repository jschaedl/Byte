<?php

namespace tests;

use Byte\ByteConverter;

class ByteConverterToMByteTest extends \PHPUnit_Framework_TestCase
{	
    protected $converter;
    
	protected function setUp() {
	    $this->converter = new ByteConverter();
	}
	
	protected function tearDown() {
	    $this->converter = null;
	}
	
	public function testByteConvertByteToMByte() {
	    $this->assertEquals(1, $this->converter->getMBytes('1048576b'));
	}
	
	public function testByteConvertKByteToMByte() {
	    $this->assertEquals(1, $this->converter->getMBytes('1024k'));
	}
	
	public function testByteConvertMByteToMByte() {
	    $this->assertEquals(1, $this->converter->getMBytes('1m'));
	}
	
	public function testByteConvertGByteToMByte() {
	    $this->assertEquals(1024, $this->converter->getMBytes('1g'));
	}
}
