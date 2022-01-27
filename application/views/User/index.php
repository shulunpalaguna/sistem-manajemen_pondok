<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">My Profile</h1>
    <!-- DataTales Example -->
    <div class="card h3 mb-3" style="max-width: 700px;">
        <div class="row no-gutters p-2">
            <div class="col-md-4 ">
                <img src=" <?php echo base_url('assets/img/profile/') . $user['image']; ?>" class="card-img-top" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h3 class="h3 mb-2 text-gray-800">Administrator</h2>
                        <h5 class="card-title"><?php echo $user['name']; ?></h5>
                        <p class="card-text"> <small><?php echo $user['email']; ?> </small> </p>

                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->