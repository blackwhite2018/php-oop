<?php
	declare( strict_types = 1 );

	namespace OOP;

	class Worker
	{
		/**
		 * @var string
		 */
		private $name;

		/**
		 * @var int
		 */
		private $age;

		/**
		 * @var int
		 */
		private $salary;

		public function __construct( string $name = 'default', int $age = 18, int $salary = 100 ) {
			$this->setName( $name )->setAge( $age )->setSalary( $salary );
		}

		/**
		 * @param string
		 * @return object
		 */
		public function setName( string $name ): Worker {
			$this->name = $name;

			return $this;
		}

		/**
		 * @return string
		 */
		public function getName(): string {
			return $this->name;
		}

		/**
		 * @param int
		 * @return object
		 */
		public function setAge( int $age ): Worker {
			if ( $this->isCheckAge( $age ) ) {
				$this->age = $age;
			}	

			return $this;
		}

		/**
		 * @return int
		 */
		public function getAge(): int {
			return $this->age;
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

		/**
		 * @param  int
		 * @return boolean
		 */
		private function isCheckAge( int $age ): bool {
			return $age > 1 && $age < 100;
		}
	}