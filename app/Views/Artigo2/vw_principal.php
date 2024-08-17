<?php
    $titulo = 'Artigo 2';

    echo $this->setData(compact('titulo'))->include('Templates/vw_header');
?>

<h1>Artigo 2</h1>