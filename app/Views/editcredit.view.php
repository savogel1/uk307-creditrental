<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>Kreditverleih bearbeiten</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/styles.css">
</head>

<body>

    <nav>
        <div class="nav-div">
            <div class="nav-menu">
                <a class="item" href="credits">Übersicht</a>
                <a class="item" href="addcredit">Hinzufügen</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div id="title" class="item">
            <h1 id="inline-header">Kreditverleih bearbeiten</h1>
            <a href="credits" id="inline-header-button"><button>Abbrechen</button></a>
        </div>
        <?php if (isset($errors) && count($errors) > 0) : ?>
            <!-- Errors, Teil 1 -->
            <div class="item">
                <ul class="text-monospace text-danger">
                    <?php foreach ($errors as $error) : ?>
                        <li><?= $error ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
        <div class="item">
            <form action="updatecredit?id=<?= $_GET["id"]; ?>" method="POST">
                <fieldset>
                    <legend>Kunde</legend>
                    <label for="name">Name</label>
                    <input type="text" name="name" value="<?= $credit['name'] ?>"><br>
                    <label for="email">E-Mail</label>
                    <input type="text" name="email" value="<?= $credit['email'] ?>"><br>
                    <label for="phone">Telefon</label>
                    <input type="text" name="phone" value="<?= $credit['phone'] ?>">
                </fieldset>
                <fieldset>
                    <legend>Kredit</legend>
                    <label for="package">Kreditpaket</label>
                    <select name="package">
                        <?php foreach ($creditPackages as $creditPackage) : ?>
                            <option value="<?= $creditPackage['id'] ?>" <?php if ($creditPackage['id'] == $credit['creditPackage']) {
                                                                            echo "selected";
                                                                        } ?>>
                                <?= $creditPackage['name'] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <br>
                    <label for="status">Verleihstatus</label>
                    <select name="status">
                        <option value="0">Das Geld ist noch ausgeliehen und wird in Raten
                            zurückbezahlt.</option>
                        <option value="1">Das Geld wurde vollständig zurückbezahlt.</option>
                    </select>
                </fieldset>
                <input class="input-button" type="submit" value="Ändern">
            </form>
        </div>
    </div>
</body>

</html>