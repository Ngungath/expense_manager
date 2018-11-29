<?php
/**
 * 
 */
class Database
{
	$hostName='localhost';
	$database ='danny';
	$databaseUserName = 'root' ;
	$password ='';
	$pdo ;
	
	function __construct(argument)
	{
		$this->pdo = null;
		try {

			$this->pdo = new PDO("mysql:host=$this->hostName;dbname=$this->database",$this->databaseUserName,$this->password);
			$this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		} catch (PDOException $e) {

			echo "Error".$e->getMessage;
			
		}
		
	}

	public function fetchAll($query){

		$stmt = $this->pdo->prepare($query);
		 $stmt->execute();
		 $rows = $stmt->rowCount();

		 if ($rows > 0) {
		 	return fetchAll();
		 }else{
		 	return -1;
		 }


	}

	public function fetchOne($query,$parameter){

	}
}
