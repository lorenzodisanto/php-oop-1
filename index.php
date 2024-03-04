<?php require_once __DIR__ . "/db.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Production</title>

        <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
</head>
<body data-bs-theme="dark">
    <div class="container mt-3">
        <h1 class="text-center">Prodotti</h1>
        <div class="row g-4 mt-5">
        <?php foreach($products as $product): ?>
            <div class="col-4">
                <?php include __DIR__ . "./partials/card.php" ?>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
</body>
</html>