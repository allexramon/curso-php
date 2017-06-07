<style type="text/css">
#general {
	width:650px;
	margin:auto;	
}
legend {
	font-size:30px;
	font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
	color:#006;	
	padding-bottom:15px;
}
label {
	display: block;
	margin-bottom:20px;
}
p{
	font-weight:bold;
	font-size:14px;
	font-family:arial;
}
#dev {
	float:right;
	margin-top:50px;
}
.size {
	width:300px;
	height:90px;	
}
.labels {
	float:left;	
}
#botaoConverter {
	width:110px;
	height:50px;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:20px;	
}
</style>
<!-- Colar código CSS acima dentro da TAG <head> -->


<!-- Colar código ABAIXO dentro da TAG <body> -->
<div id="general">
	<form action="#" method="GET">
    	<legend>Conversor</legend>
        
        <label>
        	<div class="label">Digite seu texto: Normal/Binario:</div>
        	<textarea name="converter" class="size" maxlength="2000" ></textarea>
        </label>
        
		<label>  
	        <input type="submit" value="Converter" id="botaoConverter" />
		</label>
    </form>
	
	<?php
		if($_GET){
			echo "<p>Resultado: </p>";
			//recebe dados do usuário
			$texto = $_GET['converter']; 

			$numerosBinario = Array("0000", "0001", "0010", "0011", "0100", "0101","0110", "0111", "1000", "1001", "1010", "1011", "1100", "1101", "1110", "1111");
			// ordena as combinações em binário
			for ($i = 2;$i <=7;$i++){
				for ($j = 0;$j <=15;$j++){
					$binario[] = " ".$numerosBinario[$i]." ".$numerosBinario[$j]; 
				}
			}
			
			// atribui ao array $glifos todos os caracteres imprimiveis da tabela ASCII
			for ( $i=32; $i <= 126; $i++ ) {
					$glifos[] = chr($i); //funçao chr, retorna um caracter, de acordo com seu código na base Decimal 
			}
			
			// converte dados enviados pelo usuário para binário
			for($i = 0;$i <(strlen($texto));$i++){
				
				foreach ($glifos as $key => $value){
				
					if($texto[$i] == $value){
						echo $binario[$key]; 
					}
					
				}
			}
		}
	?>
	<p id="dev">Desenvolvido por Arthur Figueiredo Nunes</p>
</div>