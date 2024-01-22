<?php require ROOT. 'views/nav.php' ?>

<ul class="list-group list-group-flush">

<li class="container mt-3">
        <div class="row">
            <div class="col-1">
                <b>Number</b>
            </div>
            <div class="col-2">
            <form action="<?= URL ?>/accounts/" method="get">
                    <input type="hidden" name="sort" value="<?= $sortValue ?>">
                    <button type="submit" class="sort-button"> <b>Name Surname</b></button>
            </form>
            
            </div>
            <div class="col-2">
                <b>Personal Id</b>
            </div>
            <div class="col-2">
                <b>Account Number</b>
            </div>
            <div class="col-1">
                <b>Balance</b>
            </div>
            <div class="col-4">
                <b>Actions</b>
            </div>
        </div>
    </li>

    <?php foreach ($accounts as $account) : ?>

    <li class="container mt-3">
        <div class="row">
            
            <div class="col-1">
                <?=$account->id ?>
            </div>
            
            <div class="col-2">
                <?=$account->vardas_pavarde ?>
            </div>
            
            <div class="col-2">
                <?=$account->akId ?>
            </div>

            <div class="col-2">
                <?=$account->AC ?>
            </div>

            <div class="col-1">
                <?=$account->balance ?>
            </div>

            <div class="col-4" style="display: flex; flex-direction:row; gap:2px">
                <a href="<?= URL ?>/accounts/edit/<?= $account->id ?>" class="btn btn-info mb-1">Edit</a>
                <form action="<?= URL ?>/accounts/destroy/<?=$account->id ?>/" method="post">
                    <button class="btn btn-danger">Delete</button>
                </form>
                <a href="<?= URL ?>/accounts/addFunds/<?= $account->id ?>" class="btn btn-outline-success btn-sm" title="Add money"><i class="fa-solid fa-plus"></i></a>
                <a href="<?= URL ?>/accounts/withdraw/<?= $account->id ?>" class="btn btn-outline-info btn-sm" title="Withdraw money"><i class="fa-solid fa-minus"></i></a>
            </div>

        </div>
    </li>
     
    <?php endforeach ?>

</ul>
;