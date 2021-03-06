<?php

/**
 * Stellt eine Verbindung zur Datenbank her und gibt die
 * Datenbankverbindung als PDO zurück.
 *
 * @return PDO
 */
function connectToDatabase()
{
    try {
        if ($_SERVER["SERVER_NAME"] == "web.kurse.ict-bz.ch") {
            return new PDO(
                "mysql:host=localhost;dbname=kurseictbz_30706",
                "kurseictbz_30706",
                "db_307_pw_06"
            );
        } else {
            return new PDO('mysql:host=127.0.0.1;dbname=creditrental', 'root', '', [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            ]);
        }
    } catch (PDOException $e) {
        die('Keine Verbindung zur Datenbank möglich: ' . $e->getMessage());
    }
}
