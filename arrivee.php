<?php header('Origin: http://www.foo.com'); ?>
<!DOCTYPE html>

<html>
<head>
	<title>TABLEAU D'AFFICHAGE ARRIVEE</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="ui/css/style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="flipclock/css/flipclock.css">
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
            crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
            crossorigin=""></script>

	<script type="text/javascript" src="ui/js/apicapsuleio.js"></script>

	<script type="text/javascript">
			// On initialise la latitude et la longitude de Paris (centre de la carte)
			var lat = 47.3724268;
			var lon = -18.8873012;
			var macarte = null;
			// Fonction d'initialisation de la carte
			function initMap() {
				// Créer l'objet "macarte" et l'insèrer dans l'élément HTML qui a l'ID "map"
                macarte = L.map('map').setView([lat, lon], 11);
                // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
                L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
                    // Il est toujours bien de laisser le lien vers la source des données
                    attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
                    minZoom: 1,
                    maxZoom: 20
                }).addTo(macarte);
            }
			window.onload = function(){
				// Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
				initMap(); 
			};
		</script>
		<style type="text/css">
			#map{ /* la carte DOIT avoir une hauteur sinon elle n'apparaît pas */
				height:400px;
			}
		</style>

	
</head>
<body onload="">


 	<div class="row head_log" >
 		<div class="col-lg-3"> <img id="logo_cotisse" src="img/logo.png"></div>
 		<div class="col-lg-4"> <p class="depart">ARRIVEE DU <?php echo date("d/m/Y")?></p></div>
 		<div class="col-lg-5">
 			<div id="clock" class="clock"></div>
 		</div>

 	
	</div>
<div class="content">
	
	<div class="row "> 

		<div class="col-lg-8 row_iti ">
			
								<table class="table table-sm table-dark table-striped">
								
									<thead class="thead_arrivee">
									    <tr>
									      <th scope="col">PROVENANCE</th>
									      <th scope="col">CLASSE</th>
									      <th scope="col">IMM</th>
									      <th scope="col">HEURE PREVU</th>
									      <th scope="col">ETAT</th>
									      
									    </tr>
									</thead>
									<tbody>
										<tr>	
										<td>MAHAJANGA</td>
										<td >VIP</td>
										<td>7127 TBD</td>
										<td>21:00</td>
										<td id="1" >RETARD DE 30 MN</td>
										</tr>

										<tr>	
										<td>MAHAJANGA</td>
										<td >VIP</td>
										<td>7200 TBD</td>
										<td>21:00</td>
										<td id="1" > A L'HEURE</td>
										</tr>

										<tr>	
										<td>MAHAJANGA</td>
										<td >VIP</td>
										<td>7536 TBD</td>
										<td>21:00</td>
										<td id="1" >AVANCE DE 30 MN</td>
										</tr>

										<tr>	
										<td>FIANARANTSOA</td>
										<td >LITE</td>
										<td>1826 TBD</td>
										<td>21:00</td>
										<td id="1" >RETARD DE 30 MN</td>
										</tr>

										<tr>	
										<td>FIANARANTSOA</td>
										<td >LITE</td>
										<td>1848 TBD</td>
										<td>21:00</td>
										<td id="1" >RETARD DE 30 MN</td>
										</tr>

										<tr>	
										<td>TOAMASINA</td>
										<td >VIP</td>
										<td>1826 TBD</td>
										<td>21:00</td>
										<td id="1" >RETARD DE 30 MN</td>
										</tr>

										<tr>	
										<td>TOAMASINA</td>
										<td >LITE</td>
										<td>1826 TBD</td>
										<td>21:00</td>
										<td id="1" >RETARD DE 30 MN</td>
										</tr>

										<tr>	
										<td>TOAMASINA</td>
										<td >VIP</td>
										<td>1826 TBD</td>
										<td>21:00</td>
										<td id="1" >RETARD DE 30 MN</td>
										</tr>

										<tr>	
										<td>TOAMASINA</td>
										<td >VIP</td>
										<td>1826 TBD</td>
										<td>21:00</td>
										<td id="1" >RETARD DE 30 MN</td>
										</tr>

										<tr>	
										<td>TOAMASINA</td>
										<td >VIP</td>
										<td>1826 TBD</td>
										<td>21:00</td>
										<td id="1" >RETARD DE 30 MN</td>
										</tr>

										<tr>	
										<td>TOAMASINA</td>
										<td >VIP</td>
										<td>1826 TBD</td>
										<td>21:00</td>
										<td id="1" >RETARD DE 30 MN</td>
										</tr>

										<tr>	
										<td>TOAMASINA</td>
										<td >VIP</td>
										<td>1826 TBD</td>
										<td>21:00</td>
										<td id="1" >RETARD DE 30 MN</td>
										</tr>
										
									</tbody>
									

								</table>




		</div>
		<div id="map" class="col-lg-3 dispo google_map"> </div>
		<div class="col-lg-1"></div>
	</div>
	

</div>




	<script type="text/javascript" src="ui/js/jquery.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="flipclock/js/flipclock.js"></script>


<script type="text/javascript">
	var clock = $('.clock').FlipClock({
		clockFace: 'TwentyFourHourClock'
	});
</script>

<script type="text/javascript">
		function run(interval, frames) {
    var int = 1;
    
    function func() {
        document.body.id = "b"+int;
        int++;
        if(int === frames) { int = 1; }
    }
    
    var swap = window.setInterval(func, interval);
}

run(15000,3); //milliseconds, frames

</script>

</body>
</html>