	<section class="contact" id="contact">
		<h2 class="title">Contact</h2>
		<span class="subtitle">Contact me</span>
		<div class="container">
			<div class="contact-left">
				<ul>
					<li>
						<p><span class="fa-solid fa-map-location-dot"></span> <?= $data2['alamat'] ?></p>
					</li>
					<li>
						<a href="https://api.whatsapp.com/send?phone=<?= $data2['telepon'] ?>&text=halo%20saya%20fasih" target="_blank"><span class="fa-solid fa-phone"></span><?= $data2['telepon'] ?></a>
					</li>
					<li>
						<p><span class="fa-solid fa-calendar-days"></span> <?= $data2['hari_buka'] ?></p>
					</li>
					<li>
						<p><span class="fa-solid fa-clock"></span> Jam <?= $data2['jam_buka'] ?> - <?= $data2['jam_tutup'] ?></p>
					</li>
				</ul>
			</div>
			<div class="contact-map">
				<iframe frameborder="0" style="border: 0; width: 100%; height: 100%" src="<?= $data2['kordinat'] ?>" allowfullscreen=""></iframe>
			</div>
		</div>
	</section>



	<script src="./assets/js/index.js"></script>
	</body>

	</html>