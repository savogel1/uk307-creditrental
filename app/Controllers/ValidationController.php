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

if (isset($status) && $status != "" && !($status == "Das Geld ist noch ausgeliehen und wird in Raten
zurückbezahlt." || $status == "Das Geld wurde vollständig zurückbezahlt.")) {
    $errors[] = "Der Verleihstatus ist ungültig";
}


function isInvalidPhoneNumber($phone)
{
    foreach (str_split($phone) as $character) {
        if (!in_array($character, ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0", "(", ")", "+", "-", " "])) {
            return true;
        }
    }
    return false;
}
