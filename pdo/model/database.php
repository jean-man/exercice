<?php
require_once __DIR__ . "/../config/parameters.php";

try {
    $connexion = new PDO("mysql:dbname=" . DB_NAME . ";host=" . DB_HOST, DB_USER, DB_PASS, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8', lc_time_names = 'fr_FR';"
    ]);
} catch (PDOException $exception) {
    echo "Erreur de connexion à la base de données";
}

function getAllUtilisateurs(int $page, int $page_rows = 10) : array {
    global $connexion;

    $offset = ($page - 1) * $page_rows;

    $query = "
      SELECT
        utilisateur.*,
        DATE_FORMAT(utilisateur.date_naissance, '%e %b %Y') AS date_naissance_format
      FROM utilisateur
      ORDER BY utilisateur.nom, utilisateur.prenom
      LIMIT $page_rows OFFSET $offset
    ";

    $stmt = $connexion->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getCountEntities(string $table) : int {
    global $connexion;

    $query = "SELECT COUNT(*) AS nb_rows FROM $table";

    $stmt = $connexion->prepare($query);
    $stmt->execute();

    $result = $stmt->fetch();

    return intval($result["nb_rows"]);
}

function getAllEntities(string $table) : array {
    global $connexion;

    $query = "SELECT * FROM $table";

    $stmt = $connexion->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();
}

function deleteEntity(string $table, int $id) : ?int {
    global $connexion;

    $errcode = null;

    $query = "DELETE FROM $table WHERE id = :id";

    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);

    try {
        $stmt->execute();
    } catch (PDOException $ex) {
        $errcode = $ex->getCode();
    }

    return $errcode;
}

function getOneUtilisateur(int $id) : array {
    global $connexion;

    $query = "SELECT 
                utilisateur.*,
                CONCAT(utilisateur.nom, ' ', utilisateur.prenom) AS fullname,
                DATE_FORMAT(utilisateur.date_naissance, '%e %b %Y') AS date_naissance_format,
                ville.nom AS ville,
                ville.cp
            FROM utilisateur
            LEFT JOIN ville ON ville.id = utilisateur.ville_id
            INNER JOIN civilite ON utilisateur.civilite_id = civilite.id
            WHERE utilisateur.id = :id";

    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetch();
}

function getAllCommandesByUtilisateur(int $id) : array {
    global $connexion;

    $query = "
            SELECT
              commande.reference,
              commande.date_creation,
              moyen_paiement.label AS moyen_paiement,
              SUM(phc.qte * phc.prix) AS montant
            FROM commande
            LEFT JOIN produit_has_commande AS phc ON commande.id = phc.commande_id
            INNER JOIN moyen_paiement ON commande.moyen_paiement_id = moyen_paiement.id
            WHERE commande.utilisateur_id = :id
            GROUP BY commande.id
    ";

    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}

function insertMoyenPaiement(string $label) : int {
    global $connexion;

    $query = "INSERT INTO moyen_paiement (label) VALUES (:label);";

    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":label", $label);
    $stmt->execute();

    return $connexion->lastInsertId();
}







