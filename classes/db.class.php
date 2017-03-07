<?php

class dbconn{
	  
private static $instance = NULL;
	   
	protected function __construct(){
	//protected so only class method can create can create instance
	}
	
	static public function getInstance(){
      if (self::$instance === NULL){
         self::$instance = new dbconn();
		 }else{
		 echo "instance already existing";
		 }
      return self::$instance;
   }
	
	//public function get_query_result(sql){
	//}
	
}

echo "test";
$dbconn = dbconn::getInstance();

?>