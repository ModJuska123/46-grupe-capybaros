<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Create</title>
</head>
<body>

    <?php require __DIR__ . '/parts/nav.php' ?> 

    <div class="container mt-5">
            <div class="row">
                <div class="col">
                    <h2>Create</h2>
                    <div class="card";>
                        <div class="card-body">
                           <form action="http://localhost/capybaros/homework/bankas/store.php" method=post>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput" class="form-label">Vardas Pavardė</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" name="vardas_pavarde">
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">Asmens kodas</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput2" name="akId">
                                </div>
                                <button type="submit" class="btn btn-outline-primary">Create</button>
                           </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>