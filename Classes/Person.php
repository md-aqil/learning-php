<?php

namespace Classes;
use Interfaces\PersonInterface;
/**
* 
*/
class Person extends Home implements PersonInterface
{
	public function getName() {
		return $this->name;
	}

	public function changeName($n) {
		return $this->name = $n;
	}
}

$adil = new Person('Adil');

