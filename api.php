<?php

header("Content-Type: application/json");

$pdo = new PDO(
    "mysql:host=mariadb;dbname=hallinta-teo;charset=utf8mb4",
    "school",
    "school123"
);

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$data = json_decode(file_get_contents("php://input"), true);

$etunimi = $data["etunimi"] ?? "";
$sukunimi = $data["sukunimi"] ?? "";
$email = $data["email"] ?? "";
$puhelin = $data["puhelin"] ?? "";

$sql = "INSERT INTO opiskelija
        (etunimi, sukunimi, email, puhelin)
        VALUES
        (:etunimi, :sukunimi, :email, :puhelin)";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    ":etunimi" => $etunimi,
    ":sukunimi" => $sukunimi,
    ":email" => $email,
    ":puhelin" => $puhelin
]);

echo json_encode([
    "success" => true,
    "viesti" => "Opiskelija lisätty."
]);