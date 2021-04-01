
<?php 
	function clientMail(array $para){
		
	$to     = $para['apemail'];
    
    $subject = 'Astrology Consultation Appointment Confirmation with Astro Guru G';
    
    $name = $para['apname'];
    $email = $to;

    $orgDate = $para['apdate'];
    $newDate = date("d-m-Y", strtotime($orgDate));  

    $dob = $newDate;

    $time2 = date("g:i a", strtotime($para['aptime']));

    $tob = $time2;
    $pob = $para['apcity']." ".$para['apstate']." ".$para['apcountry'];

    $orgDate2 = $para['apdate2'];
    $newDate2 = date("d-m-Y", strtotime($orgDate2));

    $time = date("g:i a", strtotime($para['aptime2']));

    $appointmentTime = $$time;
    $appointmentDate = $newDate2;

    $serviceType = "None";
    $Paid = "None";

    $contact = $para['apcontact'];

    if ($para['appackage']==101) {
    	$serviceType = "Vedic Astrology Consultation";
    	$Paid = "$ 199";
    }else if ($para['appackage']==102) {
    	$serviceType = "Vedic Vastu Consultation";
    	$Paid = "$ 399";
    }else if ($para['appackage']==103) {
    	$serviceType = "Match Making";
    	$Paid = "$ 199";
    }
    
	    $htmlContent = '
	    <h3>Dear '.$name.'</h3>'.'<h3>Your astrology consultation appointment have been conferment for Date “'.$appointmentDate.'” and time '.$appointmentTime.' </h3>'.'<h4>Details you have provided: </h4><hr/>'.'<table cellspacing="0" style="width: 300px; height: 200px;">

	        <tr>
	            <th>Name:</th><td>'.$name.'</td>
	        </tr>
	        <tr>
	            <th>Date Of Birth:</th><td>'.$dob.'</td>
	        </tr>
	        <tr>
	            <th>Time of Birth:</th><td>'.$tob.'</td>
	        </tr>
	        <tr>
	            <th>Place of birth:</th><td>'.$pob.'</td>
	        </tr>
	        <tr style="background-color: #e0e0e0;">
	            <th>Your selected Service:</th><td>'.$serviceType.'</td>
	        </tr>
	        <tr style="background-color: #e0e0e0;">
	            <th>You Paid:</th><td>'.$Paid.'</td>
	        </tr>
	    </table> 
	    <h2 align="justify">You will be receiving phone call at your provided number “'.$contact.'”
	from our sage astrologer for the consultation. </h2>
	<h2>Have A Nice Day!</h2><h2>Regards</h2><h3>Team Astro Guru G</h3>';

	    $headers = "MIME-Version: 1.0" . "\r\n";
	    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	    
	    $headers .= 'From: investment@salonhome.com' . "\r\n";
	    
	    if(mail($to,$subject,$htmlContent,$headers)){
	        $status = 'ok';
	    }else{
	        $status = 'err';
	    }
	    // Output status
	    // echo $status;

	}

	function adminMail(array $para){
		$to     = "sindhishokro786@gmail.com";
    
    $subject = 'Appointment request by customer';
    
    $name = $para['apname'];
    $email = $to;

    $customerEmail = $para['apemail'];

    $orgDate = $para['apdate'];
    $newDate = date("d-m-Y", strtotime($orgDate));

    $dob = $newDate;

    $time3 = date("g:i a", strtotime($para['aptime']));

    $tob = $time3;
    $pob = $para['apcity']." ".$para['apstate']." ".$para['apcountry'];

    $orgDate2 = $para['apdate2'];
    $newDate2 = date("d-m-Y", strtotime($orgDate2));

    $time2 = date("g:i a", strtotime($para['aptime2']));

    $appointmentTime = $time2;
    $appointmentDate = $newDate2;

    $serviceType = "None";
    $Paid = "None";
    $PaidStatus = "None";

    $contact = $para['apcontact'];

    if ($para['appackage']==101) {
    	$serviceType = "Vedic Astrology Consultation";
    	$Paid = "$ 199";
    	$PaidStatus = "100% Done";

    }else if ($para['appackage']==102) {
    	$serviceType = "Vedic Vastu Consultation";
    	$Paid = "$ 399";
    	$PaidStatus = "100% Done";

    }else if ($para['appackage']==103) {
    	$serviceType = "Match Making";
    	$Paid = "$ 199";
    	$PaidStatus = "100% Done";

    }
    
	    $htmlContent = '
	    <h3>Dear Admin, </h3>'.'Following are the customer information: <hr/>'.'<table cellspacing="0" style="width: 300px; height: 200px;">

	        <tr>
	            <th>Customer Name:</th><td>'.$name.'</td>
	        </tr>
	        <tr>
	            <th>Email:</th><td>'.$customerEmail.'</td>
	        </tr>
	        <tr>
	            <th>Phone Number:</th><td>'.$contact.'</td>
	        </tr>
	        <tr>
	            <th>Appointment Date: </th><td>'.$appointmentDate.'</td>
	        </tr>
	        <tr>
	            <th>Appointment Time: </th><td>'.$appointmentTime.'</td>
	        </tr>
	        <tr>
	            <th>Date of Birth: </th><td>'.$dob.'</td>
	        </tr>
	        <tr>
	            <th>Time of Birth: </th><td>'.$tob.'</td>
	        </tr>
	        <tr>
	            <th>Place of Birth: </th><td>'.$pob.'</td>
	        </tr>
	        <tr style="background-color: #e0e0e0;">
	            <th>Selected Service:</th><td>'.$serviceType.'</td>
	        </tr>
	         <tr>
	            <th>Payment Status: </th><td>'.$PaidStatus.'</td>
	        </tr>
	        <tr style="background-color: #e0e0e0;">
	            <th>Amount Paid: </th><td>'.$Paid.'</td>
	        </tr>

	    </table> 

	<h2>Regards</h2>
	<h3>Team Astro Guru G</h3>';

	    
	    $headers = "MIME-Version: 1.0" . "\r\n";
	    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	    
	    $headers .= 'From: investment@salonhome.com' . "\r\n";
	    
	    if(mail($to,$subject,$htmlContent,$headers)){
	        $status = 'ok';
	    }else{
	        $status = 'err';
	    }
	    // Output status
	    // echo $status;
	}
 ?>