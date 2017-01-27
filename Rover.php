<?php 

class Rover{

	private $coordinate = [
	"x"=>0,
	"y"=>0,
	"direction"=>"north"];

	public function getCoordinate(){
		return $this->coordinate;
	}
	public function ExecuteCommand($ArrayCommand){
		$ArrayCommandlength = count($ArrayCommand);
		for ($i=0; $i < $ArrayCommandlength ; $i++) { 
			if ($ArrayCommand === "f") {
				$this->MoveRover($ArrayCommand[$i]);// $this->MoveRover("f");
			}else{
				$this->coordinate["y"]++;
			}
			// if ($ArrayCommand === "b") {
			// 	$this->MoveRover($ArrayCommand[$i]);
			// }
		}

	}
	public function MoveRover($command){
		$direction = $this->coordinate["direction"];
		if ($direction === "north") {
			$this->moveRoverForwardIfNorth();
		}
		// if ($direction === "south") {
		// 	$this->moveRoverForwardIfSouth();
		// }
		// if ($direction === "east") {
		// 	$this->moveRoverForwardIfEst();
		// }
		// if ($direction === "ouest") {
		// 	$this->moveRoverForwardIfOuest();
		// }

	}

	public function moveRoverForwardIfNorth(){
		$this->coordinate["y"]++;
		
	}


}
?>