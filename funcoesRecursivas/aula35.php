<?php 
$hierarquia = array(
array(

'nome_cargo'=>'CEO',
'subordinados' =>array(
//inicio: Diretor Comercial
array(
'nome_cargo'=>'Diretor Comercial',
'subordinados'=>array(
//inicio: Gerente de Vendas
array(
'nome_cargo'=>'Gerente de Vendas'
)
//termino: Gerente de Vendas
)
),
//termino: Diretor Comercial

//inicio: Diretor Financeiro
array(
'nome_cargo'=>'Diretor Financeiro',
'subordinados'=>array(
//Inicio:Gerente de contas a pagar
array(
'nome_cargo'=>'Gerente de Contas a Pagar',
'subordinados'=>array(

//Inicio: Supervisor de pagamentos
array(
'nome_cargo'=>'Supervisor de Pagamentos'
)
//termino: Supervisor de pagamentos
)
),
  //termino:Gerente de contas a pagar

//Inicio: Gerente de compras

array(
'nome_cargo'=>'Gerente de Compras',
'subordinados'=>array(
//inicio: Supervisor de Suprimentos
array(

'nome_cargo'=>'Supervisor de Suprimentos'
)
//termino: Supervisor de Suprimentos
)
)

//Terminio: Gerente de compras
)
//termino: Diretor Financeiro

)

)

)

);

function exibe($cargos){

$html = '<ul>';

	foreach ($cargos as $cargo) {

		$html .= "<li>";

		$html .=$cargo['nome_cargo'];

		if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {

			$html.=exibe($cargo['subordinados']);

		}

		$html .= "</li>";
	}

	$html .= '</ul>';

return $html;

}

echo exibe($hierarquia);

 ?>