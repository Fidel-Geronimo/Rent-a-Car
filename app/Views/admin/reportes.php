<?= $this->include("includes/header");
session_start();
?>

<div class="container py-4">
    <div class="row">
        <div class="col-8">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h4 class="text-white text-capitalize ps-3">Reportes</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive-lg">
                        <table id="example" class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CLIENTE</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">FOTO</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">fecha</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="idEmpleado align-middle text-center text-sm">
                                        <span class="text-secondary text-xs font-weight-normal">1</span>
                                    </td>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-xs">Fidel Geronimo</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <img src="<?= base_url('public/uploads/1648742313_a805b36f48f7ae87c745.png') ?>" class="avatar avatar-md me-3">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-xs">Grand Cheroke</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-normal">21-02-2022</span>
                                    </td>
                                    <td class="align-middle">
                                        <a class="btn btn-info btnEditarCliente"><span class="material-icons">edit</span></a>
                                        <a href="" class="btn btn-danger "><span class="material-icons">delete</span></a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <div class="input-group input-group-static mb-4">
                        <label for="exampleFormControlSelect1" class="ms-0">Mostrar:</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option selected>Todo</option>
                            <option>Abiertas</option>
                            <option>Cerradas</option>
                        </select>
                    </div>
                    <div class="input-group input-group-static mb-4">
                        <label for="exampleFormControlSelect1" class="ms-0">Filtrar Por:</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Filtra por categorias</option>
                            <option>Vehiculo</option>
                            <option>Clientes</option>
                        </select>
                    </div>
                    <!-- <div class="input-group input-group-static mb-4">
                        <label for="exampleFormControlSelect1" class="ms-0">Mostrar:</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option selected>Todo</option>
                            <option>Abiertas</option>
                            <option>Cerradas</option>
                        </select>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
</main>
<?= $this->include("includes/footer"); ?>