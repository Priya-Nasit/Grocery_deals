<?php
	$server_name="localhost";
	$username="root";
	$password="";
	$database="grocery_project";

	$con=mysqli_connect($server_name,$username,$password,$database);
	if(!$con)
	{
		mysqli_error(); //or  die("Connection error: " . mysqli_connect_errno());
		//die("Connection error: " . mysqli_connect_error());
	}

    /*if (!$con)
    {
     die("mysqli_init failed");
    }*/
  
   /*mysqli_ssl_set($con,"key.pem","cert.pem","cacert.pem",NULL,NULL); 
     Note: This function must be called before mysqli_real_connect().*/

   /*
   mysqli_options($con,MYSQLI_READ_DEFAULT_FILE,"myfile.cnf");
	//The mysqli_options() function should be called after mysqli_init() and before mysqli_real_connect()
   */


	/*if (!mysqli_real_connect($con,$username,$password,$database,"project3rdsem")
    {
      die("Connect Error: " . mysqli_connect_error());
    }*/

    //echo "System status: ". mysqli_stat($con); 


   /*  Check if server is alive
       if (mysqli_ping($con))
         {
           echo "Connection is ok!";
         }
       else
         {
           echo "Error: ". mysqli_error($con);
         }*/
	
     //mysqli_set_charset($con,"utf8"); // Change character set to utf8

     /*echo $t_id=mysqli_thread_id($con);//get thread id
     echo"<br>";
     echo $var=mysqli_kill($con,$t_id); //kill connection*/

     //mysqli_thread_safe();//client library is compiled as thread-safe.

	//echo mysqli_get_server_version($con);//laptop version

     //echo mysqli_get_server_info($con); //database
      
     //echo mysqli_get_proto_info($con); //window version
  
     //echo mysqli_get_host_info($con); //protocol info   
 
     //echo mysqli_get_client_version();

      //print_r(mysqli_get_client_stats());
     //print_r(mysqli_get_connection_stats($con));

    //echo mysqli_get_client_info($con);
 
	//echo $charset=var_dump(mysqli_get_charset($con));

	/*$charset=mysqli_character_set_name($con);
     echo "Default character set is: " . $charset;*/
                           
	//mysqli_autocommit($con, TRUE); //autocommit true

	//mysqli_change_user($con,$username,$password,"project3rdsem" ); //change databse

?>