<?php session_start() ?>

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
    <?php require __DIR__ . '/parts/msg.php' ?> 

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

        <div class="container mt-5">
            <div class="row">
                <div class="col">
                    <h2>Show</h2>
                    <div class="aler-aler-danger" role="alert">
                        Asmens domuo nerastas!
                    </div>
                </div>
            </div>
        </div>

        <?php else: ?>
      
        <div class="container mt-5">
            <div class="row">
                <div class="col">
                    <h2>Show</h2>
                    <div class="card";>
                        <div class="card-body">
                            <h6 class="card-text">Vardas Pavarde: <?= $asmens_duomuo['vardas_pavarde'] ?></h6>
                            <p class="card-title">Asmens kodas: <?= $asmens_duomuo['akId'] ?></p>
                            <p class="card-title">IBAN: <?= $asmens_duomuo['iban'] ?></p>
                            <p class="card-title">Lėšų suma (EUR): <?= $asmens_duomuo['lesu_suma'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php endif ?>
    
</body>
</html>