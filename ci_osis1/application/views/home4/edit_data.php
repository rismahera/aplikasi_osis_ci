<div class="container-fluid">

<h3><?php echo $title; ?></h3>
<hr>
<br>
<form method="post" action="<?php echo base_url('Home4/proses_edit_data');?>">
<input type="hidden" name="id_user" value="<?php echo $tbl_user['id_user'];?>">
  <div class="form-group">
    <label for="username" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-2">
    <input type="text" class="form-control" name="username" required="" value="<?php echo $tbl_user['username']; ?>">
  </div>
  <div class="form-group">
    <label for="password" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-2">
    <input type="text" class="form-control" name="password" required="" value="<?php echo $tbl_user['password']; ?>">
  </div>
  <div class="form-group">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-2">
    <input type="text" class="form-control" name="email" required="" value="<?php echo $tbl_user['email']; ?>">
  </div>
  <div class="form-group">
    <label for="level" class="col-sm-2 col-form-label">Level</label>
    <div class="col-sm-2">
    <input type="text" class="form-control" name="level" required="" value="<?php echo $tbl_user['level']; ?>">
  </div>
  </div>
  <div class="form-group">
    <label for="username" class="col-sm-2 col-form-label"></label>
    <div class="col-sm-2">
    <button type="submit" class="btn btn-info">Ubah</button>
    <button type="reset" class="btn btn-danger">Reset</button>
  </div>
  </div>
</form>
</div>