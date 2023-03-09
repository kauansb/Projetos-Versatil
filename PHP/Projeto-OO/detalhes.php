<?php require_once __DIR__ . "/app/autoloader.php"; ?>

<?php UserService::proibirNaoLogado(); ?>
<?php include __DIR__ . "/extra/header.php" ?>
<?php include __DIR__ . "/extra/menu.php" ?>

<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

<main class="container" data-spy="scroll" data-target="#navbarContent" data-offset="0">

    <fieldset id="listar">
        <legend>Detalhes do Contato</legend>
        <?php include __DIR__ . "/extra/formularioEditaContato.php" ?>
    </fieldset>

</main>

<?php include __DIR__ . "/extra/footer.php" ?>