
( function( $ ) {
	$("#searchsubmit").click(function(e){
     	 var textval=$("#s").val();	
         if((textval=="") || (textval==null))
          {     
                e.preventDefault();
		alert("Please Enter keyword");
          }
	});
} )( jQuery );
