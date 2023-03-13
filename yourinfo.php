<?php  
	
	$numbers=array();
	foreach( explode(',',$_POST["phone_number"]) as $phone){
		array_push($numbers, 
			[
		    'destination' => htmlspecialchars($phone),
		    'msgid' => 101
		]);
		
	};

	$messagedata = [
        'username' => $_POST["username"],
        'password' => $_POST["password"],
        'senderid' => $_POST["senderid"],
        'message' => $_POST["message"],
        'service' => 'SMS',
        'smstype' => 'text',
        'destinations' => $numbers
    ];
    
    $curl = curl_init();
 
    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://frog.wigal.com.gh/api/v2/sendmsg",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($messagedata),
        CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json"
        ),
    ));
    
    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    $response = json_decode($response);
    if(!$err || $err=="") {
        if($response->status == 'ACCEPTED'){
            echo "message sent succesfully"; 
        }else{
            echo "message could not be sent";
        }
    }else {
        echo "message could not be sent";
    }

?>
<html>

<body>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="CSS/sms.css">

		<title>User Info</title>
	</head>
	<div class="backend">
		Your Username <?php echo $_POST["username"]; ?><br>
		Your Password is: <?php echo $_POST["password"]; ?> <br>
		Your Phone Number(s) is: <?php echo $_POST["phone_number"]; ?> <br>
		Your messages: <?php echo $_POST["message"]; ?>
	</div>
	
</body>

</html>

