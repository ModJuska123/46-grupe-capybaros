<?php require ROOT . 'views/nav.php' ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-5">
            <div class="card mt-4">
                <form action="<?= URL ?>/accounts/addFunds<?= $account->id ?>" method="post">
                    <div class="card-header">
                        <h3 style="text-align:center">Add funds </h3>
                    </div>
                    <div class="card-body">
                        <div style="display: flex; flex-direction:column; gap:10px; align-items:center">
                            <div style="display: flex; flex-direction:column; gap:2px">
                               <input type="text" name="AddFunds">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer" style="text-align: center;">
                        <button class="btn btn-danger btn-sm" type="submit">AddFunds</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>