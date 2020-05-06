<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];
    $name = $_POST["name"] ?? "";
    $email = $_POST["email"] ?? "";
    $phone = $_POST["phone"] ?? "";
    $creditPackage = $_POST["creditPackage"] ?? "";
    $status = $_POST["status"] ?? "";

    $requiredFields = [
        "Name" => $name,
        "E-Mail" => $email,
        "Telefonnummer" => $phone,
        "Verleihstatus" => $status,
        "Kreditpaket" => $creditPackage
    ];

    require "app/Controllers/ValidationController.php";

    if ($errors == []) {
        $dbManager->updateRental($id, $name, $email, $phone, $creditPackage, $status);
    } else {
        require "app/Controllers/AddCreditController.php";
    }
}
