<?php
	declare( strict_types = 1 );

	namespace OOP\Student;

	use \OOP\User;

	require_once __DIR__.'/User.php';

	class Student extends User
	{
		/**
		 * @var integer
		 */
		private $course = 1;

		/**
		 * @var integer
		 */
		private $grant = 544;

		/**
		 * @param string
		 * @param int
		 * @param int
		 * @param int
		 */
		public function __construct( string $name, int $age = 16, int $course, int $grant ) {
			parent::__construct( $name, $age );
			$this->setCourse( $course )->setGrant( $grant );
		}

		/**
		 * @return int
		 */
		public function getCourse(): int {
			return $this->course;
		}

		/**
		 * @param int
		 * @return  object
		 */
		public function setCourse( int $course ): Student {
			if ( $this->isCheckCourse( $course ) ) {
				$this->course = $course;
			}

			return $this;
		}

		/**
		 * @return int
		 */
		public function getGrant(): int {
			return $this->grant;
		}

		/**
		 * @param int
		 * @return  object
		 */
		public function setGrant( int $grant ): Student {
			if ( $this->isCheckGrant( $grant ) ) {
				$this->grant = $grant;
			}

			return $this;
		}

		/**
		 * @param  int
		 * @return boolean
		 */
		private function isCheckCourse( int $course ): bool {
			return $course > 1 && $course < 6;
		}

		/**
		 * @param  int
		 * @return boolean
		 */
		private function isCheckGrant( int $grant ): bool {
			return $grant >= 0 && $grant < 48096;
		}
	}