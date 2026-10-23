<?php
// Inclusion du fichier de connexion à la base de données
require_once 'includes/db.php';

// Récupération de toutes les coopératives
$cooperatives = [];
$result = $db->query("SELECT * FROM cooperatives");
if ($result) {
    $cooperatives = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $error = "Erreur lors du chargement des données : " . $db->error;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Coopératives - Aynou-Shop</title>
    <!-- Liaison des fichiers de style et Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- En-tête de la page (Navigation) -->
    <?php include 'includes/header.php'; ?>

    <main class="container my-5">
        <h1 class="text-center mb-3">Nos Coopératives Partenaires</h1>
        <p class="text-center text-muted mb-5">Découvrez les coopératives locales qui nous fournissent des produits authentiques et naturels.</p>

        <?php if (isset($error)): ?>
            <div class="alert alert-danger" role="alert">
                <?= htmlspecialchars($error) ?>
            </div>
        <?php endif; ?>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <?php if (!empty($cooperatives)): ?>
                <?php foreach ($cooperatives as $coop): ?>
                    <div class="col">
                        <div class="card h-100 shadow-sm border-0 rounded-3 overflow-hidden">
                            <img src="<?= htmlspecialchars($coop['image']) ?>" class="card-img-top" alt="<?= htmlspecialchars($coop['nom']) ?>" style="height: 200px; object-fit: cover;">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title text-success"><?= htmlspecialchars($coop['nom']) ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted">📍 <?= htmlspecialchars($coop['ville']) ?></h6>
                                <p class="card-text flex-grow-1"><?= htmlspecialchars($coop['description']) ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12">
                    <p class="text-center text-muted">Aucune coopérative disponible pour le moment.</p>
                </div>
            <?php endif; ?>
        </div>
    </main>

    <!-- Pied de page -->
    <?php include 'includes/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>