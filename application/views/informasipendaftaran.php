<div class="content-wrapper">
 <section class="content">
    <center>
    <h2>DATA INFORMASI PENDAFTARAN</h2>
    <h4>SMA N 1 METRO</h4>
  </center>
    	
      <br>
      <br>
        
    	<table class="table">
    		<tr>
    			<th>NO</th>
    			<th>NAMA</th>
    			<th>NISN</th>
          <th>JENIS KELAMIN</th>
          <th>TEMPAT/TANGGAL LAHIR</th>
          <th>ASAL SEKOLAH</th>
          <th>NILAI MTK</th>
          <th colspan="2">AKSI</th>
          <th colspan="2">STATUS</th>
    		</tr>
         <?php
          $count = 0;
    foreach ($siswa as $row) {
      $count = $count +1;
    ?>
          	<tr>
            	<td><?php echo $count?></td>
    			<td><?php echo $row ->nama_siswa?></td>
    			<td><?php echo $row ->nisn?></td>
          <td><?php echo $row ->jenis_kelamin?></td>
          <td><?php echo $row ->ttl?></td>
          <td><?php echo $row ->asal_sekolah?></td>
          <td><?php echo $row ->nilai_mtk?></td>
          
          <td><?php echo anchor('siswa/edit/'.$row->id,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>')?></td>
          <td><?php echo $row ->status?></td>
			</tr>
        <?php } ?>
    	</table>

    </section>
  </div>