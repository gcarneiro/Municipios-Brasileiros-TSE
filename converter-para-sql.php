<?php

$data = file_get_contents('municipios_brasileiros_tse.json');
$data = json_decode($data, true);
$sqls = [];

foreach($data as $v) {

	$infoMun = $v;
	$v['codigo_ibge_comdv'] = $v['codigo_ibge'];
	$tam = strlen($v['codigo_ibge']);
	$v['codigo_ibge'] = substr( (string) $v['codigo_ibge'], 0, $tam-1);

	$sqls[] = 'INSERT INTO tse_municipios_IBGE VALUES ("'.$v['codigo_tse'].'", "'.$v['nome_municipio'].'", "'.$v['codigo_ibge'].'", "'.$v['codigo_ibge_comdv'].'");';

}

echo '
CREATE TABLE tse_municipios_IBGE (

	codigo_tse			VARCHAR(16) NOT NULL PRIMARY KEY,
	nome_municipio		VARCHAR(256) NOT NULL,
	codigo_ibge			VARCHAR(16) NOT NULL,
	codigo_ibge_comdv	VARCHAR(16) NOT NULL


) ENGINE=InnoDB DEFAULT CHARSET=utf8;
<br /><br />';

foreach($sqls as $v) {
	echo $v.'<br />';
}