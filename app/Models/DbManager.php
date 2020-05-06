<?php

class DbManager
{
    public $db;

    public function __construct()
    {
        $this->db = connectToDatabase();
    }

    public function getAll()
    {
        $statement = $this->db->prepare('SELECT * FROM creditrental');
        $statement->execute();
        return $statement->fetchAll();
    }

    public function getCreditPackages()
    {
        $statement = $this->db->prepare('SELECT * FROM creditpackages');
        $statement->execute();
        return $statement->fetchAll();
    }

    public function addRental($name, $email, $phone, $noOfInstallments, $creditPackage)
    {
        $statement = $this->db->prepare("INSERT INTO `creditrental` (`id`, `name`, `email`, `phone`, `noOfInstallments`, `creditPackage`, `creationDate`) VALUES (NULL, :name, :email, :phone, :noOfInstallments, :creditPackage, :date);");

        $statement->bindParam(":name", $name, PDO::PARAM_STR);
        $statement->bindParam(":email", $email, PDO::PARAM_STR);
        $statement->bindParam(":phone", $phone, PDO::PARAM_STR);
        $statement->bindParam(":noOfInstallments", $noOfInstallments, PDO::PARAM_INT);
        $statement->bindParam(":creditPackage", $creditPackage, PDO::PARAM_INT);
        $date = date("Y-m-d");
        $statement->bindParam(":date", $date, PDO::PARAM_STR);

        $statement->execute();
    }
}
