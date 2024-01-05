<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Edit</title>
</head>
<body>

    <?php require __DIR__ . '/parts/nav.php' ?> 

    <?php
    $id = $_GET['id'] ?? 0; //as keeiciau i post
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
                <div class="coll">
                    <h2>Edit</h2>
                    <div class="alert alert-danger" role="alert">
                        Sąskaita nerasta !!!
                    </div>
                </div>
            </div>
        </div>

    <?php else: ?>

    <div class="container mt-5">
            <div class="row">
                <div class="col">
                    <h2>Edit</h2>
                    <div class="card";>
                        <div class="card-body">
                           <form action="http://localhost/capybaros/homework/bankas/update_minus.php?id=<?=$_GET["id"] ?? 0 ?>" method="post">
                                <div class="mb-3">
                                    <label class="form-label">Lesos: </label>
                                    <input type="range" class="form-range" name="lesos" min="0" max="1000" value="<?= $asmens_duomuo['lesu_suma'] ?>">
                                </div>
                                <button type="submit" class="btn btn-outline-primary">Edit</button>
                           </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php endif ?>
</body>
</html>