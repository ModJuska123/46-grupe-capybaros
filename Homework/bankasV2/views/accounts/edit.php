
<div class="container">
    <div class="row justify-content-center">
        <div class="col-7">
            <form action="<?= URL ?>/accounts/update/<?= $account->id ?>" method="post">
                <div class="card mt-5">
                    <div class="card-header">
                        <h1>Edit account</h1>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Vardas Pavardė</label>
                                <input type="text" class="form-control" name="vardas_pavarde" value="<?= $account->vardas_pavarde ?>">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Asmens kodas</label>
                                <input type="text" class="form-control" name="akId" value="<?= $account->akId ?>">
                            </div>
                        </div>
                    <div class="card-footer">
                        <button class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

