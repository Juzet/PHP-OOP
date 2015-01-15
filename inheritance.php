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
			return "shirt: " . $this->shirt . "<br />" . 
					"jeans: " . $this->jeans . "<br />" . 
				    "shorts: " . $this->shorts . "<br />" .
				     "jacket: " . $this->jacket; 

		}
	}


	class forever extends Clothes {

	}


	$type1 = new forever("T-Shirt", "Skinny Jeans", "Daisy Duke Shorts", "Hoodie Jacket");
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

	}


	$new1 = new life("Honda Odessey", "BMW 3 Series", "Bentley Continental GT ", "Cadillac Escalade");
	echo $new1->Sis();



?>