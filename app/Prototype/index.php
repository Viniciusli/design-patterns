<?php

use App\Prototype\LivroPhpPrototype;

require_once '../../vendor/autoload.php';

$livroPhp = new LivroPhpPrototype();
$livroPhp->setTitulo('Um livro de PHP');

$compradores = [
    'Vini',
    'Foo',
    'Bar',
];

$livros = [];

foreach ($compradores as $comprador) {
    $livroComprador = clone $livroPhp;
    $livroComprador->setNomeTitular($comprador);

    $livros[] = $livroComprador;
}
print_r($livros);
