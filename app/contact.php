<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | My first App Php</title>
    <link rel="stylesheet" href="/assets/styles/main.css">
</head>

<body>
    <?php include_once './templates/header.php'; ?>
    <main>
        <section class="container">
            <?php if (isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['age'])) : ?>
                <h1>Bonjour <?= "$_POST[prenom] $_POST[nom] "; ?></h1>
                <p>Vous avez <?= $_POST['age']; ?> ans.</p>
            <?php else : ?>
                <div class="alert alert-danger">
                    <p>Vous n'avez pas soumis le formulaire sur la page d'accueil.</p>
                </div>
            <?php endif; ?>
        </section>
    </main>
</body>

</html>