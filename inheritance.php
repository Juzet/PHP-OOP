<?php

	class Clothes
	{
		public $shirt;
		public $jeans;
		public $shorts;
		public $jacket;
		// public $dress;
		// public $underwear;

		function __construct($shirt, $jeans, $shorts, $jacket)
		{
			$this->shirt = $shirt;
			$this->jeans = $jeans;
			$this->shorts = $shorts;
			$this->jacket = $jacket;
			// $this->dress = $dress;
			// $this->underwear = $underwear;
		}

		function Juzet() 
		{
			return "shirt: " . $this->shirt . "<br />" . 
				   "jeans: " . $this->jeans . "<br />" . 
				   "shorts: " . $this->shorts . "<br />" .
				   "jacket: " . $this->jacket;
		}
	}


	class forever extends Clothes {
		function __construct($shirt, $jeans, $shorts, $jacket, $dress) {
			parent:: __construct($shirt, $jeans, $shorts, $jacket);
			$this->dress = $dress;
		}
		function when() {
			return $this->dress;
		}
	}


	$type1 = new forever("T-Shirt", "Skinny Jeans", "Daisy Duke Shorts", "Hoodie Jacket", "Cocktail", "Briefs");
	echo $type1->Juzet();

		


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
			return "<br />" . "pizza: " . $this->pizza . "<br />" . 
					"hamburger: " . $this->hamburger . "<br />" . 
				    "chips: " . $this->chips . "<br />" .
				     "salad: " . $this->salad; 

		}
	}


	class yum extends Food {
		function __construct($pizza, $hamburger, $chips, $salad, $pie) {
			parent:: __construct($pizza, $hamburger, $chips, $salad);
			$this->pie = $pie;
		}
		function what() {
			return $this->pie;
		}
	}


	$first1 = new yum("Pepperoni", "Cheese", "Cheetos", "Caesar");
	echo $first1->No();




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
			return "<br />" . "van: " . $this->van . "<br />" . 
					"sedan: " . $this->sedan . "<br />" . 
				    "convertible: " . $this->convertible . "<br />" .
				     "suv: " . $this->suv; 

		}
	}


	class life extends Cars {
	function __construct($van, $sedan, $convertible, $suv, $truck) {
			parent:: __construct($van, $sedan, $convertible, $suv);
			$this->truck = $truck;
		}
		function when() {
			return $this->truck;
		}	
	}


	$new1 = new life("Honda Odessey", "BMW 3 Series", "Bentley Continental GT ", "Cadillac Escalade");
	echo $new1->Sis();



?>