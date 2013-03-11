<html>
<head><title>ShoutzLive Client upload test results</title></head>
<body>

<?php
function GetFiles($ContentProfileTag) 
{
	$serverName = "198.61.140.158";
	$userName = 'Hermes';
	$userPassword = 'M3ss3ng3r';
	$dbName = "Hades";
	 
	$conn_array = array (
			"UID" => $userName, 
			"PWD" => $userPassword, 
			"Database" => $dbName,
			"Encrypt" => 1,
			"TrustServerCertificate" => 1) ;

	$conn = sqlsrv_connect($serverName , $conn_array);

	if($conn === false)
	{
	 echo '<script type="text/javascript">alert("Failed to connect...");</script>';
	 //	return 0;
	}
	$sql = "SELECT TOP 1 cd.HandheldStatus AS VideoStatus, cd.IphoneFile AS DrawingVideoIphone, cd.AndroidFile AS DrawingVideoAndroid";
	$sql .= " FROM dbo.Profiles p INNER JOIN dbo.ContentProfiles cp ON p.ProfileID = cp.ProfileID";
	$sql .= " INNER JOIN dbo.ContentDetails cd ON cp.ContentProfileID = cd.ContentProfileID";
	$sql .= " WHERE p.ProfileTag = ? ORDER BY cd.DTUploaded DESC;";
	$stmt = sqlsrv_query($conn,$sql,array(&$ContentProfileTag));
   
	if ($stmt === false)
	{
		 die( print_r( sqlsrv_errors(), true));
	}
	else
	{
		while ($row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {
			if ($row[0] == 3)
			{
				echo '<p><a target="_new" href="' . $row[1]. '">Test iPhone</a><br /><br /><a target="_new" href="' . $row[2]. '">Test Android</a></p>';
			}
		}	
	}
}

GetFiles('PB_Main');
?>

</body>
</html>