<?php
	declare( strict_types = 1 );

	namespace OOP;

	use \OOP\User;

	require_once __DIR__.'/User.php';

	class Worker extends User
	{
		/**
		 * @var int
		 */
		private $salary;

		/**
		 * @param string
		 * @param int|integer
		 * @param int|integer
		 */
		public function __construct( string $name = 'default', int $age = 18, int $salary = 100 ) {
			parent::__construct( $name, $age );
			$this->setSalary( $salary );
		}

		/**
		 * @param int
		 * @return object
		 */
		public function setSalary( int $salary ): Worker {
			$this->salary = $salary;

			return $this;
		}

		/**
		 * @return int
		 */
		public function getSalary(): int {
			return $this->salary;
		}
	}