<?php require ROOT. 'views/nav.php' ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-9">
            <div class="card mt-5">
                <div class="card-header">
                    <h1>All accounts</h1>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <?php foreach($accounts as $account): ?>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-2">
                                 
                                        </div>
                                    </div>
                            </li>
                        <?php endforeach ?>
                    </ul>
            
                </div>
                <div class="card-footer">
                    
                </div>
            </div>
        </div>
    </div>
</div>