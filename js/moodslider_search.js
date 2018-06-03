


function mouseUp(t){  
          
            var xhttp;
            console.log(t.id);
            console.log(t.value);
           
            xhttp = new XMLHttpRequest(); //object instantiation
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("cards").innerHTML = this.responseText;
                  
                }
            };
        xhttp.open("GET", "model/moodslider_search.php?key="+t.id+"&value="+t.value, true);
            xhttp.send();   
        
}