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

		if ($direction === "south" && $command === "f") {
			$this->moveRoverForwardIfSouth();
		}
		if ($direction === "south" && $command === "b") {
			$this->moveRoverBackwardIfSouth();
		}
		if ($direction === "east") {
			$this->moveRoverForwardIfEst();
		}
		if ($direction === "ouest") {
			$this->moveRoverForwardIfOuest();
		}

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
		if($direction === "south" && $command === "r"){
			$this->coordinate["direction"]="ouest";
		}
		if($direction === "ouest" && $command === "r"){
			$this->coordinate["direction"]="north";
		}

		if ($direction === "north" && $command === "l") {
			$this->coordinate["direction"]="ouest"; 
		}
		if ($direction === "east" && $command === "l") {
			$this->coordinate["direction"]="north"; 
			# code...
		}
		if($direction === "south" && $command === "l"){
			$this->coordinate["direction"]="east";
		}
		if($direction === "ouest" && $command === "l"){
			$this->coordinate["direction"]="south";
		}


	}

	public function moveRoverForwardIfEst(){
		$this->coordinate["x"]++; 
	}
	public function moveRoverForwardIfOuest(){
		$this->coordinate["x"]--;
	}
	public function moveRoverForwardIfNorth(){
		$this->coordinate["y"]++;
		
	}
	public function moveRoverForwardIfSouth(){
		
		$this->coordinate["y"]--;
	}
	public function moveRoverBackwardIfNorth(){
		$this->coordinate["y"]--;
	}
	public function moveRoverBackwardIfSouth(){
		$this->coordinate["y"]--;
	}


}
?>