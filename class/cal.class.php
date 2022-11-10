<?php 
class cal {
	public $operation;
	public $number1;
	public $number2;

	public function __construct(string $oper,int $num1,int $num2){
        $this->operation=$oper;
        $this->number1=$num1;
        $this->number2=$num2;
	}

	public function operation(){
		switch ($this->operation) {
			case 'plus':
				$result=$this->number1+$this->number2;
				return $result;
				break;
			case 'subtract':
				$result=$this->number1-$this->number2;
				return $result;
				break;

			case 'multiple':
			$result=$this->number1*$this->number2;
			return $result;
			break;
			case 'divided':
				$result=$this->number1/$this->number2;
				return $result;
				break;
			default:
				echo "ERROR!!!";
				break;
		}
	}
}

 ?>