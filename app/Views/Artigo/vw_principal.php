<?= $this->extend('layouts/vw_padrao') ?>
<?= $this->section('titulo') ?> Artigo <?= $this->endSection() ?>
<?= $this->section('conteudo') ?>
    <h1>Artigos</h1>

    <a href="<?= url_to('Artigo::inserir') ?>">Inserir Artigo</a>

    <?php
        if (!empty($artigos) && is_array($artigos)) {
            foreach ($artigos as $artigo) { ?>
                <article>
                    <h2><a href="<?= site_url('mostrar/' . $artigo['id']) ?>"> <?= $artigo['titulo'] ?> </a></h2>
                    <p><?= $artigo['conteudo'] ?></p>
                </article>
            <?php }
        }
    ?>
<?= $this->endSection() ?>