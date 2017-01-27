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
			if ($ArrayCommand[$i] === "f" || $ArrayCommand[$i] === "b") {
				$this->MoveRover($ArrayCommand[$i]);// $this->MoveRover("f");
			}
			if ($ArrayCommand[$i] === "r" || $ArrayCommand[$i] === "l") {
				$this->TurnRover($ArrayCommand[$i]);
			}
		}

	}
	public function MoveRover($command){
		$direction = $this->coordinate["direction"];
		if ($direction === "north" && $command ==="f") {
			$this->moveRoverForwardIfNorth();
		}
		if ($direction === "north" && $command ==="b") {
			$this->moveRoverBackwardIfNorth();
		}

		if ($direction === "south") {
			$this->moveRoverForwardIfSouth();
		}
		// if ($direction === "east") {
		// 	$this->moveRoverForwardIfEst();
		// }
		// if ($direction === "ouest") {
		// 	$this->moveRoverForwardIfOuest();
		// }

	}
	public function TurnRover($command){
		$direction = $this->coordinate["direction"];

		if ($direction === "north" && $command === "r") {
			$this->coordinate["direction"]="east"; 
		}
		if ($direction === "east" && $command === "r") {
			$this->coordinate["direction"]="south"; 
			# code...
		}


	}

	public function moveRoverForwardIfNorth(){
		$this->coordinate["y"]++;
		
	}
	public function moveRoverBackwardIfNorth(){
		$this->coordinate["y"]--;
	}
	public function moveRoverForwardIfSouth(){
		
		$this->coordinate["y"]--;
	}


}
?>