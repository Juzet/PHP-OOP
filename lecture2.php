<?php
	class Me{
		public $first;
		public $middle;
		public $last;
		function __construct($first,$middle,$last) {
			$this->first= $first;
			$this->middle= $middle;
			$this->last= $last;
	}

		function getMe() {
			return 	"<br / >" . "First: " . $this->first . "<br />" .
					"Middle: " . $this->middle  . "<br />" .
					"Last: " . $this->last . "<br />";
		}
	}
$me1 = new Me("Juzet","A","Arana");
	print "Me1: {$me1->getMe()}" . "<br />";
	
	class Lion{
		public $fierce;
		public $roar;
		public $mane;
	
		function __construct($fierce,$roar,$mane) {
			$this->fierce= $fierce;
			$this->roar= $roar;
			$this->mane= $mane;
	}

		function getLion() {
			return 	"<br / >" . "Fierce: " . $this->fierce . "<br />" .
					"Roar: " . $this->roar  . "<br />" .
					"Mane: " . $this->mane . "<br />";
		}
	}
$lion1 = new Lion("Strong","Pretty","Dangerous");
	print "Lion1: {$lion1->getLion()}" . "<br />";


	class Tv{
		public $movie;
		public $commercial;
		public $show;
	
		function __construct($movie,$commercial,$show) {
			$this->movie= $movie;
			$this->commercial= $commercial;
			$this->show= $show;
	}

		function getTv() {
			return 	"<br / >" . "The movie: " . $this->movie . "<br />" .
					"The commercial: " . $this->commercial  . "<br />" .
					"The show: " . $this->show . "<br />";
		}
	}
	
$tv1 = new TV("LOL","Verizon","The Flash");
	print "Tv1: {$tv1->getTv()}" . "<br />";

?>