<?php


namespace insign\getOSTest;


use insign\getOS\Plaftorm\DefaultPlatform;
use insign\getOS\NonExistException;
use PHPUnit\Framework\TestCase;

class DefaultPlatformTest extends TestCase
{
	/**
	 * @test
	 */
	public function throwExceptionOnExistsMethodCall()
	{
		$dp = new DefaultPlatform();
		$this->expectExceptionMessage('Unknow Platform');
		$dp->exists();
	}
}
