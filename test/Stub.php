<?php
namespace Tines\Test;

use Poing\Tines\Stub;

/**
 * @coversDefaultClass Poing\Ylem\Stub
 */
class StubTest extends TestCase
{

  /**
   * @covers Poing\Tines\Stub::probe()
   */
  public function testStubClass()
  {
	$this->assertTrue(Stub::probe());
  }

}
