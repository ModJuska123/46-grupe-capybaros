<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Read</title>
</head>
<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <span class="navbar-text">
                <b>Navbar</b>
            </span>
        </div>
    </nav>

    <ul class="list-group list-group-flush mt-5">
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
                <div class="col-6">
                    <b>Kt.</b>
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
                        <?= $asmens_duomuo["akID"] ?>
                    </div>
                    <div class="col-2">
                        <?= $asmens_duomuo["iban"] ?>
                    </div>
                    </div>
                </div>
            </div>
        </li>
        <?php endforeach ?>
    </ul>

</body>
</html>