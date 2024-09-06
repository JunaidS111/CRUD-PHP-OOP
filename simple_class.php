<?php

	class cars{

		public $name;
		public $brand;


		function set_name($name){

			$this->name = $name;
		}

		function get_name(){

			return $this->name;
		}

	}

	$car_name = new cars();

	$car_name->set_name("Swift");

	$cname = $car_name->get_name();

	echo $cname;

?>