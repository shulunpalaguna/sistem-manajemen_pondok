<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data SPP</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 px-3">
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kelas</th>
                            <th>Biaya</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php
                    $no = 1;
                    foreach ($spp as $row) : ?>
                        <tbody>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $row->kelas ?></td>
                                <td><?php echo $row->harga ?></td>
                                <td>
                                    <a href="<?php echo base_url('santri/index') ?>" class="btn btn-primary"><i class="fas fa-eye"></i>Data Santri</a>
                                    <a href="<?php echo base_url('spp/edit/') ?><?php echo $row->id_spp ?>" class="btn btn-success"><i class="fa fa-edit"></i>Edit Harga</a>
                                </td>

                            </tr>
                        </tbody>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->