<?= $this->include("includes/header"); ?>
<div class="container-fluid py-4">
    <div class="card">
        <div class="card-header">
            <h3>Reportes <a href="" class="btn bg-gradient-primary float-end">Nueva</a><a href="" class="btn bg-gradient-primary float-end me-3"><i class="material-icons">history</i></a></h3>
        </div>


        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</main>
<?= $this->include("includes/footer"); ?>