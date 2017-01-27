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
	public function testExecuteCommand(){
		$rover2= new Rover();
		$rover2->ExecuteCommand(["f","f"]);
		$this->assertEquals(
			$rover2->getCoordinate(),
			[
			"x"=>0,
			"y"=>2,
			"direction"=>"north"]);
	}

}

?>