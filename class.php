<?php
	class School {
		
		public $name;
		public $type;
		public $mascot;


		function __construct ($name, $type, $mascot) {
			$this->name = $name;
			$this->type = $type;
			$this->mascot = $mascot;
		}
		// function getName {
		// 	return "{$this->name}";

		// }
		// function getType {
		// 	return "{$this->type}";
		// }
		// function getMascot {
		// 	return "{$this->mascot}";
		// }
	}


$new = new School("phs", "highschool", "bulldog");

?>