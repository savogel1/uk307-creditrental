<?
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];
    $name = $_POST["name"] ?? "";
    $name = $_POST["email"] ?? "";
    $name = $_POST["phone"] ?? "";
    $name = $_POST["noOfInstallments"] ?? "";
    $name = $_POST["creditPackage"] ?? "";

    if ($errors == []) {
        $dbManager->addRental();
    }
}
