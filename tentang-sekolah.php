	<?php include 'header.php'; ?>
	
	<div class="section">
		<div class="container">
			<h3 class="text-center" style="font-size: 25px;">Tentang Ponpes</h3>
			<img src="uploads/identitas/<?= $d->foto_sekolah ?>" width="100%" class="image">
			<?= $d->tentang_sekolah ?>
		</div>
	</div>

	<?php include 'footer.php'; ?>