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

    require "app/Controllers/ValidationController.php";

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
