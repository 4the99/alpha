<!DOCTYPE html> 
<html> PHP_EOL; 
<head> PHP_EOL;
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />; PHP_EOL;
<title>Welcome</title>PHP_EOL;
<link rel="stylesheet" href="http://4the99.org/stylez/style.css">
<link rel="stylesheet" href="http://4the99.org/stylez/index.css">
<!-- stuuuupid! question but one i cant figure out is the resolution/@moz parsed by server and then appropriate code sent to browser -->
<!-- but i have to know, because i cant find an answer and just are not sure -->

<?php
header('Content-type: text/html; charset=utf-8'); PHP_EOL;  
header allways append date_default_timezone_set("UTC");
header always append X-Frame-Options SAMEORIGIN;
header always append X-Frame-Options DENY;
header always append X-Forwarded-Proto: https;
header always append X-Forwarded-Port: 8080;
header always append Content-Security-Policy 
header always append X-WebKit-CSP
header always append X-Content-Security-Policy
header always append Strict-Transport-Security: max-age=1000; includeSubDomains;
//syntax correct?
?>

</head>
<body>
<?php


protected function nuke_post()
{
	//$kill_post = 1;
	//need to put this somewhere....
	if ($kill_post is != 1 or 2)
		// order of operations fuckup here, not sure how to fix
		// did is fix?
		{
			$violation = "injecting injecting in2 kill_post var");
			haxxor_landmine($violation)
			$_POST = 1;
			unset($_POST);
		}
}
//preg replace alert $haxxor landmine
protected function haxxor_landmine($violation $page $input_box $user $target_user)
{
	ob_end_clean();
	mysqli_close();
	closelog();
	session_destroy();
	fwrite(STDERR, "hack killed: $violation $page $input_box\n");
	exit(1); // A response code other than 0 is a failure <--- huh? why? 
	// session destroy wildcard? destroy all?
	// need to add attacked inputbox/page
	// see bot_fingerprint()  
}



				
protected function login($dirty_email, $dirty_password) 
{		
	// include database php 
	require("~/mysqli_con.php")
	//is referenced properly? outside public_html to prevent hack single or double quotes? 
	//better way to do this because of null bytes? 

	$file = str_replace(chr(0), '', $string);
	// how do i specify null byte from the keyboard exactly? or is it just a space or 0x00000 or NULL or ? 
	
		if ($stmt = $mysqli->prepare("SELECT UID, clean_login, clean_pass_hash, clean_user_salt, clean_encrypted_email,
		clean_user_encrypted_registration_email, clean_user_registration_timestamp, clean_user_cookie_hash,
		clean_encrypted_user_ip, clean_user_session_id_hash, clean_user_bruteforce_level, 
		clean_user_bruteforce_ip, clean_user_bruteforce_header, clean_user_bruteforce_timestamp,
		clean_user_alert_level, clean_user_alert_type, clean_user_alert_priority, clean_user_drama_queen_value,
		clean_user_admin_is_pissed_off_at_level, clean_user_banned_level, clean_user_banned_reason, clean_user_banned_ip
		clean_user_is_hate_preacher clean_user_is_pedo_or_terrorist
		FROM Userz_main
		WHERE clean_email = ?
		LIMIT 1"))
			{
				$stmt->bind_param('s', $email);  // Bind "$email" to parameter.
				$stmt->execute();    // Execute the prepared query.
				$stmt->store_result();
				
				// get variables from result.
				// need to add user ip as secondary session (will add one shot pin authentication to gen new session)
				// web socket echo encryption stage status (make this timing attack safe)
				$stmt->bind_result($UID, $clean_login, $clean_pass_hash, $clean_user_salt, $clean_encrypted_email,
				$clean_user_encrypted_registration_email, $clean_user_registration_timestamp, $clean_user_cookie_hash,
				$clean_encrypted_user_ip, $clean_user_session_id_hash, $clean_user_bruteforce_level, 
				$clean_user_bruteforce_ip, $clean_user_bruteforce_header, $clean_user_bruteforce_timestamp,
				$clean_user_alert_level, $clean_user_alert_type, $clean_user_alert_priority, $clean_user_drama_queen_value,
				$clean_user_admin_is_pissed_off_at_level, $clean_user_banned_level, $clean_user_banned_reason, $clean_user_banned_ip,
				$clean_user_is_hate_preacher, $clean_user_is_pedo_or_terrorist);
				$stmt->fetch();
	
// need to apply these to all cookies 		
// session.cookie_httponly   <--- dont wory about the http instead of https bit, thats ok, its correct, its just sandbox cookie in browser. 
// session.cookie_secure		<--- enforces cookie over https 
// session.use_strict_mode

Protected function bot_fingerprint() 
{
	//stash inside main login class
	// remember to put in the while preg replace detection inside the connection script
	//some of these may return null? remember to protect!

	$dirty_attacker_ip = $_SERVER['REMOTE_ADDR'];
	$dirty_attacker_resolved_ip = $_SERVER['REMOTE_HOST'];
	$dirty_attacker_remote_port = $_SERVER['REMOTE_PORT'];
	$dirty_attacker_hostname = $_SERVER['HTTP_HOST'];
	$dirty_attacker_user = $_SERVER['REMOTE_USER'];
	$dirty_attacker_useragent = $_SERVER['HTTP_USER_AGENT'];
	$dirty_cgi_stript_attacked = $_SERVER['GATEWAY_INTERFACE'];
	$dirty_attacked_server_ip = $_SERVER['SERVER_ADDR'];
	$dirty_attacked_server_hostname = $_SERVER['SERVER_NAME'];
	$dirty_server_sent_headers = $_SERVER['SERVER_SOFTWARE'];
	$dirty_attacked_protocol = $_SERVER['SERVER_PROTOCOL'];
	$dirty_attack_timestamp_float = $_SERVER['REQUEST_TIME_FLOAT'];
	$dirty_attack_query = $_SERVER['QUERY_STRING'];
	$dirty_attacker_metadata = $_SERVER['HTTP_ACCEPT'];
	$dirty_attacker_charset = $_SERVER['HTTP_ACCEPT_CHARSET'];
	$dirty_attacker_encoding = $_SERVER['HTTP_ACCEPT_ENCODING'];
	$dirty_attacker_languages = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
	$dirty_attacker_http_headers = $_SERVER['HTTP_CONNECTION'];
	$dirty_attacker_https_flag = $_SERVER['HTTPS'];
	$dirty_attacker_refferer = $_SERVER['HTTP_REFERER'];
	$dirty_attacker_if_redirected = $_SERVER['REDIRECT_REMOTE_USER'];
	$dirty_attacked_filename = $_SERVER['SCRIPT_FILENAME'];
	$dirty_attacked_file_dir = $_SERVER['DOCUMENT_ROOT'];
	$dirty_attacked_after_parsing_path = $_SERVER['PATH_TRANSLATED'];
	$dirty_attacked_apachie_user_id = $_SERVER['SERVER_ADMIN'];
	$dirty_attacked_port = $_SERVER['SERVER_PORT'];
	$dirty_attacked_url = $_SERVER['REQUEST_URI'];
	$dirty_attacked_file_path = $_SERVER['PATH_INFO'];
	$dirty_attacker_user_auth_level = $_SERVER['PHP_AUTH_DIGEST'];
	$dirty_attacker_user_id = $_SERVER['PHP_AUTH_USER'];
	$dirty_attacker_user_attempted_pw = $_SERVER['PHP_AUTH_PW'];
	$dirty_attacker_authentication_type = $_SERVER['AUTH_TYPE'];
	$dirty_origingal_file_attacked = $_SERVER['ORIG_PATH_INFO'];

	// reminder to link vardump
	$dirty_attacker_method = $_SERVER['REQUEST_METHOD'];

	//http://php.net/manual/en/function.get-browser.php
	// more fingerprinting but hits ram hard
	// http://php.net/manual/en/wrappers.php.php#wrappers.php.input

	//get_browser($user_agent = null, $return_array = null);   
	// get_defined_functions();  <---- custom functions from the injections? 
	//get_headers($url, $format = null);
	//header($string, $replace, $http_response_code);
	//mail($to, $subject, $message, $additional_headers = null, $additional_parameters = null);

		// this pdo stuff not my code, for referencing. 
		//http://www.w3schools.com/php/php_mysql_prepared_statements.asp
		
		$servername = "localhost";
		$username = "username";
		$password = "password";
		$dbname = "myDBPDO";

		try {
 				$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
				// set the PDO error mode to exception
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				// prepare sql and bind parameters
				$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email)
				VALUES (:firstname, :lastname, :email)");
				$stmt->bindParam(':firstname', $firstname);
				$stmt->bindParam(':lastname', $lastname);
				$stmt->bindParam(':email', $email);

				// insert a row
				$firstname = "John";
				$lastname = "Doe";
				$email = "john@example.com";
				$stmt->execute();

				// insert another row
				$firstname = "Mary";
				$lastname = "Moe";
				$email = "mary@example.com";
				$stmt->execute();

    			// insert another row
				$firstname = "Julie";
				$lastname = "Dooley";
				$email = "julie@example.com";
				$stmt->execute();
				
				echo "New records created successfully";
			}
		catch(PDOException $e)
    	{
    	echo "Error: " . $e->getMessage();
    	}
	$conn = null;

	}

?>
<!-- no pointer to public dirty vars yet --> 
<form method="POST" action="" id="Login">
	<input type="email" name="dirty_email" placeholder="Email"/>
	<input type="password" name="dirty_password" placeholder="******"/>
	<button name="dirty_login">Login</button> 

<!-- need to make sure thais is ok -->
<!-- http://stackoverflow.com/questions/121203/how-to-detect-if-javascript-is-disabled -->
	<form onsubmit="this.js_enabled.value=2;return true;">
    <input type="hidden" name="js_enabled" value="1">
    <input type="submit" value="go">
</form>
</form>
<!-- remember to hash before sending over to server --> 
<br />
<br />
<div id="container">
		<div id="block">
			<div id="txt">
			<br />
			This is earth. Over 7 billion people live here. <br />
			A child starves to death every 4 seconds.<br />
			21 children die every second of every day from diarrhoea. <br />
			123 children die every second before they reach the age of 5.<br />
			over a billion people cant read or even write their own name.<br />
			with 1% of the of the money spent on weapons, every child could be in school<br />
			1.1 billion people need a proper water supply.<br />
			2.6 billion people need basic sanitation.<br />
			At least 80% of humanity lives on less than $10 a day.<br />
			Almost half of the world population live on less than $2.50 a day.<br />
			More than 1.3 billion live in extreme poverty less than $1.25 a day.<br />
			50% of the worlds population account for less than 1% of the worlds wealth.<br />
			the top 1% of the worlds population accounts for just under half the worlds wealth.<br />
			the top 10% of the worlds population holds almost 90% of the worlds wealth.<br />
			Time to make a change.<br />
			<br />
			No more bottom line thinking, and shareholder profits, the worlds most desperate people are our dividend. <br />
			We are not a standard charity begging for money, we believe in self sustaining charity.<br />
			We believe in creating a self sustaining pool of income that’s always there and ever growing to make a change and make a difference. <br />
			The seed that we will plant to grow the forest, here, now, today is simple. <br />
			we will happily provide feature rich technological solutions to make your life better<br />
			by simply using our services you change the world<br />
			make a difference today, join now<br />
			<br />
			<br />
			****under active development please check back soon****
			<br />
			<br />
just dumping to keep <br />
Across the world, billions of people are starving to death. <br />
Global warming has now been declared a scientific certainty.<br />
Companies for legal and tax reasons need to reduce their carbon footprint. <br />
So lets plant some trees, but who ever said those trees cant grow food?<br />
Over time this can only grow in size for the main cost being land acquisition, infrastructure, equipment and planting<br />
Vast quantity of food will be available for those that need it the most.<br />
This after all, is nothing more than a box to tick upon company registration,<br />
a percentage of sales to allocate, and a donation to balance out at the end of the financial year.<br />
A simple idea, massive impact, and one of the countless plans we have on the table.<br />
	
			<br />
			</div>
		</div>
</div>

?>
</body>
</html>

 
