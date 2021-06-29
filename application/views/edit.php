<div class="content-wrapper">
	<section class="content">
		<?php foreach ($siswa as $row) {?>

		<form action="<?php echo base_url().'siswa/update';?>" method="post">
			<div class="form-group">
				<label>nama siswa</label>
				<input type="hidden" name="id" class="form-control" value="<?php echo $row->id ?>">
				<input type="text" name="nama_siswa" class="form-control" value="<?php echo $row->nama_siswa ?>">
			</div>
				<div class="form-group">
				<label>nisn</label>
				<input type="text" name="nisn" class="form-control" value="<?php echo $row->nisn ?>">
			</div>
			<div class="form-group">
			            <label> Jenis Kelamin </label>
			    <input type="text"class="form-control" name="jenis_kelamin" value="<?php echo $row->jenis_kelamin ?>">
			</div>
				<div class="form-group">
				<label>tempat tanggal lahir</label>
				<input type="text" name="ttl" class="form-control" value="<?php echo $row->ttl ?>">
			</div>
				<div class="form-group">
				<label>asal sekolah</label>
				<input type="text" name="asal_sekolah" class="form-control" value="<?php echo $row->asal_sekolah ?>">
			</div>
				<div class="form-group">
				<label>nilai mtk</label>
				<input type="text" name="nilai_mtk" class="form-control" value="<?php echo $row->nilai_mtk ?>">
			</div>
	<?php } ?>
	  <a href="<?php echo base_url().'siswa/informasipendaftaran/';?>"button type="button" class="btn btn-danger"><i class="fa fa-arrow-circle-left"></i> KEMBALI</button></a>
			<button type="submit" class="btn btn-primary "><i class="fa fa-floppy-o"></i>  SIMPAN</button>
		</form>
	</section>
</div>