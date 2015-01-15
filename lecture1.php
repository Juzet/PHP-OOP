<?php
<!-- EXAMPLE 1: -->
	class Car {
		//body
		//body
		//body
	}
	class Shoe {
		//body
		//body
		//body
	}
	class Food {
		//body
		//body
		//body
	}

<!-- EXAMPLE 2 -->
	$car1 = newCar();
	$car2 =	newCar();
	
	$shoe1 = newShoe();
	$shoe2 = newShoe();
	
	$food1 = newFood();
	$food2 = newFood();

<!-- EXAMPLE 3 -->
	class Car{
		public $brand = "ford";
		public $color = "black";
		public $type = "mustang";
		public $price = 0;
	}
	class Shoe {
		private $brand = "nike";
		private	$size = "6";
		private	$color= "black";
		private $price = 0;

	}
	class Food {
		protected $brand = "cheetos"
		protected $type = "hot-cheetos"
		protected $amount = "135";
		protected $price = 0;

	}

<!-- EXAMPLE 4 -->
	$car1 = new Car();
	print $car1­>type;
	// default type
	
	$shoe1 = new Shoe();
	print $shoe1­>brand;
	// default brand
	
	$food1 = new Food();
	print $food1­>amount;
	// default amount

<!-- EXAMPLE 5 -->
	public function Method( $argument1, $argument2) {
		// body
		// body
		// body
	}
	public function Method2( $argument1, $argument2) {
		// body
		// body
		// body
	}
	public function Method3( $argument1, $argument2) {
		// body
		// body
		// body
	}

<!-- EXAMPLE 6 -->
	class Car {
		public $brand = “default brand”;
		public $type = “default type”;
		public $year = “2015”;
		public $price = 40000;
		function getCar() {
			return “{$this­>brand}” . “{$this­>type}”;
		}
	}
	$car1 = new Car();
	$car1­>brand = “Mercedes”;
	$car1­>type = “Sedan”;
	print “This car is a {$car1­>Car()}.”;
	//This car is a Mercedes Sedan.
	
	class Shoe {
		public $brand = “default brand”;
		public $type = “default type”;
		public $size = “6”;
		public $price = 99.99;
		function getShoe() {
			return “{$this­>brand}” . “{$this­>type}”;
		}
	}
	$shoe1 = new Shoe();
	$shoe1­>brand = “Kd”;
	$shoe1­>type= “7”;
	print “This shoe is a {$shoe1­>getShoe()}.”;
	//This shoe is a Kd 7.
	class Food {
		public $brand = “default brand”;
		public $type = “default type”;
		public $amount = “1”;
		public $price = 10;
		function getFood() {
			return “{$this­>brand}” . “{$this­>type}”;
		}
	}
	$food1 = new Food();
	$food1­>brand = “Takis”;
	$food1­>type = “Fuego”;
	print “This food is called {$food1­>getFood()}.”;
	//This food is called Takis Fuego
-------------------------------------------------------------------------------------------------------------------------------------------------------
<!-- EXAMPLE 1 -->
	class Me{
		public first = $first;
		public middle = $middle;
		public last = $last;
	
		function__construct($first,$middle,$last) {
			$this­>first = $first;
			$this­>middle = $middle;
			$this­>last = $last;
		}

		function getMe() {
			return "{$this->first}" . "{$this->last}";
		}
	}
	
	class Lion{
		public fierce = $fierce;
		public roar = $roar;
		public mane = $mane;
	
		function__construct($fierce,$roar,$mane) {
			$this­>fierce = $fierce;
			$this­> roar = $roar;
			this­> mane = $mane;
		}

		function getLion() {
			return "{$this->fierce}" . "{$this->mane}";
		}
	}


	class Tv{
		public movie = $movie;
		public commercial = $commercial;
		public show = $show;
	
		function__construct($movie,$commercial,$show) {
			$this­>movie = $movie;
			$this­>commercial = $commercial;
			$this­>show = $show;
		}

		function getTv() {
			return "{$this->movie}" . "{$this->show}";
		}
	}

<!-- EXAMPLE 2 -->

	$me1 = newMe("Juzet","A","Arana");
	print "Me1: {$me1->getMe()}";
	
	$lion1 = newLion("Strong","Pretty","Dangerous");
	print "Lion1: {$lion1->getLion()}";
	
	$tv1 = newTV("LOL","Verizon","The Flash");
	print "Tv1: {$tv1->getTv()}";
-------------------------------------------------------------------------------------------------------------------------------------
