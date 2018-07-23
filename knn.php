<?php 

/**
 * 
 */
class KNN
{
	private $dataSet;
	private $k;
	private $location;
	private $newData;
	private $distance = array();

	function __construct($k,$data,$loc)
	{
		$this->k = $k;

		$this->dataSet= $data;

		$this->location= $loc;
	}

	public function getDistance(){
		return $this->distance;
	}

	public function getSortDistance(){
		sort($this->distance);
		return array_slice($this->distance, 0, $this->k,true);
	}

	public function getLoc(){
		return $this->location;
	}

	public function setNewData($data){
		$this->newData = $data;

	}

	public function euclideanDistance(){
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