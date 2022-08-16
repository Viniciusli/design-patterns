<?php

namespace App\singleton;

class LogsSingleton {
    protected static $instancia;
    protected $nomeArquivo = 'logs.txt';

    private function __construct() {}
    private function __clone() {}
    private function __wakeup() {}

    public static function obterInstancia(): self
    {
        if (empty(self::$instancia)) {
            self::$instancia = new self();
        }

        return self::$instancia;
    }

    public function gravarLog(array $dados)
    {
        $logsAnteriores = [];
        if (filesize($this->nomeArquivo) > 0) {
            $conteudoDoArquivo = file_get_contents($this->nomeArquivo);

            $logsAnteriores = json_decode($conteudoDoArquivo);
        }

        $logsAnteriores[] = $dados;

        $arquivo = fopen($this->nomeArquivo, 'w');

        fwrite($arquivo, json_encode($logsAnteriores));

        fclose($arquivo);
    }
}