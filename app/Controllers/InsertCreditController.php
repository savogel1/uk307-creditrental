<?
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];
    $name = $_POST["name"] ?? "";
    $email = $_POST["email"] ?? "";
    $phone = $_POST["phone"] ?? "";
    $noOfInstallments = $_POST["noOfInstallments"] ?? "";
    $creditPackage = $_POST["creditPackage"] ?? "";

    if ($errors == []) {
        $dbManager->addRental($name, $email, $phone, $noOfInstallments, $creditPackage);
    }
}
