<?php

abstract class Mapobject_class

{
	abstract protected function getValue();
	public function printOut() {
		print $this->getValue() . "\n";
	}
}

class isOnMap extends Mapobject_class
{
	protected function getValue() {
		return "true";
	}
}

?>
