<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data SPP</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">

        </div>
        <div class="card-body">
            <?php foreach ($spp as $row) { ?>
                <form action="<?php echo base_url('spp/update') ?>" method="POST">
                    <div class="form-group">
                        <label>Kelas</label>
                        <input type="hidden" class="form-control" name="id_kelas[]" value="<?php echo $row->id_spp ?>">
                        <input type="text" class="form-control" name="kelas" disabled value="<?php echo $row->kelas ?>">
                    </div>
                    <div class="form-group">
                        <label>Biaya</label>
                        <input type="text" class="form-control" name="harga" value="<?php echo $row->harga ?>">
                    </div>
                    <div>
                        <a href="<?php echo base_url('spp/index') ?>" class="btn btn-danger">Kembali</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            <?php } ?>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->