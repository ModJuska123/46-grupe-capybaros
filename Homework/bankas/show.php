<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Show</title>
</head>
<body>

    <?php require __DIR__ . '/parts/nav.php' ?> 

    <?php 
        $id = $_GET['id'] ?? 0;
        $asmens_duomenys = json_decode(file_get_contents(__DIR__ . '/data/saskaitos.json'), true);
        $asmens_duomuo = null;
        foreach ($asmens_duomenys as $item) {
            if ($item['akId'] == $id) {
               $asmens_duomuo = $item;
               break;
            }
        }
    ?>

    <?php if (!$asmens_duomuo) : ?>
        <div class="alert alert-danger" role="alert">
           Asmens duomuo nerastas!
        </div>

    <?php else: ?>         

    <div class="container text-center">
        <div class="row">
            <div class="col-2">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Asmens domuo<?= $asmens_duomuo['akID'] ?></h5>
                    <p class="card-text">Vardas Pavarde<?= $asmens_duomuo['vardas_pavarde'] ?></p>
                </div>
            </div>
        </div>
    </div>

    <?php endif ?>

</body>
</html>