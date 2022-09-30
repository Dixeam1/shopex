<?php
include 'email_layout.php';
include '../function.php';
include '../conn.php';
include('smtp/PHPMailerAutoload.php');
$result = select('orders');
foreach ($result as $res) {
	# code...
}
$html="


<thead>
<tr>
<th>name</th>
<th>email</th>
<th>Sub Total</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<?php echo $res['name']; ?>
</td>
<td>
<?php echo $res['name']; ?>

</td>
<td>
<?php echo $res['name']; ?>

</td>
</tr>
</tbody>
</table>
</div>
";
smtp_mailer('Ateeqrehman4344@gmail.com','subject',$html);
function smtp_mailer($to,$subject, $msg){
	$mail = new PHPMailer(); 
	$mail->SMTPDebug  = 3;
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "Ateeqrehman4344@gmail.com";
	$mail->Password = "tzkekofyjozgakpr";
	$mail->SetFrom("Ateeqrehman4344@gmail.com");
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if(!$mail->Send()){
		echo $mail->ErrorInfo;
	}else{
		return 'Sent';
	}
}
?>