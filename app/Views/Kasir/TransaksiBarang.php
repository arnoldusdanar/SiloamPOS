<?= $this->extend('template/index'); ?>

<?= $this->Section('konten'); ?>
<div class="container-fluid">
    <div class="col-md grid-margin ">
        <div class="card">
            <div class="card-body">
            <h4 class="card-title">Transaksi Pembelian</h4>
            <form class="forms-sample">
                
                <div class="form-group row">
                <label for="exampleInputMobile" class="col-sm-3 col-form-label">Nama Obat</label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" id="exampleInputMobile" placeholder="Mobile number">
                    </div>
                </div>
                <div class="form-group row">
                <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Jumlah Pembelian</label>
                    <div class="col-sm-6">
                        <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                    </div>
                </div>
    
                <button type="submit" class="btn btn-primary btn-user mr-2">Submit</button>
                <button class="btn btn-primary">Cancel</button>
                </form>
            </div>
            <div class="container-fluid">

                    <!-- Page Heading -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    </tbody>
                                </table>
                         
                    </div>

                </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>