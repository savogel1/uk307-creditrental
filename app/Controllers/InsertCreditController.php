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
        header("location: credits");
    } else {
        require "app/Controllers/AddCreditController.php";
    }
}
