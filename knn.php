<?php 

/**
 * 
 */
class KNN
{
	private $dataSet;
	private $location;
	private $newData;
	private $distance = array();

	function __construct($data,$loc)
	{
		$this->dataSet= $data;

		$this->location= $loc;
	}

	public function getDistance(){
		sort($this->distance);
		return $this->distance;
	}

	public function getSortDistance(){
		return asort($this->distance);
	}

	public function getLoc(){
		return $this->location;
	}


	public function setNewData($data){
		$this->newData = $data;

	}

	public function eucladianDistance(){
		for ($i=0; $i <count($this->dataSet) ; $i++) { 
			$dis = 0;
			for ($j=0; $j <count($this->dataSet[0]) ; $j++) { 
				$dis += pow($this->dataSet[$i][$j]-$this->newData[$j],2);
			}
			array_push($this->distance, array(sqrt($dis),$this->location[$i]));
		
		}
	}


}

 ?>