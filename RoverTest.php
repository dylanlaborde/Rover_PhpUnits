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
	public function testmoveRoverForwardIfNorth(){
		$rover3= new Rover();
		
		$rover3->MoveRover("f");
		$this->assertEquals(

			$rover3->getCoordinate(),
			[
			"x"=>0,
			"y"=>1,
			"direction"=>"north"]);



	}
	public function testmoveRoverBackwardIfNorth(){
		$rover3= new Rover();
		
		$rover3->MoveRover("b");
		$this->assertEquals(

			$rover3->getCoordinate(),
			[
			"x"=>0,
			"y"=>-1,
			"direction"=>"north"]);



	}
	public function testmoveRoverForwardIfSouth(){
		$rover4 =new Rover();
		// $rover4->ExecuteCommand("f");
		 $rover4->ExecuteCommand(["r","r","f"]);
		$this->assertEquals(
			$rover4->getCoordinate(),
			["x"=>0,
			"y"=>-1,
			"direction"=>"south"]
			);


	}
	public function testmoveRoverBackwardIfSouth(){
		$rover6= new Rover();
		$rover6->ExecuteCommand(["r","r","b"]);
		$this->assertEquals(
			$rover6->getCoordinate(),
			["x"=>0,
			"y"=>-1,
			"direction"=>"south"]
			);
	}
	


	public function testTurnRover(){

		$rover5 =new Rover();
		$rover5->TurnRover("r");
		$this->assertEquals(
			$rover5->getCoordinate(),
			[
			"x"=>0,
			"y"=>0,
			"direction"=>"east"]);
			
	}

}

?>