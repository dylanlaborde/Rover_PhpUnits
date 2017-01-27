<?php 
use PHPUnit\Framework\TestCase;

class TestRover extends TestCase{

	public function testDefaultPosition(){
		$rover = new Rover();
		$this->assertEquals(
			$rover->getCoordinate(),
			[
			"x"=>0,
			"y"=>0,
			"direction"=>"north"]);

	}

}

?>