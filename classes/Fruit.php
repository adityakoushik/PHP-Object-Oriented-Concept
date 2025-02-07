<?php
class Fruit
{
	public $name;
	public $color;

	public function set_name($name)
	{
		$this->name = $name;
	}

	public function set_color($color)
	{
		$this->color = $color;
	}

	public function get_name()
	{
		return $this->name;
	}

	public function get_color()
	{
		return $this->color;
	}
}

// create object
$appleObj = new Fruit();
$orangeObj = new Fruit();
$appleObj->set_name('Apple');
$appleObj->set_color('Red');
$orangeObj->set_name('Orange');
$orangeObj->set_color('Orange');
echo 'Fruit Name is ' . $appleObj->get_name() . ' and color is ' . $appleObj->get_color();
echo '<br>';
echo 'Fruit Name is ' . $orangeObj->get_name() . ' and color is ' . $orangeObj->get_color();

?>