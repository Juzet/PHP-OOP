<?php

	class Clothes
	{
		public $shirt;
		public $jeans;
		public $shorts;
		public $jacket;

		function __construct($shirt, $jeans, $shorts, $jacket)
		{
			$this->shirt = $shirt;
			$this->jeans = $jeans;
			$this->shorts = $shorts;
			$this->jacket = $jacket;

		}

		function Juzet() 
		{
			return "Shirt: " . $this->shirt . "<br />" . 
				   "Jeans: " . $this->jeans . "<br />" . 
				   "Shorts: " . $this->shorts . "<br />" .
				   "Jacket: " . $this->jacket;
		}
	}


	class forever extends Clothes {
		function __construct($shirt, $jeans, $shorts, $jacket, $dress) {
			parent:: __construct($shirt, $jeans, $shorts, $jacket);
			$this->dress = $dress;
		}
		function when() {
			return "Dress:" . $this->dress . "<br />";
		}
	}


	$type1 = new forever("T-Shirt", "Skinny Jeans", "Daisy Duke Shorts", "Hoodie Jacket", "Cocktail");
	echo $type1->Juzet() . "<br />";
	echo $type1->when();

		


		class Food
	{
		public $pizza;
		public $hamburger;
		public $chips;
		public $salad;

		function __construct($pizza, $hamburger, $chips, $salad)
		{
			$this->pizza = $pizza;
			$this->hamburger = $hamburger;
			$this->chips = $chips;
			$this->salad = $salad;
		}

		function No() 
		{
			return "<br />" . "Pizza: " . $this->pizza . "<br />" . 
					"Hamburger: " . $this->hamburger . "<br />" . 
				    "Chips: " . $this->chips . "<br />" .
				     "Salad: " . $this->salad; 

		}
	}


	class yum extends Food {
		function __construct($pizza, $hamburger, $chips, $salad, $pie) {
			parent::__construct($pizza, $hamburger, $chips, $salad);
			$this->pie = $pie;
		}
		function what() {
			return "Pie:" . $this->pie . "<br />";
		}
	}


	$first1 = new yum("Pepperoni", "Cheese", "Cheetos", "Caesar", "Pumpkin");
	echo $first1->No() . "<br />";
	echo $first1->what();


		class Cars
	{
		public $van;
		public $sedan;
		public $convertible;
		public $suv;

		function __construct($van, $sedan, $convertible, $suv)
		{
			$this->van = $van;
			$this->sedan = $sedan;
			$this->convertible = $convertible;
			$this->suv = $suv;
		}

		function Sis() 
		{
			return "<br />" . "Van: " . $this->van . "<br />" . 
					"Sedan: " . $this->sedan . "<br />" . 
				    "Convertible: " . $this->convertible . "<br />" .
				     "Suv: " . $this->suv; 

		}
	}


	class life extends Cars {
	function __construct($van, $sedan, $convertible, $suv, $truck) {
			parent:: __construct($van, $sedan, $convertible, $suv);
			$this->truck = $truck;
		}
		function when() {
			return "Truck:" . $this->truck . "<br />";
		}	
	}


	$new1 = new life("Honda Odessey", "BMW 3 Series", "Bentley Continental GT ", "Cadillac Escalade", "Sierra Pick-Up");
	echo $new1->Sis() . "<br />";
	echo $new1->when();



?>