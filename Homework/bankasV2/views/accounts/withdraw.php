<?php require ROOT . 'views/nav.php' ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-5">
            <div class="card mt-4">
                <form action="<?= URL ?>/accounts/updateWithdraw/<?= $account->id ?>" method="post">

                    <div class="card-header">
                        <h3 style="text-align:center">Withdraw funds </h3>
                    </div>
                    <div class="card-body">
                        <div style="display: flex; flex-direction:column; gap:10px; align-items:center">

                            <div style="display: flex; flex-direction:column; gap:2px">
                                <p> <b>Name Surname: </b> <?= $account->vardas_pavarde ?> </p>
                                <p> <b>Personal Id: </b> <?= $account->akId ?> </p>
                                <p> <b>Balance: </b> <?= number_format($account->balance, 2, '.', '') ?> €.</p>
                                <input type="text" name="withdraw">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer" style="text-align: center;">
                        <button class="btn btn-danger btn-sm" type="submit">Withdraw</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>