<?php require ROOT . 'views/nav.php' ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-5">
            <div class="card mt-4">
                <form action="<?= URL ?>/accounts/addFunds/<?= $accounts->id ?>" method="post">

                    <div class="card-header">
                        <h3 style="text-align:center">Add funds </h3>
                    </div>
                    <div class="card-body">
                        <div style="display: flex; flex-direction:column; gap:10px; align-items:center">
                            <div style="display: flex; flex-direction:column; gap:2px">
                            <div class="mb-3">
                            <div style="display: flex; flex-direction:column; gap:2px">
                                <p> <b>Name Surname: </b> <?= $accounts->vardas_pavarde ?></p>
                                <p> <b>Personal Id: </b> <?= $accounts->akId ?> </p>
                                <p> <b>Balance: </b> <?= number_format($accounts->balance, 2, '.', '') ?> EUR</p>
                                <label for="formGroupExampleInput" class="form-label">EUR</label>
                                <input type="text" class="form-control" name="addmoney">
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer" style="text-align: center;">
                        <button class="btn btn-primary">AddFunds</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>