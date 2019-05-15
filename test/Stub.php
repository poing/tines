<?php
namespace Tines\Test;

use Poing\Tines\Stub;

/**
 * @coversDefaultClass Poing\Ylem\Models\Characteristic
 */
class StubTest extends AbstractTest
{

  /**
   * @covers Poing\Tines\Stub::probe()
   */
  public function testStubClass()
  {
	$this->assertTrue(Stub::probe());
  }

}
