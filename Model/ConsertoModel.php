<?php

class Conserto {
    private $mecanico;
    private $id_conserto;
    private $veiculo;
    private $status;
    private $descricao;
    private $valor;

    public function __construct(Mecanico $mecanico, $id_conserto = null, $veiculo, $status, $descricao, $valor)
    {
        $this->mecanico = $mecanico;
        $this->id_conserto = $id_conserto;
        $this->veiculo = $veiculo;
        $this->status = $status;
        $this->descricao = $descricao;
        $this->valor = $valor;
    }
}