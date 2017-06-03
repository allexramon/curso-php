<?php 
interface Veiculo{
	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMacha($macha);
}

class Civic implements Veiculo{
	public function acelerar($velocidade){
		echo "O veículo vai acelerar até: ".$velocidade." Km/h";
	}
	public function frenar($velocidade){
		echo "O veículo vai reduzir a velocidade até: ".$velocidade." Km/h"; 
	}
	public function trocarMacha($macha){
		echo "O veículo engatou a macha: ".$macha;
	}
}

$carro = new Civic();
$carro->trocarMacha(1);
echo "<br>";
$carro->acelerar(200);


 ?>