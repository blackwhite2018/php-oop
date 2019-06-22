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
			$this->age = $age;

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
	}