<header>
	<h2>Peliculas más vistas</h2>
</header>
<div class="catalogo">
	<?php 
		while ($pelicula = $peliculas->fetch(PDO::FETCH_LAZY)) {
			
			include "view/pelicula.view.php";

		} 
	?>
</div>