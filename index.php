<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu</title>
</head>

<body>
    <section>
        <form action="fight.php" method="GET">

        <!--  P1 -->
            <h2>Joueur1:</h2>
            <label for="p1name">Nom:</label>
            <input type="text" name="p1name" id="p1name">

            <label for="p1role">Role:</label>
            <select name="p1role" id="p1role">
                <option value="mage">Mage</option>
                <option value="guerrier">Guerrier</option>
            </select>

        <!-- P2 -->
            <h2>Joueur2:</h2>
            <label for="p2name">Nom:</label>
            <input type="text" name="p2name" id="p2name">

            <label for="p2role">Role:</label>
            <select name="p2role" id="p2role">
                <option value="mage">Mage</option>
                <option value="guerrier">Guerrier</option>
            </select>
        <br><br>
        <input type="submit" value="Valider">
        </form>
    </section>
</body>

</html>