<!DOCTYPE html>

<html>
<head>
	<title>PARCOURIR JSON</title>
	<meta charset="UTF-8">
	<script type="text/javascript" src="ui/js/jquery.js"></script>
</head>
<body>

</body>
<script type="text/javascript">

	 		/*function recup_adrress(){

			$.ajax({
                url:"https://gsh4.net/id29/api/api.php?api=user&ver=1.0&key=5CBF35712D9E13F43B89416A93B623C9&cmd=OBJECT_GET_LOCATIONS,*",
                method:'GET',
                 success:function (data)
                {
               
                                    
                }
       		 });
	};
	

	var geocode=JSON.parse(recup_adrress());
//var result =JSON.parse(geocode);
console.log(result);

	//for(vehicule in vehicules);
	//alert(geocode.length);
	for (var i = 0; i < geocode.length; i++){

	}
*/
/*var requestURL="https://gsh4.net/id29/api/api.php?api=user&ver=1.0&key=5CBF35712D9E13F43B89416A93B623C9&cmd=OBJECT_GET_LOCATIONS,*";

var request = new XMLHttpRequest();
request.open('GET', requestURL);
request.responseType = 'json';
request.send();
request.onload = function() {
  var geoloc = request.response;

alert('geoloc.length');
}
*/

</script>
<script>
function jsoncallback(data){
 
};
$(document).ready(function() {
 var url='http://gsh4.net/id29/api/api.php?api=user&ver=1.0&key=5CBF35712D9E13F43B89416A93B623C9&cmd=OBJECT_GET_LOCATIONS,*&jsoncallback=?';
 //var essai='{"864893030362993":{"name":"Cotisse-37","dt_server":"2019-02-25 19:21:14","dt_tracker":"2019-02-25 19:21:12","lat":"-18.892645","lng":"47.529462","altitude":"0","angle":"0","speed":"0","params":{"alarm":"ac alarm","acc":"0"},"loc_valid":"1"}}';
 var geoloc=$.getJSON(url);

  
  var json= JSON.parse(geoloc);
});




</script>
</html>