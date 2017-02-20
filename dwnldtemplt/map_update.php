<?php
   // Connect and select a database
   mysql_connect("localhost","root","");
   mysql_select_db("rtvt_database");

   // Run a query
   $result = mysql_query("SELECT * FROM location WHERE emd_num=111");
   $data = mysql_fetch_array($result);

   $myObj = new stdClass();
   $myObj->id        = $data["id"];
   $myObj->emd_num   = $data["emd_num"];
   $myObj->latitude  = $data["latitude"];
   $myObj->longitude = $data["longitude"];

   $myJSON = json_encode($myObj);
   echo $myJSON;

   mysql_free_result($result);
	mysql_close();

?>