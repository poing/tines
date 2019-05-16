<?php
namespace Tines\Test;

use Poing\Tines\Stub;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass Poing\Ylem\Stub
 */
class StubTest extends TestCase
{

   public function testExample()
   {
       $this->assertTrue(true);
   }

  /**
   * @covers Poing\Tines\Stub::probe()
   */
  public function testStubClass()
  {
	$this->assertTrue(Stub::probe());
  }

}
