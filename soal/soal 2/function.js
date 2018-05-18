function hasAccess($name,$a){
	for (var i = $input.length - 1; i >= 0; i--) {	
		$type = $input[i].getAttribute("name");
		$vali = $input[i].value;

		if ($name == "email" && $vali != " ") {
			$after = $vali.split("@");
			$after.shift();
			$after = $after.join();
			$val = $after;
		}else{
			$val = $vali;
		}
		if ($type == $name) {
			if ($val != " ") {
				return ($val.match($a)) ? false : true ;
			}else{
				return true;
			}
		}

	}
}