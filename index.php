<?php
// by the way.... Hello world! 

// https://stackoverflow.com/questions/121203/how-to-detect-if-javascript-is-disabled
// https://stackoverflow.com/questions/22108118/displaying-a-form-only-if-javascript-is-enabled

//reminder to ask lgbti community, for options for race, sex, sexuality, etc so that if someone decides to define themselves
//for example: as a lesbian zombie Klingon hobbit drag queen they can... 

// not sure if i can hide this in a class/method 
if(isset($_SERVER['REQUEST_METHOD'] === 'POST') == true) 
   {
       //sniff headers, route accordingly <-- lots to do here to harden site  
       $login_gloabal_obgect new TheHappyLoginClass;
   }
   else if(isset($_SERVER['REQUEST_METHOD'] === 'GET') == true) 
   {
    $set_headers = new SetHeaders();
   //  NormalIndexHtml();   //<--- so not sure about treating the HTML as an object.
   }
   else if () //  <--- check for session cookie 
   )
   // send user to profile 
   }
   
   else 
   {
      suspectedHacker();
   }

class TheHappyLoginClass()
{
   private function theYellowBrickRoad()
   { 
       if($everything_is_ok = true) 
       {
           try 
           {
       	      $ThePortalToEnligenment =  new ThePortalToEnlightenment();
       	      $ThePortalToEnligenment -> getLoginPass();
       	      $ThePortalToEnligenment -> getLoginEmail();
       	      $ThePortalToEnligenment -> cleanLoginEmail();
       	      $ThePortalToEnligenment -> parseLoginEmail();
       	      $LoginDB = new loginDB();   // <-- not sure about the construct/destruct for the db connection include 
       	      $LoginDB -> dbGetLogin();   // <---- do i pass property in method or here? 
       	      $CookieMonster = new CookieMonster();
       	
           }
           catch (Exception $e) 
           { 
               $crash_timestamp = microtime($get_as_float = null);
               log($e->getMessage());
               $this -> $everything_is_ok = false;
               $something_fucked_up = new SomethingFuckedUp();
               $something_fucked_up -> $something_fucked_up_status = true;  // <---- do i have to call a method to do this? 
               $something_fucked_up -> implosion_warning(); 
               $emergency = new emergency_shutdown();
               if ($give_that_user_a_cookie != false)
                   {
                        $give_that_user_a_cookie = $clean_user_login_email;
                   }  
           }
       }           
   }
}
class MasterLoginObjClass($clean_user_login_email)
{
	// this will be broken up into chunks and only loaded at need, kiss code for now. 
	// this is the opgect pulled from the database, and not sure if i should declare it here
	
	protected $optional_user_url_id;
	protected $clean_user_lowsec_login_hash;
   protected $optional_advanced_login_security_enabled;
   protected $dirty_optional_last_login_ip_array;
   protected $optional_last_login_timestamp;
   protected $optional_last_login_location;
   protected $dirty_optional_named_computers_array;
   protected $active_session_tracking;
   protected $optional_session_locations_array;
   protected $dirty_optional_browser_fingerprint_session_tracking;   //<--- run tests to look at encryption overhead 
   protected $optional_failed_login_tracking;
   protected $optional_user_targeted_hacking_allert_level;
	protected $optional_user_targeted_hacking_timestamp_array;
	protected $dirty_optional_user_targeted_hacking_browser_fingerprinting;
	protected $optional_user_targeted_hackers_location;
	protected $dirty_optional_user_targeted_hackers_fingerprint;
	protected $optional_user_targeted_hacker_notes;
	protected $optional_user_targeted_additonal_information;
	protected $optional_user_needs_special_protections;
	protected $user_has_insecure_fuckwit_partner;
	protected $user_has_violent_partner;
	protected $user_has_lifeline;
	protected $user_emergency_contact_array;
	protected $user_is_dramaqueen;
	protected $user_suspected_trouble_maker;
	protected $user_reputation_array;
	protected $user_suspected_terrorist_or_pedo_scum;
   protected $user_suspected_scammer;
   protected $user_suspected_malicious;
   protected $user_admin_notes;
   protected $user_is_banned;
   protected $user_is_banned_timestamp;
   protected $user_is_banned_history;
   protected $user_is_banned_reason;
   protected $user_is_banned_untill;
}


class ThePortalToEnlightenment()
{   
   private  $dirty_user_lowsec_login_pass;
   private  $dirty_user_login_email;
   private  $clean_user_login_email;


