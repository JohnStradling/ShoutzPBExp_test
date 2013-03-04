
<?php

function SaveEmail($Email) 
{
   $serverName = "tcp:e4ystu4bed.database.windows.net,1433";
   $userName = 'Hermes@e4ystu4bed';
   $userPassword = 'M3ss3ng3r';
   $dbName = "powerballexp";
   $table = "Stage.EmailCapture";
  
   $connectionInfo = array("Database"=>$dbName, "UID"=>$userName, "PWD"=>$userPassword, "MultipleActiveResultSets"=>true);

   sqlsrv_configure('WarningsReturnAsErrors', 0);
   $conn = sqlsrv_connect( $serverName, $connectionInfo);
   if($conn === false)
   {
     FatalError("Failed to connect...");
	 return 0;
   }

    
   $tsql = "INSERT INTO [$table] (Email) VALUES ($Email)";
   $stmt = sqlsrv_query($conn, $tsql);
   if ($stmt === false)
   {
     FatalError("Failed to insert data into test table: ");
	 return 0;
   }
   sqlsrv_free_stmt($stmt);

   sqlsrv_close($conn);
   return 1;
}

function FatalError($errorMsg)
{
    Handle_Errors();
}


function Handle_Errors()
{
    $errors = sqlsrv_errors(SQLSRV_ERR_ERRORS);
    $count = count($errors);
    if($count == 0)
    {
       $errors = sqlsrv_errors(SQLSRV_ERR_ALL);
       $count = count($errors);
    }
    if($count > 0)
    {
      for($i = 0; $i < $count; $i++)
      {
         echo $errors[$i]['message']."\n";
      }
    }
}

?>