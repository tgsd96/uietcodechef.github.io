function validatedForm() 
{
    var x = document.forms["regform"]["username"].value;
    if (x == null || x == "") 
    {
        alert("Name must be filled out");
        
		return false;
	}
	else 
	{
		var letters = /^[A-Za-z]+$/;  
   		if(!x.match(letters))  
        {  
     	alert("Only alphabets");
        return false;
     	}
     	//if(!x.unique)
     	//{
     	//	alert('Email id already used');
     	//	return false;
     	//}
    } 

 	var y = document.forms["regform"]["email"].value;
 	if (y == null || y == "") 
    {
        alert("Email must be filled out");
		return false;
	}
	else 
	{
		var mail=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; 
   		if(!y.match(mail))  
        {  
     	alert("Enter correct email id");
        return false;
     	}
     	
 	}
 	if( document.regform.branch.value == "-1" )
         {
            alert( "Please provide your branch!" );
            return false;
         } 

    if( document.regform.year.value == "-1" )
         {
            alert( "Please provide your year!" );
            return false;
         }     
    var z = document.forms["regform"]["query"].value;
    if (z == null || z == "") 
    {
        alert("query must be filled out");
		return false;
	}    

 }	