   private function getLoginPass()
   { 
       $hidden_var_pass = $_POST['dirty_user_lowsec_login_pass'];
       if($hidden_var_pass != null)
       {   
           //just in case of any chance of nullbyte injection
           $count = 1         
           $hidden_var_pass = str_replace(chr(0), '', $hidden_var_pass, $limit = -1, $count);  
           if ($count === 1)
           {
               $dirty_user_lowsec_login_pass = $hidden_var_pass;
           }
           else 
           {
         //   $suspected_hacker = new ->  suspectedHacker();
            echo ('the blank password is going hinky');
           
           }
          
       }
       else //<--- not... quite... sure about empty post, and filtering null byte, and, if this will fire, to test. 
       {
           echo ('In this day and age, we cant just let you use blank passwords. :S');
       }   
   }
   
   private function getLoginEmail()
   {
       $hidden_var_email = $_POST['dirty_login_email'];
       if($hidden_var_email != null) 
       {
           $count = 1         
           $hidden_var_email = str_replace(chr(0), '', $hidden_var_email, $limit = -1, $count);  
           if ($count === 1)
           {
             $dirty_user_login_email = $hidden_var_email;
           }
           else 
           {
          // suspectedHacker();
            echo('the blank email is going hinky');
           }
        }
        else 
        {
            echo ('Hmmmm... Whom might you be exactly? Hint: Email.')
        }             
   }
   
   private function cleanLoginEmail() 
   {
       
       if (($dirty_user_login_email = filter_var($dirty_user_login_email, FILTER_SANITIZE_EMAIL) == true)
       {
           $clean_user_login_email =  $dirty_user_login_email;   
       }
              
       else (filter_var($dirty_user_login_email, FILTER_SANITIZE_EMAIL) == false) 
       {
       	  //kiss code 
       	  echo('Incorrect email');
       	//  suspectedBot();             
       } 
   }
   
   parseLoginEmail()
   {
       if  (filter_var($clean_user_login_email, FILTER_VALIDATE_EMAIL) == true)  // <==== wrong!!!
       {
           // look this up again. 
       }
       else(filter_var($clean_user_login_email, FILTER_VALIDATE_EMAIL) == false)
       {
       		 echo('Incorrect email');
       	//	 suspectedBruteForce();
		 }
   }
}  

class landmines()
{
   //sanity checks. 
   public function suspectedBot() 
   {
   	echo('suspected bot');
   }
   public function suspectedBruteForce() 
   {
   	echo('suspected bruteforce');
   }
   public function suspectedHacker()	
   {
   	echo('suspected hacker');     
   }
   public function emergency_shutdown();
   {
   	echo('shutdown');
   }
}
     
 
class LoginDb()
{
   //email UID, Field for UUID (separate database to process cookies)
   private function __Construct()
   {
       include_once("/path/to/db/connection/script")   
   } 
     
