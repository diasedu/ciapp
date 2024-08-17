<?= $this->extend('layouts/vw_padrao') ?>
<?= $this->section('titulo') ?> Artigo <?= $this->endSection() ?>
<?= $this->section('conteudo') ?>
    <h1> <?= $artigo['titulo'] ?> </h1>

    <p> <?= $artigo['conteudo'] ?> </p>

    <a href="<?= url_to('Artigo::editar', $artigo['id']) ?>">Editar</a>
<?= $this->endSection() ?>