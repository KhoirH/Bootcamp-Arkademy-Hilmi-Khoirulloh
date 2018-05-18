//funcition
function gendrate($loop){
  	//variab;e
  	 text = "";
  	 $text = "";
  	 //gendrate
  	 possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

  	 //main
	for (var j =  1 ; j <= $loop; j++) {
	  	for (var i = 1; i < 20; i++){
	  		if (i % 5 == 0) {
				text += "-";	  			
	  		}
	  		else{
	    		text += possible.charAt(Math.floor(Math.random() * possible.length));
	  		}
	  	}
	  	$text += j+" . "+text+"<br>";
		text = "";
	}

  	return $text;
}