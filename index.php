<?php
	use \OOP\Form;

	require_once __DIR__.'/oop/Form.php';

	$form = new Form;

	echo $form->open()->input( ['type' => 'text', 'value' => '1111'] )->close();