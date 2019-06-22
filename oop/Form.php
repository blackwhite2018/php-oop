<?php
	declare( strict_types = 1 );

	namespace OOP;

	class Form
	{
		/**		 
		 * @var array
		 */
		private $form = [];

		/**
		 * @param  array
		 * @return object
		 */
		public function open( array $attr = [] ): Form {			
			if ( !empty( $attr ) ) {
				$this->form[] = '<form'.$this->dash( $attr ).'>';
			}

			$this->form[] = '<form action="/" method="POST">';
			return $this;
		}

		public function close(): string {
			$this->form[] = '</form>';
			return implode( "\n", $this->form );
		}

		public function input( array $attr ): Form {
			$this->form[] = '<input'.$this->dash( $attr ).'>';

			return $this;
		}

		public function submit( array $attr ): Form {
			$this->form[] = '<input type="submit"'.$this->dash( $attr ) .'>';

			return $this;
		}

		public function textarea( array $attr ): Form {
			$this->form[] = '<textarea'.$this->dash( $attr ).'></textarea>';
			return $this;
		}

		private function dash( array $attr ): string {
			$str = '';

			foreach( $attr as $key => $val ) {
				$str .= ' '.$key.'='.$val;
			}		

			return $str;
		}
	}