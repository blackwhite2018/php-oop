<?php
	use \OOP\Worker;

	require_once __DIR__.'/oop/Worker.php';

	$worker = new Worker( 'Дима', 25, 1000 );

	echo $worker->getAge() * $worker->getSalary();