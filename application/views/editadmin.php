<div class="content-wrapper">
	<section class="content">
		<?php foreach ($siswa as $row) {?>

		<form action="<?php echo base_url().'admin/update';?>" method="post">
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
				<label>asal sekolah</label>
				<input type="text" name="asal_sekolah" class="form-control" value="<?php echo $row->asal_sekolah ?>">
			</div>
				<div class="form-group">
				<label>Nilai MTK</label>
				<input type="text" name="nilai_mtk" class="form-control" value="<?php echo $row->nilai_mtk ?>">
			</div>
	    	 	<div class="form-group">
	            <label> Status </label>
	            <select name="status">
                <option value="menunggu" class="form-control">menunggu</option>
                <option value="diterima" class="form-control">diterima</option>
                <option value="ditolak" class="form-control">ditolak</option>
            </select>
        </div>
	<?php } ?>
	  <a href="<?php echo base_url().'admin/informasiadmin/';?>"button type="button" class="btn btn-danger"><i class="fa fa-arrow-circle-left"></i> KEMBALI</button></a>
			<button type="submit" class="btn btn-primary "><i class="fa fa-floppy-o"></i>  SIMPAN</button>
		</form>
	</section>
</div>