<!DOCTYPE html>
 <head>
   <title>User Profile</title>
 </head>
 <body>
   <h2> Welcome</h2>
   <a href="login">Logout</a>

 <h4>Display Records From Database Using Codeigniter</h4>
  
    
     <?php 
     if (isset($result)) {
     	foreach($result as $row){
		
	   echo "name:".$row['name']; 

 echo "email:" .$row['email'];

 echo "date:" .$row['date_time'];

     }

 }

     ?>

 

 

 </body>
</html> 