<?= $this->include("includes/header"); ?>
<div class="container-fluid py-4">
    <div class="card">
        <div class="card-header">
            <h3>Vehiculos <a href="" class="btn bg-gradient-primary float-end">Nueva</a></h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Foto</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Precio</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Combustible</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fecha</th>

                            <th class="text-secondary opacity-7"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="align-middle text-center text-sm">
                                <span class="text-secondary text-xs font-weight-normal">1</span>
                            </td>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <img src="<?= base_url("public/uploads/Tesla-Model-3-PNG-Images-HD.png") ?>" class="avatar avatar-xxl me-3">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-xs">Tesla</h6>
                                        <p class="text-xs text-secondary mb-0">Modelo 29019</p>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <span class="text-secondary text-xs font-weight-normal">400$</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-normal">Gasolina</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-normal">23/04/18</span>
                            </td>

                            <td class="align-middle">
                                <a class="btn btn-info btnEditar"><span class="material-icons">edit</span></a>
                                <a class="btn btn-danger"><span class="material-icons">delete</span></a>
                            </td>
                        </tr>



                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</main>
<?= $this->include("includes/footer"); ?>