<?= $this->extend('layouts/vw_padrao') ?>
<?= $this->section('titulo') ?> Novo Artigo <?= $this->endSection() ?>
<?= $this->section('conteudo') ?>
    <h1>Novo Artigo</h1>
    
    <?php
        if (session()->has('errors')) { ?>
            <ul>
                <?php  
                    foreach (session('errors') as $erro) { ?>
                        <li><?= $erro ?></li>
                    <?php } ?>
            </ul>    
        <?php }
    ?>

    <?= form_open('artigo/update/' . $artigo['id']) ?>
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" id="titulo" value="<?= old('titulo', esc($artigo['titulo'])) ?>">

        <label for="conteudo">Conteúdo:</label>
        <textarea name="conteudo" id="conteudo"><?= old('conteudo', esc($artigo['conteudo'])) ?></textarea>

        <button>Salvar</button>
    </form>

<?= $this->endSection() ?>