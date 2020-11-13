<?php


namespace insign\getOS\Plaftorm;


use insign\getOS\NonExistException;

class DefaultPlatform implements Existentiable
{
	
	public function exists()
	{
		throw new NonExistException('Unknow Platform');
	}
}
