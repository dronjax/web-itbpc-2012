<div style="width:700px; margin-left:auto; margin-right:auto; line-height: 40px;">
	<div class="left" style="width:45%;font-weight:bold;"> 
		Nama Tim <br>
		Universitas/Institut <br>
		Alamat Universitas/Institut <br>
		Nama Lengkap Anggota Tim #1 <br>
		Nomor Ponsel Anggota Tim #1 <br>
		Email Anggota Tim #1 <br>
		Nama Lengkap Anggota Tim #2 <br>
		Nama Lengkap Anggota Tim #3 <br>
		Nama Lengkap Dosen Pembimbing <br><br>
		Kartu Tanda Mahasiswa #1 <br>
		Kartu Tanda Mahasiswa #2 <br>
		Kartu Tanda Mahasiswa #3 <br>
		Bukti Pembayaran <br>
	</div>
	<div class="left" style="width:50%"> 
		: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['team_name'];?>
		<br>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['university_name'];?> 
		<br>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['university_address'];?> 
		<br>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['leader_name']?> 
		<br>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['leader_phone']?> 
		<br>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['leader_email']?> 
		<br>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['second_name']?> 
		<br>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['third_name']?> 
		<br>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['supervisor_name']?> 
		<br><br>
		<?php
			if (ISSET($kartu))
			{
				foreach ($kartu as $temp)
				{
					echo ": &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='".$temp->contestant_image_url."' style='width:200px;' /><br>";
				}
			}
		?>
		: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<?php
			if (ISSET($bukti))
			{
				foreach ($bukti as $temp)
				{
					echo "<img src='".$temp->contestant_image_url."' style='width:200px;' />";
				}
			}
		?>
	</div>
	<div style="clear:both">
	</div>
	<div style="margin-top:20px;">
		<a class="link_blue" href = "<?php echo base_url("contestant/edit_data_spc");?>">Edit Data</a>
		<a style="margin-left:20px;" class="link_blue" href = "<?php echo base_url("contestant/upload_data_universitas");?>">Upload Data</a>
		<a style="margin-left:20px;" class="link_blue" href = "<?php echo base_url("contestant/change_password");?>">Ubah Password</a>
	</div>
	<br>	
</div>
<script>
	$('#home_navigation').removeClass('current_menu');
	$('#senior_navigation').removeClass('current_menu');
	$('#junior_navigation').removeClass('current_menu');
	$('#gallery_navigation').removeClass('current_menu');
	$('#faq_navigation').removeClass('current_menu');
	$('#edit_data_navigation').addClass('current_menu');
</script>