<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Guru</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 px-3">
            <div>
                <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah</button>
            </div>
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php
                    $no = 1;
                    foreach ($guru as $gurus) : ?>
                        <tbody>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $gurus->nip ?></td>
                                <td><?php echo $gurus->nama_guru ?></td>
                                <td><?php echo $gurus->jeniskelamin ?></td>
                                <td><?php echo $gurus->alamat ?></td>
                                <td>
                                    <a href="<?php echo base_url('guru/detail/') ?><?php echo $gurus->id_guru ?>" class="btn btn-success"><i class="fas fa-eye"></i> Lihat</a>
                                    <a href="<?php echo base_url('guru/edit/') ?><?php echo $gurus->id_guru ?>" class="btn btn-warning"><i class="fa fa-edit"></i> edit</a>
                                    <a href="<?php echo base_url('guru/hapus/') ?><?php echo $gurus->id_guru ?>" class="btn btn-danger"> <i class="fa fa-trash"></i> delete</a>
                                </td>

                            </tr>
                        </tbody>
                    <?php endforeach; ?>
                </table>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Form Input Data Guru</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="<?php echo base_url('guru/tambah_aksi') ?>">
                                <div class="form-group">
                                    <label>NIP</label>
                                    <input type="text" class="form-control" name="nip">
                                </div>
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" name="nama">
                                </div>
                                <div class="form-group">
                                    <label>Tempat Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="ttl">
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" class="form-control" name="alamat">
                                </div>
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <select class="form-control" name="jeniskelamin">
                                        <option>Laki-Laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>No Telp</label>
                                    <input type="text" class="form-control" name="tlp">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email">
                                </div>
                                <div class="modal-footer">
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->