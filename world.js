function Search(){


	document.getElementById("lookup").addEventListener("click", function(){      
  var index = document.getElementById("country").value;
  var  new_request= new XMLHttpRequest();

 new_request.onreadystatechange = function(){
      if (this.readyState == 4 && this.status == 200){
        
        document.getElementById("result").innerHTML = new_request.responseText;

      }
    }

    new_request.open("GET", "world.php?country="+index);
        new_request.send();
  });





}



function City (){


	document.getElementById("lookup2").addEventListener("click", function(){      
  var index = document.getElementById("country").value;
  var new_request = new XMLHttpRequest();


new_request.onreadystatechange = function(){
      if (this.readyState == 4 && this.status == 200){
        
        document.getElementById("result").innerHTML = new_request.responseText;

      }
    }
 new_request.open("GET", "world.php?country=" +index + "&context=cities");
  new_request.send();
  });
}