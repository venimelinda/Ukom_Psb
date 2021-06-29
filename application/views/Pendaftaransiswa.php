<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Data Siswa
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Siswa</li>
      </ol>
    </section>
<section>
  
  <div class="modal-body">
        <form action="<?php echo base_url().'siswa/fungsitambah';?>" method="POST">
        
        <div class="form-group">
            <label> Nama Calon Siswa </label>
            <input type="text" name="nama_siswa" class="form-control">
        </div>
        <div class="form-group">
            <label> NISN </label>
            <input type="text" name="nisn" class="form-control">
        </div>
        <div class="form-group">
            <label> Jenis Kelamin </label>
            <input type="text" name="jenis_kelamin" class="form-control">
        </div>
        <div class="form-group">
            <label> Tempat/Tanggal Lahir </label>
            <input type="text" name="ttl" class="form-control">
        </div>
        <div class="form-group">
            <label> Asal Sekolah </label>
            <input type="text" name="asal_sekolah" class="form-control">
        </div>
   
                <button type="reset" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">simpan</button>
      </form>
      </div>
</section>
    <!-- Button trigger modal -->
</div>