<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <center><h6 class="h3-mb-4 text-gray-800">APLIKASI OSIS SMK NU TASIKMALAYA</h6></center>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-info"><?php echo $title; ?></h6>
            <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#exampleModal">
             Tambah Data
            </button>
        </div>
    </div>
    <div class="card-body">
        <?php echo $this->session->flashdata('pesan'); ?>
        <div class="table-responsive">
            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Username</td>
                        <td>Password</td>
                        <td>Email</td>
                        <td>Level</td>
                        <td colspan="2">Setting</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($user as $usr) : ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $usr['username']; ?></td>
                            <td><?php echo $usr['password']; ?></td>
                            <td><?php echo $usr['email']; ?></td>
                            <td><?php echo $usr['level']; ?></td>
                            <td>                               
                                <a href="<?php echo base_url() ?>Home4/edit_data/<?php echo $usr['id_user']; ?>" class="badge badge-info"><i class="fa fa-edit"></i></a>
                                <a href="<?php echo base_url() ?>Home4/hapus_data/<?php echo $usr['id_user']; ?>" class="badge badge-danger"><i class="fa fa-trash"></i></a>
                    </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
   
</div>
   <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal untuk tambah data -->
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">FORM TAMBAH DATA</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo base_url('Home4/proses_tambah_data'); ?>">
                    <div class="form-group">
                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="username">
                        </div>
                    <div class="form-group">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="password">
                        </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="email">
                        </div>
                    <div class="form-group">
                        <label for="level" class="col-sm-2 col-form-label">Level</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="level">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-5">
                            <button type="submit" class="btn btn-info">Tambah</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Akhir modal -->