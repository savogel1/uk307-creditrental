<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kreditverleih erfassen</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/styles.css">
</head>

<body>
    <div class="container">
        <div id="title" class="item">
            <h1 id="inline-header">Kreditverleih erfassen</h1>
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
            <form action="insertcredit" method="POST">
                <fieldset>
                    <legend>Kunde</legend>
                    <label for="name">Name*</label>
                    <input type="text" id="name" name="name" required <?php if (isset($_POST["name"])) {
                echo "value=\"" . $_POST["name"] . "\"";
            } ?>><br>
                    <label for="email">E-Mail*</label>
                    <input type="email" name="email" id="email" required <?php if (isset($_POST["email"])) {
                echo "value=\"" . $_POST["email"] . "\"";
            } ?>><br>
                    <label for="phone">Telefonnummer</label>
                    <input type="text" name="phone" id="phone" <?php if (isset($_POST["phone"])) {
                echo "value=\"" . $_POST["phone"] . "\"";
            } ?>>
                </fieldset>
                <fieldset>
                    <legend>Kredit</legend>
                    <label for="noOfInstallments">Anzahl Raten*</label>
                    <input type="number" name="noOfInstallments" id="noOfInstallments" required <?php if (isset($_POST["noOfInstallments"])) {
                echo "value=\"" . $_POST["noOfInstallments"] . "\"";
            } ?>><br>
                    <label for="creditPackage">Kreditpaket*</label>
                    <select name="creditPackage" id="creditPackage" required>
                        <?php foreach ($creditPackages as $nr => $creditPackage) {
                    var_dump($nr);
                    echo "<option value='" . $creditPackage['id'] . "'>" . $creditPackage['name'] . "</option>";
                }
                ?>
                    </select>
                </fieldset>
                <div class="buttons">
                    <input class="input-button" type="submit" value="Erfassen">
                    <input class="input-button" type="reset" value="Zurücksetzen">
                </div>
            </form>
        </div>
    </div>
</body>

</html>