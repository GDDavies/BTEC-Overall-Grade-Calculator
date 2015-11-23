$(document).ready(function() {
    
    $(".sectors").change(function() {
    var value document.getElementById("sectorSelector");
    var sector = document.sectorSelect.sectorSelector.value;
        
    if(sector == "Art & Design"){
     
     	var tables = document.getElementsByTagName("TABLE");
     		for (var i=tables.length-1; i>=0;i-=1)
     			if (tables[i]) tables[i].parentNode.removeChild(tables[i]);
     
	     $(addTable()).toggle("fast"); 

	 }else{
		 
     	var tables = document.getElementsByTagName("TABLE");
     		for (var i=tables.length-1; i>=0;i-=1)
     			if (tables[i]) tables[i].parentNode.removeChild(tables[i]);
	
	 }    
    window.alert(sector)    
    });
});
