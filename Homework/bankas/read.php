<? session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Read</title>
</head>
<body>

    <?php require __DIR__ . '/parts/nav.php'?> 
    <div class="container mt-3">
        <div class="row">
            <div class="col-2">
                <h2>Read</h2>
            </div>
        </div>
    </div>


        

    <ul class="list-group list-group-flush mt-2">
    <li class="list-group-item">
        <div class="container text-center">
            <div class="row">
                <div class="col-2">
                    <b>Vardas Pavardė</b>
                </div>
                <div class="col-2">
                    <b>Asmens kodas</b>
                </div>
                <div class="col-2">
                    <b>Sąskaitos Nr.</b>
                </div>
                <div class="col-2">
                    <b>Lėšų suma</b>
                </div>
                <div class="col-2">
                    <b>Veiksmai</b>
                </div>
            </div>
        </div>
    </li>

    <?php $asmens_duomenys = json_decode(file_get_contents(__DIR__ . '/data/saskaitos.json'), true) ?>
    <?php foreach ($asmens_duomenys as $asmens_duomuo) : ?>
        <li class="list-group-item">
            <div class="container text-center">
                <div class="row">
                    <div class="col-2">
                        <?= $asmens_duomuo["vardas_pavarde"] ?>
                    </div>
                    <div class="col-2">
                        <?= $asmens_duomuo["akId"] ?>
                    </div>
                    <div class="col-2">
                        <?= $asmens_duomuo["iban"] ?>
                    </div>
                    <div class="col-2">
                        <?= $asmens_duomuo["lesu_suma"] ?>
                    </div>
                    <div class="col-4">
                        <a href="http://localhost/capybaros/homework/bankas/show.php?id=<?= $asmens_duomuo['akId'] ?>" class="btn btn-outline-success btn-sm">Rodyti</a>
                        <a href="http://localhost/capybaros/homework/bankas/edit.php?id=<?= $asmens_duomuo['akId'] ?>" class="btn btn-outline-primary btn-sm">Pridėti</a>
                        <a href="http://localhost/capybaros/homework/bankas/edit_minus.php?id=<?= $asmens_duomuo['akId'] ?>" class="btn btn-outline-secondary btn-sm">Nuskaičiuoti</a>
                        <a href="http://localhost/capybaros/homework/bankas/delete.php?id=<?= $asmens_duomuo['akId'] ?>" class="btn btn-outline-danger btn-sm">Ištrinti</a>
                    </div>
                    </div>
                </div>
            </div>
        </li>
        <?php endforeach ?>
    </ul>

</body>
</html>