    private function dbGetLogin($clean_user_login_email) 
    {          
       {                  
           $user_login_db_stmt = $db->prepare("SELECT . UID=:UID_placeholder AND
           dirty_login_master_object=:dirty_login_master_object_placeholder .
           FROM dirty_user_login_table WHERE clean_user_email=:clean_email_placeholder");
           
           $user_login_db_stmt->execute(array(':UID' => $user_id .
           ':dirty_user_login_master_object_placeholder' => $dirty_login_master_object, .
           ':clean_user_login_email_placeholder' => $clean_user_login_email));
           $rows = $user_login_db_stmt->fetch(PDO::FETCH_BOUND);
           return $dirty_login_master_object
           return $user_id
       }
}

class ErrorDB ()
{
echo ("landed at errordb"); 
}


class CookieMonster()
{

// https://paragonie.com/blog/2015/04/secure-authentication-php-with-long-term-persistence
// looking into rolling own session cookies, random_bytes 
// take a long hard look at SessionHandler()
// https://secure.php.net/manual/en/intro.session.php
// track down that old script that gets 100k+ cookies and maps out randomness in visual graph.  

   private function verifyPass ()
   {  
           
       password_verify($dirty_user_lowsec_login_pass, $user_lowsec_login_hash);
   }
   
   private function cookiePreparation() 
   {
   	 //http only means https, its ok, its telling browser to sandbox 
       // cookie value = user id, and user pivacy/site settings
       setcookie($name, $value = null, $expire = null, $path = null, $domain = 'https://4the99.org', $secure = true, $httponly = true);        
       header('session.use_strict_mode;'); //<---- havent figured out that one for ^^^ & VVV .... to google
   }	
    
    
   private function nomNomNom()
   {      
       session_set_cookie_params($lifetime, $path = null, $domain = null, $secure = null, $httponly = null);                   
       session_start();
   }
}

class SetHeaders()
{
   public function addHeaders() 
   {
       header('Content-type: text/html; charset=utf-8;');  
       header('date_default_timezone_set("UTC");');
       header('X-Frame-Options SAMEORIGIN;');
       header('X-Frame-Options DENY;');
       header('Content-Security-Policy;'); 
       header('X-WebKit-CSP;');
       header('X-Content-Security-Policy;');
       header('Strict-Transport-Security: max-age=1000; includeSubDomains;');
       header('X-Forwarded-Proto: https;');
       header('X-Forwarded-Port: 443;');    
       //syntax correct?
   }
   public function extraHeaders()
   {
     // yadda yadda, allow from origin PayPal etc 
     // restricted to certain pages/frames only. 
   }
}
  
  


class MasterController()
{
public  $everything_is_ok
// this will be a var, stored in the db, and a kill switch for the entire site. 
// it will be checked first and foremost, and if everything is not ok, everything is blocked from running
// nosql key based db, the really fast one! 
}

class SomethingFuckedUp()
{
	public  $something_fucked_up_status  
    
   public function implosion_warning()
   {
       echo ('Something mission critical just blew up in our face.'."/n".
       '4the99.org is now entering emergency shutdown mode.'."/n".
       'Your last request to the server has just been lost sorry.'."/n".
       'The most likely reason you are seeing this message is that a single error occurred and the whole site was.'."/n".
       'automatically shut down as a safety measure'."/n".
       ."/n".               
       'Privacy Note: A timestamp and error specifics have been logged into a database, this will be deleted as soon'."/n".
       'as we diagnose and correct the fault in our systems. This may plausibly contain some personal information.'."/n".             
       'This is unfortunate, and we would avoid if we could but it may be required to diagnose the fault'."/n".
       ."/n".
       'We take your privacy and security very seriously and would rather kill off everything over a single error'."/n".
       'then risk a security breach from something we created'."/n".
       'We apologize for the inconvenience and we will let you know more when we do'."/n".
       'Please visit here: '."<a href='https://4the99.org'>'https://4the99.org'<a>"."/n".
       'for live updates as we diagnose and correct the situation, and bring everything back online as fast as we can'."/n".
       ."/n". 
       'PS. There is also a very remote chance you somehow managed to cause this error, in which case congratulations!.'"/n".
       'You get a cookie! Check your profile to see if you won one.'); 
   }
// what fucked up, where, what actions to take <--- to do *sighs deeply* this will hurt. 
}

?>

//class NormalInexHtml()
//{
   <!DOCTYPE html> 
   <html> 
   <head>
        <meta http-equiv='Content-Type' content="text/html; charset=utf-8" />;
        <title>Welcome</title>;
        <link rel='stylesheet' href='http://4the99.org/stylez/style.css'>
        <link rel='stylesheet' href='http://4the99.org/stylez/index.css'>
        <!-- i think index.css needs another container box to stop background shade bug TODO -->
        </head>

    <body>
    <!-- I want to give a special shout out and thanks to all the php gods, @ ##php for all those glorious little tidbits that made ALL the difference -->

       <script type="text/javascript" >
          document.getElementById('non_js_is_hidden').style.display='block';
       </script>

        <div id='non_js_hidden' style="display:none">
            <form method="POST" action="" id="dirty_login_form">
                <input type='email' name='dirty_email_login' placeholder='Email' />
                <input type='password' name='dirty_user_lowsec_login_pass' placeholder='******'/>
                <button name='dirty_login_button'>Login</button> 
            </form>
        </div>

        <br />
        <br />
        <div id='container'>
            <div id='block'>
                 <div id='txt'>
                    <br />
                    This is earth. Over 7 billion people live here. <br />
                    A child starves to death every 4 seconds.<br />
                    21 children die every second of every day from diarrhea. <br />
                    123 children die every second before they reach the age of 5.<br />
                    Over a billion people cant read or even write their own name.<br />
                    With 1% of the of the money spent on weapons, every child could be in school<br />
                    1.1 billion people need a proper water supply.<br />
                    2.6 billion people need basic sanitation.<br />
                    At least 80% of humanity lives on less than $10 a day.<br />
                    Almost half of the world population live on less than $2.50 a day.<br />
                    More than 1.3 billion live in extreme poverty less than $1.25 a day.<br />
                    One in 10 people will suffer from mental health issues in their lifetime <br />
                    In Uganda for example, there is 1 mental health worker per million people<br />
                    50% of the worlds population account for less than 1% of the worlds wealth.<br />
                    The top 1% of the worlds population accounts for just under half the worlds wealth.<br />
                    The top 10% of the worlds population holds almost 90% of the worlds wealth.<br />
                    Time to make a change.<br />
                    <br />
                    No more bottom line thinking for shareholder profits
                    The worlds most desperate people are our dividend. <br />
                    We are not a standard charity begging for money, we believe in self sustaining charity.<br />
                    We believe in creating a self sustaining pool of income that’s always there and ever growing.<br />
                    This website is a melting pot of so many ground breaking ideas it will be a total game changer. <br />
                    We  We will happily provide feature rich technological solutions to make your life better<br />
                    That is only the start to get the ball rolling. <br />                
                    By simply using our services you change the world<br />
                    Make a difference today, join now<br />
            </div>
        </div>
    </div>
    </body>
    </html>
//}
//?>