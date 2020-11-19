function  Search(){
	
	var query=document.getElementById("country").value;
	var newrequest = new XMLRequest();

	newrequest.onreadystatechange= function (){


		if(this.readyState == 4 && this.status == 200){

			document.getElementById("result").innerHTML = this.responseText;
			alert(this.responseText.replace(/<\/?[^>]+(>|$)/g,""));

		}
	};

	(document.getElementById('checkPoint').checked)
	{
		var url="world.php?all=true";

	}

	else {

		var url = "world.php?country="+query;

	}
	newrequest.open("Get",url,true);
	newrequest.send("");



}