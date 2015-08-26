<?php 

require_once('classes/classe_html.inc');

$testetag = new html();
$tipo = new tipospadrao();

$table = new tag($tipo->getTipo('table'), array(new atributo('border' , '1')));

$tr = new tag($tipo->getTipo('tr'));

$tr->addSubtag(new tag($tipo->getTipo('td'), null, 'celula 1'));

$tr->addSubtag(new tag($tipo->getTipo('td'), null, 'celula 2'));

$table->addSubtag($tr);

$testetag->addTag($table);

echo $testetag->toHTML($testetag);