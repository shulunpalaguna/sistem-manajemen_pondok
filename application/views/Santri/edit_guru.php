<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Santri</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">

        </div>
        <div class="card-body">
            <?php foreach ($guru as $gurus) { ?>
                <form action="<?php echo base_url('guru/update') ?>" method="POST">
                    <div class="form-group">
                        <label>NIS</label>
                        <input type="hidden" class="form-control" name="id_guru" value="<?php echo $gurus->id_guru ?>">
                        <input type="text" class="form-control" name="nip" value="<?php echo $gurus->nip ?>">
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama_guru" value="<?php echo $gurus->nama_guru ?>">
                    </div>
                    <div class="form-group">
                        <label>Tempat Tanggal Lahir</label>
                        <input type="date" class="form-control" name="ttl" value="<?php echo $gurus->ttl ?>">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" name="alamat" value="<?php echo $gurus->alamat ?>">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-control" name="jeniskelamin" value="<?php echo $gurus->$jeniskelamin ?>">
                            <option <?php if ($gurus->jeniskelamin == 'Laki-Laki') echo 'selected'; ?>>Laki-Laki</option>
                            <option <?php if ($gurus->jeniskelamin == 'Perempuan') echo 'selected'; ?>>Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>No Telp</label>
                        <input type="text" class="form-control" name="tlp" value="<?php echo $gurus->tlp ?>">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" value="<?php echo $gurus->email ?>">
                    </div>
                    <div>
                        <a href="<?php echo base_url('guru/index') ?>" class="btn btn-danger">Kembali</a>
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