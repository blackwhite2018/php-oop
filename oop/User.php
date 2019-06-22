<?php
	declare( strict_types = 1 );

	namespace OOP;

	class User
	{
		/**
		 * @var string
		 */
		protected $name;

		/**
		 * @var int
		 */
		protected $age;

		/**
		 * @param string
		 * @param int
		 */
		public function __construct( string $name = 'default', int $age ) {
			$this->setName( $name )->setAge( $age );
		}

		/**
		 * @param string
		 * @return  object
		 */
		public function setName( string $name ): User {
			$this->name = $name;

			return $this;
		}

		/**
		 * @param  string
		 * @return string
		 */
		public function getName( string $name ): string {
			return $this->name;
		}

		/**
		 * @param int
		 * @return  object
		 */
		public function setAge( int $age ): User {
			if ( $this->isCheckAge( $age ) )
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
		 * @param  int
		 * @return boolean
		 */
		private function isCheckAge( int $age ): bool {
			return $age > 1 && $age < 100;
		}
	}