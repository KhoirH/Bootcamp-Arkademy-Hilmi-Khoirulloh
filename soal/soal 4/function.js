	//parent Function
	function shoping(unused , money){
		this.money = money ;
		this.unused = unused ;
		document.getElementById("money").innerHTML = money;
		document.getElementById("unused").innerHTML = unused;
	}

	// rest
	shoping.prototype.rest = function($points) {
		text = [];
		rest = this.money - this.unused;
		//rest_money
		name_money = ["se","dua " ,"tiga" , "empat" , "lima" , "enam" , "tujuh" , "delapan" , "sembilan" ];
		//rest_koin
		name_koin = ["satu ","dua " ,"tiga" , "empat" , "lima" , "enam" , "tujuh" , "delapan" , "sembilan" ];
		
		//variable
		$provide = [];
		$provide_obj = {};

		//sort 
		$points = $points.sort(function(a, b){return a - b});
		//rest
		if(rest >  0) {
			for (var i = $points.length - 1; i >= 0; i--) {
				if (rest >= 0) {
					if (rest - $points[i] >= 0) {
						$provide.push($points[i]);
						rest = rest - $points[i];
						i = $points.length - 1;
					}
				}
			}
			$provide.push(rest);
		}

		//change for get name
		for (var i = $provide.length - 1; i >= 0 ; i--) {
			if (Boolean($provide_obj[$provide[i]])){
				$provide_obj[$provide[i]] += 1;
			}else{
				$provide_obj[$provide[i]] = 1;
			}
		}
		//delete object = 0;
		if(Boolean($provide_obj[0])){
			delete $provide_obj[0];
		}

		// added text according to the data
		for ($key in $provide_obj) {
			
			if( $key > 500){
				text.push("- "+name_money[$provide_obj[$key]-1]+"lembar "+$key+"<br>");
			}else{
				if ($key == 500) {
					text.push("- "+name_koin[$provide_obj[$key]-1]+"koin "+$key+"<br>");
				}else{
					text.push("- sisa uang "+$key+"<br>");
				}
			}
		}
		return text.reverse().join("");	
	};
