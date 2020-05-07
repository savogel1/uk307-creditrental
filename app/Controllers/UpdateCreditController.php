<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];
    $name = htmlspecialchars($_POST["name"]) ?? "";
    $email = htmlspecialchars($_POST["email"]) ?? "";
    $phone = htmlspecialchars($_POST["phone"]) ?? "";
    $creditPackage = htmlspecialchars($_POST["package"]) ?? "";
    $status = htmlspecialchars($_POST["status"]) ?? "";

    $requiredFields = [
        "Name" => $name,
        "E-Mail" => $email,
        "Verleihstatus" => $status,
        "Kreditpaket" => $creditPackage
    ];

    require "app/Controllers/ValidationController.php";

    if ($errors == []) {
        $dbManager->updateRental($_GET["id"], $name, $email, $phone, $creditPackage, $status);
        header("location: credits");
    } else {
        require "app/Controllers/EditCreditController.php";
    }
}
