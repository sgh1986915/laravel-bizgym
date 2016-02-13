<?php

use Illuminate\Console\Command;
use Saas\Dummy\DummyCreator;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class WorkbenchDummyCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'workbench:dummy';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Seed SaasVenture dummy springboard package.';

	/**
	 * Creator class
	 *
	 * @var DummyCreator
	 */
	protected $dummy;

	/**
	 * The package to be generated
	 *
	 * @var string
	 */
	protected $targetPackage;

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct(DummyCreator $dummy)
	{
		parent::__construct();

		$this->dummy = $dummy;
	}

	/**
	 * Execute the console command.
	 *
	 * @return void
	 */
	public function fire()
	{
		$this->targetPackage = $this->argument('package');

		// Proxy to workbench
		$this->info('Seed dummy package to '.$this->targetPackage.'...');

		// Generate dummy package
		$this->dummy
			->setPrinter($this)
			->create($this->targetPackage, $this->option('origin'));

		$this->info('Done');
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return array(
			array('package', InputArgument::REQUIRED, 'Package name.'),
		);
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return array(
			array('origin', null, InputOption::VALUE_OPTIONAL, 'Git repository url option.', null),
		);
	}

}