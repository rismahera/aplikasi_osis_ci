<div class="container-fluid">

<h3><?php echo $title; ?></h3>
<hr>
<br>
<form method="post" action="<?php echo base_url('Home/proses_tambah_data');?>">
  <div class="form-group">
    <label for="nama_jabatan" class="col-sm-2 col-form-label">Nama Jabatan</label>
    <div class="col-sm-5">
    <input type="text" class="form-control" name="nama_jabatan">
  </div>
  </div>
  <div class="form-group">
    <label for="nama_jabatan" class="col-sm-2 col-form-label"></label>
    <div class="col-sm-5">
    <button type="submit" class="btn btn-info">Tambah</button>
    <button type="reset" class="btn btn-danger">Reset</button>
  </div>
  </div>
</form>
</div>