
// hanging brakets need to nuke its being a prick and wont let me 
{
			position: relative;
			width: 900px;
			height: 500px;
		}
{{{
</head>
<body>

<?php
//preg replace alert $haxxor landmine
function haxxor_landmine($violation)
{
unset($_POST)

// flush buffer not sure if a good idea but thinking about it for attempted reflect attacks/http response splitting
// we are hiding behind cloudflare, need a to take a closer look at the secure scrape authorisation (especially for same origin policy)
ob_end_clean();
//may cause undesired errors, need to look deeper @ 
//https://www.prestashop.com/forums/topic/267543-solvedhow-to-fix-sql-import-error-ob-cleanfailed-to-delete-buffer/
//to get rid of split hedder, cache reflection attacks ? 

//kill off all connections 
mysqli_close();
closelog();
session_destroy();
fwrite(STDERR, "hack killed: $violation \n");
exit(1); // A response code other than 0 is a failure <--- huh? why? 
// session destroy wildcard? destroy all?
// need to add attacked inputbox/page
// see bot_fingerprint()  
}


$kill_post = 1;
if ($kill_post != 1 or 2)
// order of operations fuckup here, not sure how to fix
{
$violation = "injecting injecting in2 kill_post var");
haxxor_landne($violation)
// can enforce clearing post from memory using $_POST = 1 then unset? 
unset($_POST)
}
do (if(isset($_POST['dirty_email'], $_POST['dirty_password'], $_POST['dirty_login']))) 
	{ 
		$dirty_email = $_POST['dirty_email'];
		$dirty_password = $_POST['dirty_password'];
		$dirty_button = $_POST['dirty_login'];
		// mabe use count() but its counts the entire array 
 		// dirty button undefended atm
 			 {
			while (if ($java_script_is_enabled == true)) 	
				// js detection on form (way down) may not work... need to test
				{ 
					// http://php.net/manual/en/function.strlen.php   <-- intresting function in comments 
					// need to look at encoding for the count, but if i copy/encode vairable it breaks the if statment and
					// killing post half way though once it hits a certan point? is this even possible? trying....
					// $strlen_count = strlen(utf8_decode($string_to_count));  <-- encoding    $dirty_password =  $string_to_count
					
					// need to work this with while logic instead of if 
					// brain melting from loop logic its to much 
					
					$strlen_count_pass = 2;
					$strlen_count_pass = strlen($dirty_email);
					if($strlen_count_pass != 514)
					// may cause timing issues on submit ect being processed before $_POST has had a chance to fully commit.
					// mabe 500 milli second delay? (remember stay logged in, and working with sockets so no need to constantly authenticate) 
					{
						$violation = "injecting bufferoverflow inside initial js pw hashz";
						haxxor_landmine($violation);
					}
						else if() 
						{
							$count_pass = 1; //this is a protected? variable and cant be injected into? 
							//start at 1 to prevent null-bite (i think)							
							do 
								{
									
   	 							// trying wrap my head around loop logic, want to fire off haxxor_landmine($violation) 
   	 							// else allow password to continue 
   	 							// incorrect regex syntax (0-9 A-F case insensitive hex hash output from JavaScript)
   	 							$string = preg_replace('/(\d)((\d\d\d)+\b)/','$1,$2', $string, 1, $count_pass);
								// preg_replace must use i m s flags ---> http://php.net/manual/en/reference.pcre.pattern.modifiers.php
								// http://stackoverflow.com/questions/6364269/preg-replace-within-a-while-loop
								// thats it!! dont understand all the vars and syntax but its argument 5
								// very, very, very stuck on this one. 

								}
								while ($count_pass == 1) 
									// use value of 1 to stop null-bites being parsed rather than 0 
									{
										if ($count_pass != 1) 
											{
											$violation = 'injecting invalid chars into password hashz with java scipt filtering enabled';
											haxxor_landmine($violation)
											}
									}	
						}	
					}
					
					else if($java_script_is_enabled == false) 
						{		
							$strlen_count_pass = 2;
							$strlen_count_pass = strlen($dirty_email);
							if(strlen_count_pass != 2)  // <------- mabe a bit essesive for min lengh but probbably not
								{
								//haxor_landmine() 
								//login form will be hidden without js if they login without js then its an attack. 
								}
					else if($java_script_is_enabled != 1 or 2)
					{
						$violation = "injecting in2 javascript_is_enabled vairable";					
						haxxor_landmine($violation);
					}
					// detect injection into the submit button, need to know its default values 
					
					// if email over 50 chars, and make email 
					// place this outside of the while and kill post cuz all check are ok 
				hash($dirty_password)
					//clean email input factoring in weird email chars, html_entitles sound good in theory until you send an email
				
					//		$dirty_email = htmlentities(stripslashes($_POST['to'])); <--- something like that maybe ?
					// http://php.net/manual/en/filter.examples.sanitization.php   <--- checkon filter in server 
					}
	}
	// login needs buffer overflow protection. 
// now all that is done, do we put it into this function below can they call an inject into the login fucntion 
function login($dirty_email, $dirty_password) 
{
	//look up button value, if is not in essence true or false preg_replace, count flag and set off haxxor_landmine() <-- route hacker 2 sandbox 
		
		// include database php 
		require("~/mysqli_con.php")
		http://dba.stackexchange.com/questions/8239/how-to-easily-convert-utf8-tables-to-utf8mb4-in-mysql-5-5
		//is referenced properly? outside public_html to prevent hack single or double quotes? 
		// even better need to look deeply at hardening the security of this, is there a way to detect where exactly this script is called from? 
		// on which page, under which fuction, and lock it down as a protected variable
		// as well lock down only certan files that are whitelisted (php.ini) can be included (may have to hack php/apachie core :(
		// (and file-types ie php, but jpg ok (so long as filerd for nullbyte and mime and err shit in about,prosperities and block how they hide stuff in image files)
		// really want to protect db pass with everything i can thow at it, to make sure everything is protected and not being able to be called client side 
		
		$file = str_replace(chr(0), '', $string);
		// how the fruit do i specify null byte from the keyboard exactly? or is it just a space or 0x00000 or NULL or ? what to use considering, c++/sql/php/xml/html/js *sigh* 
		//poison null byte prevention https://www.hackthis.co.uk/articles/common-php-attacks-poison-null-byte
		// add count options 4 haxxor_landmine()
		// *** danger**** str_replace is not comaptable with full unicode, BUT it starts @ string end, to nail nullbyte first and formost 
		// for this particlar attack, may have to run preg_replacee() as well over the top with the U flag (and others mentioned above)
		// to fully clean all file linkings for include, and also look @ php.ini include can i lockdown and see if it can have whitelist per include?
		
		// will generate multiple sessions per browser/ip and user set session control later 
	   // gonna get rid of the shitty fsm browser model aka stay logged in but secure from xss/csrf
	   // gonna use websockets (to be figured out, socket.io) and write dynamic html (this to), and deliver over xml (and that to)  <-cs75.net
	   
	   // most of these are entropy/security needs cleaning up but putting there for remembering cutting n paste
	   // Using prepared statements means that SQL injection is not possible. 
	   // unsure if i need to change $statment variable to acutual connection script or $mysqli (working on it later code more)
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

		// look 4 mit crypto javascript implementation @ ^^^^ if not dig in this area in bookmarks

	
		// extract user public key for addional entropy/fingerprinting bots x509/SPKAC(cause issues with cloudflare mitm?)
		// could also be used to harden cloudflare secruty, thinking of detecting non cloudflare (ip/header/cert/connection) and blocking anything that fecthes stuff cloudflare sould cache 
		// open_ssl_default_stream_cyphers <--- application layer (php 5.6) or open ssl?
// need to apply these to all cookies 		
// session.cookie_httponly   <--- dont wory about the http instead of https bit, thats ok, its correct, its just sandbox cookie in browser. 
// session.cookie_secure		<--- enforces cookie over https 
// session.use_strict_mode
		//openssl.capath openssl.cafile with verify_peer
		// if (hash_equals ($hash1, $hash2) === true)<--- open to timing attacks 
		// preg_replace /e vunreable (back in 2012 lol) now deprecitated in php 5.5 removed in 7
		// use preg_replace_callback instead 
		

// ***** new toys in php 7 ****
// declare(strict_types=1)    <---- locked down input into bool, int, float, string
// you can catch exceptions with error()

Protected function bot_fingerprint() {
//stash inside main login class
//pdo and prepared and msquli couldnt be toughter to crack :)
//http://www.w3schools.com/php/php_mysql_prepared_statements.asp
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

//use full (basic) fingerprinting to evolve below, needs work. 
//get_browser($user_agent = null, $return_array = null);   
// get_defined_functions();  <---- custom functions from the injections? 
//get_headers($url, $format = null);
//header($string, $replace, $http_response_code);
//mail($to, $subject, $message, $additional_headers = null, $additional_parameters = null);

// remember to get header dump 


// this pdo stuff not my code, for referencing. 
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
		
		
	// needs overhauling not really focused here, just using as reverencing, i got to get ^^^^ figured out first before i really spread my wings. 
        if ($stmt->num_rows == 1) {
            // If the user exists we check if the account is locked
            // from too many login attempts 
 
            if (checkbrute($user_id, $mysqli) == true) {
                // Account is locked 
                // Send an email to user saying their account is locked
                return false;
            } else {
                // Check if the password in the database matches
                // the password the user submitted.
                if ($db_password == $password) {
                    // Password is correct!
                    // Get the user-agent string of the user.
                    $user_browser = $_SERVER['HTTP_USER_AGENT'];
                    // XSS protection as we might print this value
                    $user_id = preg_replace("/[^0-9]+/", "", $user_id);
                    $_SESSION['user_id'] = $user_id;     
                    // XSS protection as we might print this value
							// needs secure flag!                     
                    $username = preg_replace("/[^a-zA-Z0-9_\-]+/", 
                                                                "", 
                                                                $username);
                    $_SESSION['username'] = $username;
                    $_SESSION['login_string'] = hash('sha512', 
                              $password . $user_browser);
                    // Login successful.
                    return true;
                } else {
                    // Password is not correct
                    // We record this attempt in the database
                    $now = time();
                    $mysqli->query("INSERT INTO login_attempts(user_id, time)
                                    VALUES ('$user_id', '$now')");
                    return false;
                }
            }
        } else
        {
            // No user exists.
            return false;
        }
		} 
}
}

function checkbrute($user_id, $mysqli) {
   // Get timestamp of current time
   $now = time();
   // All login attempts are counted from the past 2 hours. 
   $valid_attempts = $now - (2 * 60 * 60); 

   if ($stmt = $mysqli->prepare("SELECT time FROM login_attempts WHERE user_id = ? AND time > '$valid_attempts'")) { 
      $stmt->bind_param('i', $user_id); 
      // Execute the prepared query.
      $stmt->execute();
      $stmt->store_result();
      // If there has been more than 5 failed logins
      if($stmt->num_rows > 5) {
         return true;
      } else {
         return false;
      }
   }
}

function login_check($mysqli) {
   // Check if all session variables are set
   if(isset($_SESSION['user_id'], $_SESSION['username'], $_SESSION['login_string'])) {
     $user_id = $_SESSION['user_id'];
     $login_string = $_SESSION['login_string'];
     $username = $_SESSION['username'];

     $user_browser = $_SERVER['HTTP_USER_AGENT']; // Get the user-agent string of the user.

     if ($stmt = $mysqli->prepare("SELECT Password FROM accounts WHERE accountID = ? LIMIT 1")) { 
        $stmt->bind_param('i', $user_id); // Bind "$user_id" to parameter.
        $stmt->execute(); // Execute the prepared query.
        $stmt->store_result();

        if($stmt->num_rows == 1) { // If the user exists
           $stmt->bind_result($password); // get variables from result.
           $stmt->fetch();
           $login_check = hash('sha512', $password.$user_browser);
           if($login_check == $login_string) {
              // Logged In!!!!
              return true;
           } else {
              // Not logged in
              return false;
           }
        } else {
            // Not logged in
            return false;
        }
     } else {
        // Not logged in
        return false;
     }
   } else {
     // Not logged in
     return false;
   }
}


// bad code, it works, but its not enough, left for referencing if i get lost
//include 'db_connect.php';
//include 'functions.php';
//sec_session_start(); // Our custom secure way of starting a php session. 
// stooooopid idea

//if(isset($_POST['email'], $_POST['password'])) { 
//   $email = $_POST['email'];
 //  $password = $_POST['password']; // The hashed password.
 //  if(login($email, $password, $mysqli) == true) {
    // Login success
    //  echo 'Success: You have been logged in!';

  // } else {
      // Login failed
  //    echo 'Fail';

 //  }
//} else { 
   // The correct POST variables were not sent to this page.
 //  echo 'Invalid Request';
//}


//http://php.net/manual/en/function.trim.php
//handy for iditot input
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

 
