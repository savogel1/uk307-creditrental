<?
$errors = [];
foreach ($requiredFields as $field => $name) {
    if ($field == "") {
        $errors[] = $name . " darf nicht leer sein";
    }
}
if ($email != "" && strpos($email, "@") === false) {
    $errors[] = "Ungültige E-Mail-Adresse";
}

if ($phone != "" && isInvalidPhoneNumber($phone)) {
    $errors[] = "Ungültige Telefonnummer";
}

if ($creditPackage != "" && $creditPackage < 1 || $creditPackage > 40) {
    $errors[] = "Ungültiges Kreditpaket" . $creditPackage;
}

if (isset($noOfInstallments) && $noOfInstallments != "" && $noOfInstallments < 1 || $noOfInstallments > 10) {
    $errors[] = "Die Anzahl Raten muss zwischen 1 und 10 liegen";
}

if (isset($_POST["status"]) && $_POST["status"] != "" && !($_POST["status"] == "Das Geld ist noch ausgeliehen und wird in Raten
zurückbezahlt." || $_POST["status"] == "Das Geld wurde vollständig zurückbezahlt.")) {
    $errors[] = "Der Verleihstatus ist ungültig";
}
