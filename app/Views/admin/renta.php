<?= $this->include("includes/header"); ?>

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h4 class="text-white text-capitalize ps-3">Rentas Activas <a data-bs-toggle="modal" data-bs-target="#modalVehiculo" class="btn bg-gradient-info me-3 float-end"><i class="material-icons opacity-10">add</i> Nuevo</a></h4>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cliente</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">vehiculo</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Precio</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Entrega Y devolucion</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fecha</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td class="align-middle text-center text-sm idVehiculo">
                                        <span class="text-secondary text-xs font-weight-normal">1</span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="text-secondary text-xs font-weight-normal">Fidel Geronimo</span>
                                    </td>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-xs">Mitsubitchi Lanzer</h6>
                                                <p class="text-xs text-secondary mb-0">Mitsubitchi</p>
                                                <p class="text-xs text-secondary mb-0">2022</p>
                                            </div>
                                            <div>
                                                <img src="<?= base_url("public/uploads/1648083484_2d277bea50f488082d5b.png") ?>" class="avatar avatar-xl me-3">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-normal">400</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <div class="d-flex px-2 py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                <span class="text-secondary text-xs font-weight-normal">22-02-2022 --</span>
                                            </div>
                                            <div>
                                                <span class="text-secondary text-xs font-weight-normal">25-02-2022</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-normal">22-03-2022</span>
                                    </td>
                                    <td class="align-middle">
                                        <a class="btn btn-success btnRentarVehiculo"><span class="material-icons">receipt</span></a>
                                        <a class="btn btn-info btnEditarVehiculo"><span class="material-icons">edit</span></a>
                                        <a href="" class="btn btn-danger "><span class="material-icons">delete</span></a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>


<?= $this->include("includes/footer"); ?>