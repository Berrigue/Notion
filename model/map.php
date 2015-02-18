<?php
require_once '../lib/phplot.php';
require_once '../config/Conexao_Mysql.php';
//require_once 'verify.php';

$con = new mysql();

$con->servidor = 'localhost';
$con->usuario = 'root';
$con->senha = 'root';
$con->db = 'Kogen Tecnologia';
$con->conectar();
$con->selectDB();
//selecionand os dados da tabela para geração dos gráficos

$query = ("SELECT * FROM tweets");

$result = mysql_query($query) or die(mysql_error());

//Definindo o array.
//Muita atenção nessa parte, pois se não fizer dessa forma, você não vai conseguir o loop perfeito para trazer
//todos os dados da tabela, deixem exatamente como está, pois o PHPLOT trabalha com VETORES.

while($ver = mysql_fetch_array($result))
{
	$data[] = array(

	$ver['reg_date'],
	$ver['bom_tweets'],
	$ver['indiferente_tweets'],
	$ver['ruim_tweets']

	);
}

$plot = new PHPlot(937, 354);
$plot->SetImageBorderType('plain');

$plot->SetPlotType('bars');
$plot->SetDataType('text-data');
$plot->SetDataValues($data);

# Main plot title:
$plot->SetTitle('Analise de Sentimento Humano');

# Make a legend for the 3 data sets plotted:
$plot->SetLegend(array('Nao gostou', 'Indiferente', 'gostou'));
$plot->SetDataColors(array('blue', 'gray', 'red'));
# Turn off X tick labels and ticks because they don't apply here:
$plot->SetXTickLabelPos('none');
$plot->SetXTickPos('none');

$plot->DrawGraph();

