<?php
	use \OOP\Worker;

	require_once __DIR__.'/oop/Worker.php';

	$worker1 = new Worker;
	$worker1->setName( 'Иван' )->setAge( 25 )->setSalary( 1000 );


	$worker2 = new Worker;
	$worker2->setName( 'Вася' )->setAge( 26 )->setSalary( 2000 );

	echo $worker1->getSalary() + $worker2->getSalary();