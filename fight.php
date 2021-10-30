<?php
require_once('Perso.php');
$p1name = filter_input(INPUT_GET, "p1name");
$p1role = filter_input(INPUT_GET, "p1role");
$p2name = filter_input(INPUT_GET, "p2name");
$p2role = filter_input(INPUT_GET, "p2role");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fight</title>
</head>

<body>
    <!-- Instanciation des classes -->
    <div>
        <?php
        $p1role == 'mage' ? $p1 = new Mage($p1name) : $p1 = new Guerrier($p1name);
        $p2role == 'mage' ? $p2 = new Mage($p2name) : $p2 = new Guerrier($p2name);

        echo $p1;
        echo $p2;
        ?>
    </div>

    <section>
        <!-- Fight -->
        <?php
            while($p1->getPV() > 0 && $p2->getPV() > 0) {
                // Déroulement du fight
            }

            // TODO Afficher le gagnant

            // TODO Demander de rejouer
        ?>

    </section>
</body>

</html>