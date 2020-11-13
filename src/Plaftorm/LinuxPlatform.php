<?php


namespace insign\getOS\Plaftorm;


use Symfony\Component\Process\Process;

class LinuxPlatform implements Existentiable
{
	const BIN = '/usr/bin/rclone';
	
	
	public function exists()
	{
		$p = new Process(['which', 'rclone']);
		$p->setTimeout(3);
		$p->run();
		if(!$p->isSuccessful()){
			throw new NonExistException('The Rclone binary not found on your Linux Platform');
		}
		return true;
	}
}
