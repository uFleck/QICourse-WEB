<?php

	include '../model/ex09.class.php';

	$ex09 = new Ex09();

	$ex09->setName("Bruno");
	$ex09->setWeight(1, 0);
	$ex09->setWeight(3, 1);
	$ex09->setWeight(5, 2);
	$ex09->setGrade(7, 0);
	$ex09->setGrade(6, 1);
	$ex09->setGrade(4, 2);

	echo
	    "Name: {$ex09->getName()}<br>".
	    "Weighted Average: {$ex09->calculateWeightedAverage()}";
