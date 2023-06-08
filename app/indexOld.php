<?php

// $age = 14;

// if ($age >= 18) {
//     echo "Vous êtes majeur";
// } else if ($age >= 12) {
//     echo "Vous êtes adolescent";
// } else {
//     echo "Vous êtes enfant";
// }

// $isAdmin = "Oui";

// if ($isAdmin) {
//     echo "Vous êtes admin";
// } else {
//     echo "Vous n'êtes pas admin";
// }

// $isAutorise = true;
// $isProprietaire = false;
// $isAdmin = true;

// if (($isAutorise && $isProprietaire) || $isAdmin) {
//     echo "Vous êtes autorisé";
// } else {
//     echo "Vous n'êtes pas autorisé";
// }

// $age = 26;

// if ($age >= 18) {
//     echo "Vous êtes majeur";
// } else {
//     echo "Vous êtes mineur";
// }

// echo $age >= 18 ? "Vous êtes majeur" : "Vous êtes mineur";

// $user1 = ['Pierre', 'Bertrand', 'pierre@test.com', 26];
// $user2 = ['Paul', 'Dupond', 'paul@test.com', 37];
// $user3 = ['Jacques', 'Dumond', 'jacques@test.com', 46];

// $users = [$user1, $user2, $user3];

// foreach ($users as $user) {
//     echo "$user[0] $user[1] $user[2] a $user[3] ans <br>";
// }

// for ($i = 1; $i <= 10; $i++) {
//     echo $i . "<br>";
// }

$user = [
    'prenom' => 'Pierre',
    'nom' => 'Bertrand',
    'email' => 'pierre@test.com',
];

// foreach ($user as $cle => $info) {
//     echo "$cle: $info <br>";
// }

// if (array_key_exists('prenom', $user)) {
//     echo 'Elle existe';
// } else {
//     echo 'Elle n\'existe pas';
// }

// if (in_array('Toto', $user)) {
//     echo 'Ok';
// } else {
//     echo 'non';
// }

// foreach ($users as $user) {
//     if (array_key_exists('actif', $user) && $user['actif']) {
//         echo $user['prenom'] . "<br>";
//     }
// }

?>

<!--
<?php foreach ($users as $user) : ?>
    <?php if (array_key_exists('actif', $user) && $user['actif']) : ?>
        <div class="card">
            <h2 class="card-header"><?= "$user[prenom] $user[nom]"; ?></h2>
        </div>
    <?php endif; ?>
<?php endforeach; ?> -->

<?php

// function addition(int|float $val1, int|float $val2): int|float
// {
//     $result = $val1 + $val2;

//     return $result;
// }

// echo addition(100, 150.50);

$users = [
    [
        "prenom" => "Pierre",
        "nom" => 'Bertrand',
        "age" => 24,
        "actif" => true,
    ],
    [
        "prenom" => "Paul",
        "nom" => 'Dupont',
        "age" => 33,
        "actif" => true,
    ],
    [
        "prenom" => "Jacques",
        "nom" => 'Dupont',
        "age" => 33,
        "actif" => true,
    ],
    [
        "prenom" => "Thérèse",
        "nom" => 'Dupont',
        "age" => 33,
        "actif" => false,
    ],
];

function verifActifUser(array $user): bool
{
    if (array_key_exists('actif', $user) && $user['actif']) {
        return true;
    } else {
        return false;
    }
}

foreach ($users as $user) {
    if (verifActifUser($user)) {
        echo $user['prenom'] . "<br>";
    }
}

$strToReplace = "Bonjour/ je suis Pierre";

$strReplace = str_replace('/', ',', $strToReplace);

echo $strReplace;

function test(string $val1, string $val2): string
{
    return $val1 . $val2;
}
