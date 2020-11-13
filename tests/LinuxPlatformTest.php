<?php


namespace insign\getOS\tests;


use insign\getOS\Plaftorm\LinuxPlatform;
use PHPUnit\Framework\TestCase;

class LinuxPlatformTest extends TestCase
{
	/**
	 * @test
	 *
	 */
	public function existsOnLinuxPlatform()
	{
		$lp = new LinuxPlatform();
		$this->assertTrue($lp->exists());
	}

}
