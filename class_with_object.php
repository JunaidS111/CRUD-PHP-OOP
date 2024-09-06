<?php

	class Fruits{

		public $name;
		public $color;

		function set_name($name){

			$this->name = $name;
		}

		function get_name(){

			return $this->name;
		}

		function set_color($color){

			$this->color = $color;
		}

		function get_color(){

			return $this->color;
		}
	}

	$F_name = new Fruits();
	$F_color = new Fruits();
	$F_name->set_name("Mango");
	$F_color->set_color("Yellow");
	echo "Fruit Name is " . $F_name->get_name(); 
	echo " and Color is" . $F_color->get_color();
?>