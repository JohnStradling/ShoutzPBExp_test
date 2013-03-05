<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to the Powerball Experience on the Shoutz Mobile App</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="Watch live Powerball drawings on Shoutz mobile app" />
        <meta name="keywords" content="shoutz, powerball, lottery, winner, lotto, game, prizes, mobile, win, play and win, contest, las vegas, iphone, android, experience," />
        <meta name="author" content="Shoutz" />
        <link rel="shortcut icon" href="favicon.png" />        

        <link type="text/css" rel="stylesheet" href="css/reset.css"/>
        <link type="text/css" rel="stylesheet" href="css/common.css"/>
        <link type="text/css" rel="stylesheet" href="css/nivo-slider.css"/>
        <link type="text/css" rel="stylesheet" href="css/facebox.css"/>
        <link href='http://fonts.googleapis.com/css?family=Armata|Pacifico' rel='stylesheet' type='text/css'>

        <script type="text/javascript" src="js/jquery.min.js"></script>
        <!--[if lt IE 10]>
            <script type="text/javascript" src="js/PIE.js"></script>
        <![endif]-->  
        <script type="text/javascript" src="php/scriptsData.php"></script>
        <script type="text/javascript" src="js/jquery.dateFormat-1.0.js"></script>
        <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
        <script type="text/javascript" src="js/jquery.tweets.js"></script>
        <script type="text/javascript" src="js/jquery.myHint.js"></script>
        <script type="text/javascript" src="js/jquery.vticker-min.js"></script>
        <script type="text/javascript" src="js/jquery.facebox.js"></script>                

        <!-- Main script -->
        <script type="text/javascript" src="js/main.js"></script>                       
    </head>
    <body>    
        <table class="doc-loader">
            <tr>
                <td>
                    <img src="images/ajax-document-loader.gif" alt="Loading..." />
                </td>
            </tr>
        </table>
        <div class="header">
            <div class="center-content">
                <div class="phone-hand">
                    <ul id="slider" class="theme-default">
                        <li>
                            <img src="images/slide_01.jpg" />
                        </li>
                        <li>
                            <img src="images/slide_02.jpg" />
                        </li>
                        <li>
                            <img src="images/slide_03.jpg" />
                        </li>
                    </ul>
                </div>
                <div class="info">
                    <h1>&nbsp;</h1>
                    <h1> <img src="images/pb.png" /></h1>
                    <p>
                        Download <strong>Shoutz™</strong> app Today <br />
                         enjoy the Mobile Powerball Experience on your mobile 
                         <br /> Dial <strong> **SHOUTZ Now! </strong>
                    </p>
                    <p>&nbsp;</p>
                    <table width="200" border="0">
                      <tr>
                        <td height="120"><br>  <a href="https://itunes.apple.com/us/app/shoutz/id464309202?mt=8" class="link-button"> <img src="images/apple.png"/> </a></td>
                        <td>&nbsp;</td>
                        <td><a href="https://play.google.com/store/apps/details?id=com.shoutz.shoutzapp" class="link-button"> <img src="images/android.png" alt="Download Shoutz for Android" longdesc="Download Android"></a></td>
                      </tr>
                    </table>
                    <p>&nbsp; </p>
                    
                </div>
            </div>
        </div>
        <div class="central">
            <div class="center-content">
                <div class="info">
                    <p>
<img src="images/text.png" />
                    </p>
                </div>
                <div class="subscribe">
                    <div class="left subscribe-input-holder">
                        <input type="text" id="subscribe" name="subscribe"/>  
                        <span class="info-label block align-center">
                            Want a reminder to download later? Enter your email address for a reminder.
                        </span>
                    </div>
                    <div class="right subscribe-button-holder">
                        <a href="javascript: document.forms['emailform'].submit();" class="link-button">
                            <img src="images/send_msg_button.png" class="button-image" alt="Enter Now"/>
                        </a>
                        <span id="subscribeMesage" class="info-label block align-center green-label">                            
<?php 
if (isset($_REQUEST['email']))
{
	$result = SaveEmail($_REQUEST['email']);
	if ($result == 0)
	{
		echo "Failed to connect";
	}
	if ($result == 1)
	{
		echo "Failed to save data";
	}
	if ($result == 2)
	{
		echo "Thanks, we'll remind you in a bit!";
	}
	
}
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
     //FatalError("Failed to connect...");
	 return 0;
   }

    
   $tsql = "INSERT INTO [$table] (Email) VALUES ($Email)";
   echo $tsql;
   $stmt = sqlsrv_query($conn, $tsql);
   if ($stmt === false)
   {
     //FatalError("Failed to insert data into test table: ");
	 return 1;
   }
   sqlsrv_free_stmt($stmt);

   sqlsrv_close($conn);
   return 2;
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
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="widgets">
            <div class="center-content">
                    </div>
                </div>
                <div class="clear">&nbsp;</div>
            </div>
        </div>        
        <div class="footer">        
            <div class="center-content align-center">  
                <p class="info">
                    Copyright 2013. Powered by Shoutz™. All Rights Reserved.<br />
                    Download the Mobile Powerball Experience.
                </p>
                <img class="separator" src="images/footer_separator.png" alt=""/>
                <div class="clear">&nbsp;</div>
            </div>
        </div>
        <div id="contact">
            <div class="contact">
				<form name="emailform" id="emailform" action="index.php" method="post">
                <img class="fill-the-forms" src="images/fill_the_forms.png" alt="Fill the forms bellow"/>
                <a class="closePopup" href="javascript: ClosePopupWindow();"><img src="images/close.png" alt="Close"/></a>
                <ul class="user-data">
                    <li>
                        <input type="text" class="rounded" id="name"/>
                    </li>
                    <li>
                        <input type="text" class="rounded" id="email"/>
                    </li>
                    <li>
                        <input type="text" class="rounded" id="subject"/>
                    </li>
                    <li>
                        <textarea class="rounded" id="message" cols="35" rows="6"></textarea>
                    </li>
                    <li>
                        <a href="javascript: SendMail();" class="link-button left">
                            <img src="images/send_msg_button.png" class="button-image" alt="Submit"/>
                        </a>
                        <span id="messageStatus" class="info-label block green-label right">      
                        </span>
                    </li>
                </ul>
            </div>
        </div>
        <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-37611136-4']);
  _gaq.push(['_setDomainName', 'shoutz.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

    </body>
</html>