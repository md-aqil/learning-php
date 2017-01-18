<?php
namespace Classes;
class Home {

	protected $name;
	function __construct($_name) {
		$this->name = $_name;
	}

	function bedroom() {
		echo "Hi, I am {$this->name} and I have bedroom<br />";
	}

	function kitchen() {
		echo "Hi, I am {$this->name} and I have kitchen<br />";
	}

	function toilet() {
		echo "Hi, I am {$this->name} and I have toilet<br />";
	}

	function balcony() {
		echo "Hi, I am {$this->name} and I have balcony<br />";
	}
}
