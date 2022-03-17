<?= $this->include("includes/header"); ?>
<div class="container-fluid py-4">
    <div class="card">
        <div class="card-header">
            <h3>Empleados <a href="" data-bs-toggle="modal" data-bs-target="#modalEmpleado" class="btn bg-gradient-primary float-end"><i class="material-icons opacity-10">add</i> Nuevo</a></h3>
        </div>


        <div class="card-body">
            <div class="table-responsive-sm">
                <table id="example" class="table table-borderless align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Empleado</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Funcion</th>
                            <!-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Technology</th> -->
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>
                            <th class="text-secondary opacity-7"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <img src="https://demos.creative-tim.com/test/material-dashboard-pro/assets/img/team-2.jpg" class="avatar avatar-md me-3">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-xs">John Michael</h6>
                                        <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">Manager</p>
                            </td>
                            <!-- <td class="align-middle text-center text-sm">
                                <span class="badge badge-sm badge-success">Online</span>
                            </td> -->
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-normal">23/04/18</span>
                            </td>
                            <td class="align-middle">
                                <a href="javascript:;" class="text-secondary font-weight-normal text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                    Edit
                                </a>
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