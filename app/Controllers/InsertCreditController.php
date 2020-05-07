<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];
    $name = htmlspecialchars($_POST["name"]) ?? "";
    $email = htmlspecialchars($_POST["email"]) ?? "";
    $phone = htmlspecialchars($_POST["phone"]) ?? "";
    $noOfInstallments = htmlspecialchars($_POST["noOfInstallments"]) ?? "";
    $creditPackage = htmlspecialchars($_POST["creditPackage"]) ?? "";

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