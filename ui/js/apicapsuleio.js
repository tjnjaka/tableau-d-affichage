function place_dispo(){

		var iti="TNR_TMM";
		 $.ajax({
		 	
 
    
             url:"https://api.intrans.io/online/trip/"+iti+"_2018-10-31/searchV2/1",
             method:'POST',
             success:function (data)
             {
                 
                 
             }
         });

		}
	function MJN() {
		var iti="TNR_MJN";
		 $.ajax({
             url:"https://api.intrans.io/online/trip/"+iti+"_2018-10-31/searchV2/1",
             method:'GET',
             success:function (data)
             {
                 
                 
             }
         }

		);
	};
	//function WFI();
	//function MOQ();


	window.onload=place_dispo;



