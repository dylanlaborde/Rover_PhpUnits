<?php 

use PHPUnit\Framework\TestCase;

public class  RoverTests extends TestCase{

	public function DefaultPosition(){
		$rover= new Rover();
		$this->asserEquals(
			$rover->getCoordonate(),[
			"x"=>0,
			"y"=>0,
			"direction"=>"north"
			]
			)

	}

}


?>