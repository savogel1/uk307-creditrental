<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kreditverleih erfassen</title>
</head>

<body>
    <form action="insertcredit" method="POST">
        <fieldset>
            <legend>Kunde</legend>
            <label for="name">Name*</label>
            <input type="text" id="name" name="name" required <? if (isset($_POST["name"])) {
                                                                    echo "value=\"" . $_POST["name"] . "\"";
                                                                } ?>><br>
            <label for="email">E-Mail*</label>
            <input type="email" name="email" id="email" required <? if (isset($_POST["email"])) {
                                                                        echo "value=\"" . $_POST["email"] . "\"";
                                                                    } ?>><br>
            <label for="phone">Telefonnummer</label>
            <input type="text" name="phone" id="phone" <? if (isset($_POST["phone"])) {
                                                            echo "value=\"" . $_POST["phone"] . "\"";
                                                        } ?>>
        </fieldset>
        <fieldset>
            <legend>Kredit</legend>
            <label for="noOfInstallments">Anzahl Raten*</label>
            <input type="number" name="noOfInstallments" id="noOfInstallments" required <? if (isset($_POST["noOfInstallments"])) {
                                                                                            echo "value=\"" . $_POST["noOfInstallments"] . "\"";
                                                                                        } ?>><br>
            <label for="creditPackage">Kreditpaket*</label>
            <select name="creditPackage" id="creditPackage" required>
                <? foreach ($creditPackages as $nr => $creditPackage) {
                    var_dump($nr);
                    echo "<option value=\"$nr\">" . $creditPackage["name"] . "</option>";
                }
                ?>
            </select>
        </fieldset>
        <input type="submit" value="Erfassen">
        <input type="reset" value="Zurücksetzen">
    </form>
</body>

</html>