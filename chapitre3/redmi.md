<?php
require 'connexion.php';

// 1. INSERT
try {
    $stmt = $pdo->prepare(
        "INSERT INTO Utilisateur (nom, email) VALUES (:nom, :email)".
    $stmt->execute([
        'nom'   => 'Charlie',
        'email' => 'charlie@test.com'
    ]);
    echo "✅ Utilisateur ajouté!<br>";
} catch (PDOException $e) {
    echo "❌ Erreur : " . $e->getMessage();
}

// 2. UPDATE
$stmt = $pdo->prepare(
    "UPDATE Utilisateur SET email = :email WHERE id = :id"
);
$stmt->execute([
    'email' => 'charlie.new@test.com',
    'id'    => 1
]);
echo "✅ Utilisateur mis à jour!<br>";

// 3. DELETE
$stmt = $pdo->prepare(
    "DELETE FROM Utilisateur WHERE id = :id"
);
$stmt->execute(['id' => 1]);
echo "✅ Utilisateur supprimé!<br>";

// 4. rowCount
echo $stmt->rowCount() . " ligne(s) affectée(s).";