<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
        <!-- Nous chargeons les fichiers CDN de Leaflet. Le CSS AVANT le JS -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
            crossorigin="" />
        <link rel="stylesheet" type="text/css" href="ui/css/style.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="flipclock/css/flipclock.css">
        
        <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
            crossorigin=""></script>

           
        <script type="text/javascript" src="ui/js/jquery.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>

		<script type="text/javascript" src="flipclock/js/flipclock.js"></script>
		<script type="text/javascript">
			// On initialise la latitude et la longitude d antananarivo (centre de la carte)
			var lat = -19.863743;
			var lng = 47.033635;
			var macarte = null;
			var vehicules = {
	"cotisse 31": { "lat": -20.081502, "lng": 47.063427 },
	"cotisse 11f": { "lat": -15.721659, "lng": 46.325120 },
	"cotisse 35": { "lat": -18.892687, "lng": 47.529324 },
	"vip 01": { "lat": -18.951776, "lng": 48.417591 }
}
			// Fonction d'initialisation de la carte

			function initMap() {
				// Créer l'objet "macarte" et l'insèrer dans l'élément HTML qui a l'ID "map"
                macarte = L.map('map').setView([lat, lng], 5.5);
                // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
                L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
                    // Il est toujours bien de laisser le lien vers la source des données
                    attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
                    minZoom: 1,
                    maxZoom: 20
                }).addTo(macarte);
                for (vehicule in vehicules) {
		var marker = L.marker([vehicules[vehicule].lat, vehicules[vehicule].lng]).addTo(macarte);
		marker.bindPopup(vehicule);
	}
            }
			window.onload = function(){
				// Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
				initMap(); 
			};
		</script>
		<style type="text/css">
			#map{ /* la carte DOIT avoir une hauteur sinon elle n'apparaît pas */
				height:600px;
			}
		</style>
		<title>TABLEAU D'AFFICHAGE ARRIVEE</title>
	</head>
	<body>
		<div class="row head_log" >
 		<div class="col-lg-3"> <img id="logo_cotisse" src="img/logo.png"></div>
 		<div class="col-lg-4"> <p class="depart">ARRIVEE DU <?php echo date("d/m/Y")?></p></div>
 		<div class="col-lg-5">
 			<div id="clock" class="clock"></div>
 		</div>

 	
	</div>

	<div class="pcarousel">

	<div class="pcarousel-slides">

	    <div class="slide" id="slide-1">
	
	<div class="row "> 

		<div class="col-lg-2 row_iti ">DESTINATIONS</div>
		<div class="col-lg-9 dispo">NOMBRES DE PLACES DISPONIBLES</div>
		<div class="col-lg-1"></div>
	</div>
	<div class="row">
		
	<div class="col-lg-2 row_dest">

		
		<div class="row_iti_content">TAMATAVE</div>


		<div class="row_iti_content">MAHAJANGA </div>

		<div class="row_iti_content">FIANARANTSOA </div>

		<div class="row_iti_content_2">MORONDAVA	</div>

	</div>




	<div class="col-lg-4">
		<fieldset class="field">
				<legend class="lite"> LITE </legend>
				<p>20 000 ar</p>
				<table class="table table-sm table-dark">
								
									<thead>
									    <tr>
									      <th scope="col">7h</th>
									      <th scope="col">8h</th>
									      <th scope="col">9h</th>
									      <th scope="col">10h</th>
									      <th scope="col">12h</th>
									      <th scope="col">19h</th>
									      <th scope="col">20h30</th>
									    </tr>
									</thead>
									<tbody>
										<td>X</td>
										<td id="1" >1</td>
										<td>10</td>
										<td>6</td>
										<td>15</td>
										<td>15</td>
										<td>10</td>
									</tbody>
									

								</table>
				<div class="row">
					
				</div>
				<p>34 000 ar</p>
				<table class="table table-sm table-dark">
								
									<thead>
									    <tr>
									      <th scope="col">7h</th>
									      <th scope="col">8h30</th>
									     
									      <th scope="col">16h</th>
									      <th scope="col">18h30</th>
									    
									    </tr>
									</thead>
										<td>30</td>
										<td>25</td>
										<td id="4">4</td>
										<td>36</td>
										
									

								</table>
			<p>25 000 ar </p>

			<table class="table table-sm table-dark">
								
									<thead>
									    <tr>
									      <th scope="col">7h</th>
									      
									      <th scope="col">9h</th>
									      
									      <th scope="col">20h</th>
									    </tr>
									</thead>
										<td id="3">3</td>
										
										<td>X</td>
										
										<td>X</td>

									

								</table>

				<div class="row">
					 
				</div>
				<p>45 000 ar</p>
				<table class="table table-sm table-dark">
								
									<thead>
									    <tr>
									      <th scope="col">7h</th>
									  		      
									    </tr>

									</thead>
									<td id="5">4</td>

								</table>
		</fieldset>
	</div>
	<div class="col-lg-3">
		<fieldset class="field">
				<legend class="prem"> PREMIUM </legend>
				<p>36 000 ar</p>
			<table class="table table-sm table-dark">
								
									<thead>
									    <tr>
									      <th scope="col">7h</th>
									      <th scope="col">9h</th>
									      <th scope="col">20h30</th>
									    </tr>
									</thead>
										<td>32</td>
										<td>32</td>
										<td>32</td>
									

								</table>
				<div class="row">
					 
				</div>
				<p>60 000 ar</p>
				<table class="table table-sm table-dark">
								
									<thead>
									    <tr>
									      <th scope="col">7h</th>
									      <th scope="col">8h30</th>
									     
									      <th scope="col">16h</th>
									      <th scope="col">18h30</th>
									    
									    </tr>
									</thead>
										<td>30</td>
										<td>25</td>
										<td id="4">4</td>
										<td>36</td>
										
									

								</table>

				
					<p>42 000 ar</p>
				<table class="table table-sm table-dark">
								
									<thead>
									    <tr>
									      <th scope="col">8H</th>
									    </tr>
									    <td>19</td>
									</thead>

									

								</table>


				
		
		</fieldset>
	</div>
	<div class="col-lg-2">
		<fieldset class="field">
				<legend class="vip"> VIP </legend>
				<p>60 000 ar</p>
				<table class="table table-sm table-dark">
								
									<thead>
									    <tr>
									      <th scope="col">20h30</th>
									    </tr>
									</thead>
									<tbody>
										
										<td id="1" >1</td>
									</tbody>
									

								</table>
				<div class="row">
					 
				</div>
				<p>98 000 ar</p>
				<table class="table table-sm table-dark">
								
									<thead>
									    <tr>
									      <th scope="col">8h</th>
									      							    
									    </tr>
									</thead>
										
										<td id="4">4</td>
										
								</table>
		</fieldset>
	</div>
	</div>
	
	<div class="row "> 
		<div class="col-lg-2 row_iti ">DESTINATIONS</div>
		<div class="col-lg-9 dispo">NOMBRES DE PLACES DISPONIBLES</div>
		<div class="col-lg-1"></div>
	</div>

	</div>

		<div class="slide" id="slide-2">

		<div class="row t_arrivee">
		
			<div class="col-lg-4" id="map">
				<!-- Ici s'affichera la carte -->
			</div>

			<div class="col-lg-1  "> </div>
		<div class="col-lg-7 arriv  ">
			
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
	</div>
</div>

		</div>


		</div>



<script type="text/javascript" src="parallax_carousel/jquery-parallax-carousel.js"></script>

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