<div class="col-md-12">
	<div style="background-color: pink" class="card">
		<div class="card-header bg-info" style="background-color: teal"><?php echo $sub_judul; ?></div>
		<div class="card-body">

			<form action=" <?php echo site_url('admin/pengumuman/proses_edit'); ?>" method="post">
				
				<div class="form-group">
					<label>Judul</label>
					<input type="text" class="form-control" name="judul" value="<?=$edit_tabel->judul;?>">
					
				</div>
				<div class="form-group">
					<label>Isi</label>
					<textarea name="isi" cols="30" rows="5" class="form-control"><?=$edit_tabel->isi;?></textarea>
					
				</div>
				<div class="form-group">
					<label>Penulis</label>
					<input type="text" class="form-control" name="penulis" value="<?=$edit_tabel->penulis;?>">
					<input type="hidden" name="id_pengumuman" value="<?=$edit_tabel->id;?>">
					
				</div>
				<input type="submit" name="submit" value="Simpan" class="btn btn-success">
				<a href="<?php echo site_url('admin/pengumuman'); ?>" class="btn">Batal</a>

			</form>

			
		</div>

	</div>
</div>
