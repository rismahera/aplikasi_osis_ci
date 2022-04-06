<div class="container-fluid">

<h3><?php echo $title; ?></h3>
<hr>
<br>
<form method="post" action="<?php echo base_url('Home1/proses_edit_data');?>">
<input type="hidden" name="id_anggota" value="<?php echo $tbl_anggota['id_anggota'];?>">
  <div class="form-group">
    <label for="nama_anggota" class="col-sm-2 col-form-label">Nama Anggota</label>
    <div class="col-sm-2">
    <input type="text" class="form-control" name="nama_anggota" required="" value="<?php echo $tbl_anggota['nama_anggota']; ?>">
  </div>
  <div class="form-group">
    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-2">
    <input type="text" class="form-control" name="alamat" required="" value="<?php echo $tbl_anggota['alamat']; ?>">
  </div>
  <div class="form-group">
    <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
    <div class="col-sm-2">
    <select name="kelas" id="kelas" class="form-control">
        <option value="XI RPL 1">XI RPL 1</option>
        <option value="XI RPL 2">XI RPL 2</option>
        <option value="XI RPL 3">XI RPL 3</option>
        <option value="XI TBSM">XI TBSM 1</option>
        <option value="XI TBSM">XI TBSM 2</option>
        <option value="XII RPL 1">XII RPL 1</option>
        <option value="XII RPL 2">XII RPL 2</option>
        <option value="XII TBSM 1">XII TBSM 1</option>
        <option value="XII TBSM 2">XII TBSM 2</option>
    </select>
  </div>
  <div class="form-group">
    <label for="tempat_tanggal_lahir" class="col-sm-2 col-form-label">Tempat Tanggal Lahir</label>
    <div class="col-sm-2">
    <input type="text" class="form-control" name="tempat_tanggal_lahir" required="" value="<?php echo $tbl_anggota['tempat_tanggal_lahir']; ?>">
  </div>
  <div class="form-group">
    <label for="no_hp" class="col-sm-2 col-form-label">No Hp</label>
    <div class="col-sm-2">
    <input type="text" class="form-control" name="no_hp" required="" value="<?php echo $tbl_anggota['no_hp']; ?>">
  </div>
  <div class="form-group">
    <label for="program_keahlian" class="col-sm-2 col-form-label">Program Keahlian</label>
    <div class="col-sm-2">
    <select name="program_keahlian" id="program_keahlian" class="form-control">
        <option value="RPL">RPL</option>
        <option value="TBSM">TBSM</option>
    </select>
  </div>
  <div class="form-group">
    <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
    <div class="col-sm-2">
    <input type="text" class="form-control" name="jabatan" required="" value="<?php echo $tbl_anggota['jabatan']; ?>">
  </div>
  <div class="form-group">
    <label for="tahun_masa_khidmat" class="col-sm-2 col-form-label">Tahun Masa Khidmat</label>
    <div class="col-sm-2">
    <select name="tahun_masa_khidmat" id="tahun_masa_khidmat" class="form-control">
        <option value="2021">2021</option>
        <option value="2022">2022</option>
        <option value="2023">2023</option>
        <option value="2024">2024</option>
        <option value="2025">2025</option>
    </select>
  </div>
  <div class="form-group">
    <label for="foto" class="col-sm-2 col-form-label">Foto</label>
    <div class="col-sm-2">
    <input type="file" class="form-control" name="foto">
  </div>
  </div>
  <div class="form-group">
    <label for="nama_anggota" class="col-sm-2 col-form-label"></label>
    <div class="col-sm-2">
    <button type="submit" class="btn btn-info">Ubah</button>
    <button type="reset" class="btn btn-danger">Reset</button>
  </div>
  </div>
</form>
</div>