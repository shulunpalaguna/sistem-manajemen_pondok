<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Detail Data Santri</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">

        </div>
        <div class="card-body">
            <table class="table">
                <tr>
                    <th>NIP</th>
                    <td><?php echo $detail->nip ?></td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td><?php echo $detail->nama_guru ?></td>
                </tr>
                <tr>
                    <th>Tempat Tanggal Lahir</th>
                    <td><?php echo $detail->ttl ?></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td><?php echo $detail->alamat ?></td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td><?php echo $detail->jeniskelamin ?></td>
                </tr>
                <tr>
                    <th>No Telfon</th>
                    <td><?php echo $detail->tlp ?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?php echo $detail->email ?></td>
                </tr>
            </table>
            <a href="<?php echo base_url('guru/index') ?>" class="btn btn-primary">Kembali</a>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->