<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage | My first App Php</title>
    <link rel="stylesheet" href="/assets/styles/main.css">
</head>

<body>
    <?php include_once './templates/header.php'; ?>
    <main>
        <section class="container">
            <form action="/contact.php" method="POST">
                <input type="text" name="nom" id="nom">
                <input type="text" name="prenom" id="prenom">
                <input type="number" name="age" id="age">
                <button class="btn btn-primary">Envoyer</button>
            </form>
        </section>
    </main>
</body>

</html>