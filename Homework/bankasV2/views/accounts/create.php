
<div class="container">
    <div class="row justify-content-center">
        <div class="col-7">
            <form action="<?= URL ?>/accounts/store" method="post">
                <div class="card mt-5">
                    <div class="card-header">
                        <h1>Create new account</h1>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Name Surname</label>
                            <input type="text" class="form-control" name="vardas_pavarde">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Personal ID</label>
                            <input type="text" class="form-control" name="akId">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">IBAN</label>
                            <input type="text" class="form-control" name="iban">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Balance</label>
                            <input type="text" class="form-control" name="balance">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-outline-info btn-sm">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

