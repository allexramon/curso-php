<?php
function test($callback){
	//processo lento, quando não sabe o tempo que vai terminar (conversão de video por exemplo)
	$callback();
}

test(function(){
	echo "Terminou!";
});


  ?>