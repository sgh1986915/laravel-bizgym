<?php

use Symfony\Component\Console\Output\ConsoleOutput;

class TestListener
{
	public function __construct()
	{
		register_shutdown_function('TestListener::overview');
	}

	public static function overview()
	{
		$printer = new ConsoleOutput();

		$printer->writeln('');
		$printer->writeln('Testing Environment');
		$printer->writeln('===================');
		$printer->writeln('Machine : '.gethostname());
		$printer->writeln('Database : '.Config::get('database.default'));
	}
}