<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];
    $name = $_POST["name"] ?? "";
    $email = $_POST["email"] ?? "";
    $phone = $_POST["phone"] ?? "";
    $noOfInstallments = $_POST["noOfInstallments"] ?? "";
    $creditPackage = $_POST["creditPackage"] ?? "";

    $requiredFields = [
        "Name" => $name,
        "E-Mail" => $email,
        "Telefonnummer" => $phone,
        "Anzahl Raten" => $noOfInstallments,
        "Kreditpaket" => $creditPackage
    ];

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

    if ($noOfInstallments != "" && $noOfInstallments < 1 || $noOfInstallments > 10) {
        $errors[] = "Die Anzahl Raten muss zwischen 1 und 10 liegen";
    }

    if ($errors == []) {
        $dbManager->addRental($name, $email, $phone, $noOfInstallments, $creditPackage);
    } else {
        require "app/Controllers/AddCreditController.php";
    }
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
