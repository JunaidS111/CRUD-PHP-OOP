
<?php
class School{

	public $a, $b, $c;

		function Sum(){
			$this->c = $this->a + $this->b;
			return $this->c;
		}

		function Sub(){
			$this->c = $this->a - $this->b;
			return $this->c;
		}
}
$c1 = new School();
$c2 = new School();
$c3 = new School();

$c1->a = 50;
$c1->b = 500;


$c2->a = 50;
$c2->b = 500;

$c3->a = 1035;
$c3->b = 523;

echo $c1->Sum();
echo "<br>";
echo $c1->Sub();
echo "<br>";
echo $c2->Sum();
echo "<br>";
echo $c2->Sub();
echo "<br>";
echo $c3->Sum();
echo "<br>";
echo $c3->Sub();

?>
