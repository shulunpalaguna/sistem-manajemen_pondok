<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Santri</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">

        </div>
        <div class="card-body">
            <?php foreach ($santri as $santris) { ?>
                <form action="<?php echo base_url('santri/update') ?>" method="POST">
                    <div class="form-group">
                        <label>NIS</label>
                        <input type="hidden" class="form-control" name="id_santri" value="<?php echo $santris->id_santri ?>">
                        <input type="text" class="form-control" name="nis" value="<?php echo $santris->nis ?>">
                    </div>
                    <div class="form-group">
                        <label>NISN</label>
                        <input type="text" class="form-control" name="nisn" value="<?php echo $santris->nisn ?>">
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama_santri" value="<?php echo $santris->nama_santri ?>">
                    </div>
                    <div class="form-group">
                        <label>Tempat Tanggal Lahir</label>
                        <input type="date" class="form-control" name="ttl" value="<?php echo $santris->ttl ?>">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" name="alamat" value="<?php echo $santris->alamat ?>">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-control" name="jeniskelamin" value="<?php echo $santris->$jeniskelamin ?>">
                            <option <?php if ($santris->jeniskelamin == 'Laki-Laki') echo 'selected'; ?>>Laki-Laki</option>
                            <option <?php if ($santris->jeniskelamin == 'Perempuan') echo 'selected'; ?>>Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>No Telp</label>
                        <input type="text" class="form-control" name="tlp" value="<?php echo $santris->tlp ?>">
                    </div>
                    <div class="form-group">
                        <label>Nama Orang Tua</label>
                        <input type="text" class="form-control" name="nama_ortu" value="<?php echo $santris->nama_ortu ?>">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" value="<?php echo $santris->email ?>">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status" value="<?php echo $santris->$status ?>">
                            <option <?php if ($santris->status == 'Aktif') echo 'selected'; ?>>Aktif</option>
                            <option <?php if ($santris->status == 'Tidak Aktif') echo 'selected'; ?>>Tidak Aktif</option>
                        </select>
                    </div>
                    <div>
                        <a href="<?php echo base_url('santri/index') ?>" class="btn btn-danger">Kembali</a>
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