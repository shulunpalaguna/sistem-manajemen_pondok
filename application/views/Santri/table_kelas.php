<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Kelas</h1>
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
                            <th>NIP</th>
                            <th>Nama Guru</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php
                    $no = 1;
                    foreach ($kelas as $row) : ?>
                        <tbody>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $row->kelas ?></td>
                                <td><?php echo $row->nip ?></td>
                                <td><?php echo $row->nama_guru ?></td>
                                <td>
                                    <a href="<?php echo base_url('santri/index') ?>" class="btn btn-primary"><i class="fas fa-eye"></i> Data Santri</a>
                                    <a href="<?php echo base_url('kelas/edit/') ?><?php echo $row->id_kelas ?>" class="btn btn-success"><i class="fa fa-edit"></i> Edit Wali Kelas</a>
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