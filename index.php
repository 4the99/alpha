
<?php
// ignore this, todo list
  
// bot check to do:
// will create some simple algorithm in js only if form submitted without correct answer then we know its a bot. 
// https://stackoverflow.com/questions/121203/how-to-detect-if-javascript-is-disabled
// https://stackoverflow.com/questions/22108118/displaying-a-form-only-if-javascript-is-enabled
// anti brute force to do. 
// parse login after db, to do
// presentation layer to do
// shorten var names, to do. 
// check if logged in, to do. 
// post timing tracking to do.
// error db passing of functions to do. 


class SomethingFuckedUp
{
	// ignore this as well
   public $implosion_warning = ('Something mission critical just blew up in our face.'."/n".
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

class ThePortalToEnlightenment 
{
    //need to put a cookie check in, if logged in cookie set bypass all below and go strait to user page 	
	
	
   // get input and validate layer
   private function getLoginPost()
   {
     private var  $dirty_user_login_email = isset($_POST['dirty_user_login_email'])
     private var  $dirty_user_lowsec_login_pass = isset($_POST['dirty_user_lowsec_login_pass'])
       //$dirty_button = isset($_POST['dirty_login_button']) 
       //$dirty_login_form = isset($_POST['dirty_email_login'])      
       //not sure about form button/security and what exactly to do, if anything? considering, if not requested server side by post? 
      parseLoginEmail($dirty_user_login_email)
   }
   
   private function parseLoginEmail($dirty_user_login_email) //passing var to function correct? 
   {
       
       if (($dirty_user_login_email = filter_var($dirty_user_login_email, FILTER_SANITIZE_EMAIL) === true)
       {
       private $clean_user_login_email =  $dirty_user_login_email;
       return $clean_user_login_email;
       }
       
               
       elseif (filter_var($clean_user_login_email, FILTER_VALIDATE_EMAIL) === false) 
       {
       	  //kiss code
       	  echo('Incorrect email');             
       } 
          
       elseif (filter_var($clean_user_login_email, FILTER_VALIDATE_EMAIL) === true) 
       {
           mainDatabaseInput($clean_user_login_email)
           //ok confused! how do i pass $clean_user_login_email to the class DatabaseLayer() and direct it to fire off the function/method?
       }
       else 
       {
          echo ("$implosion_warning");
       }
   }
  
sub class DatabaseLayer()
   {
       private function mainDatabaseInput () 
       {
       
       //really got to think of a better way to route my scripts to appropriate db 
       // mabe array n case
           if($goto_db_type === 'mysql')  
           {
           	   if($goto_db_db === 'user_master_db') 
           	   {
           	   	 if($goto_db_table === 'user_master_table') 
           	   	 {
           	   	 	  if($goto_stmt === 'prepared_login') 
           	   	 	  {
           	   	      dbGetLogin($clean_user_login_email);
           	   	     }
           	   	 } 
           	   	 elseif($goto_db_db === 'error_db') 
           	   	 {
           	   	     dbHasCrashed();  // <---- pass though vars gotta hit the road.  
           	   	 }	
           	   }
           	   else 
           	   {
           	   	 echo ('you ain\'t coded that far ahead yet');
           	   }
           }
      
      
           else if ($go_db_type != 'mysql')
           {
					echo ('you haven\'t set up nosql yet idiot');            
           } 
           else 
           {
               echo("$implosion_warning");           
           }      
      
       }
       
       
       private function dbGetLogin($clean_user_login_email) 
  		 {
       //this CANNOT! be include() or require() due to nullbytes 
  		 unknown_function("/path/to/db/connection/script")           
       // http://wiki.hashphp.org/PDO_Tutorial_for_MySQL_Developers
       
           try 
           {                  
               $user_login_db_stmt = $db->prepare("SELECT .
               dirty_login_master_array=:dirty_login_master_array_placeholder .
               FROM dirty_user_master_table WHERE clean_user_email=:clean_email_placeholder");
           
               $user_login_db_stmt->execute(array(':dirty_user_login_master_array_placeholder' => $dirty_login_master_array, .
               ':clean_user_email_placeholder' => $clean_user_login_email));
               $rows = $user_login_db_stmt->fetch(PDO::FETCH_BOUND);
               return $dirty_login_master_array
               // need to figure out how to store a shitton of vars/arrays as "objects" in a db field, and which db supports this 
           }
           
           catch(PDOException $dirty_db_crash_dump) 
           {
               private var $user_login_db_crash_timestamp = microtime($get_as_float = null);
             	//according to php docs, float reduces!? accuracy to seconds, instead of microseconds!?!?!?
               if ($give_that_user_a_cookie != false)
                   {
                       $give_that_user_a_cookie = $clean_user_login_email;
                   }           
               echo ($implosion_error_warning)
               
                $goto_db_type = 'mysql'  //<-- nosql is probbably better for massive error dumping
                $goto_db_db = 'error_db'
                $goto_db_table = 'login_db_error_dump'      
               
               //because im firing off a function/method below, does this have to go ---after--- the echo? 
               dbHasCrashed($dirty_db_crash_dump->getMessage(), $user_login_db_crash_timestamp, . 
               $user_login_db_stmt, $goto_db_type, $goto_db_db, $goto_db_table);
           }           
       }
   }



// pesentation layer 

       private function verifyPass ()
       {  
           //unknow code here: 
           //split up array/obcect/list $dirty_login_master_array extract password and salt  
           password_verify($dirty_user_lowsec_login_pass, $user_lowsec_login_hash);
       }
   
   private function cookiePreparation() 
   {
   	   //http only means https, its ok, its telling browser to sandbox 
       	// cookie value = user id, and user pivacy/site settings
       	setcookie($name, $value = null, $expire = null, $path = null, $domain = 'https://4the99.org', $secure = true, $httponly = true);        
         header('session.use_strict_mode;'); //<---- havent figured out that one for ^^^ & VVV .... to google
   nomNomNom()
   }	
    
    
   private function nomNomNom()
   {
               	
              	    //seriously think about ways to harden this layer, privacy vs security vs spoofing & open source *sigh* 
                   //if someone was really bored enough they could spoof all the way down to the cpu core. 
                   // looking into rolling own session cookies, random_bytes 
                   // take a long hard look at SessionHandler()
						 // https://secure.php.net/manual/en/intro.session.php
						 // track down that old script that gets 100k+ cookies and maps out randomness in visual graph. 
                   session_set_cookie_params($lifetime, $path = null, $domain = null, $secure = null, $httponly = null);                   
                   session_start()        
   addHeaders()
   } 
         
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
   }
  
  
   //Presentation layer   
   //htmlspecialchars();

?>

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
        <!-- normally js would be split off into its own file, as per standards instead keeping it at the top of html 
        instead im going to keep it simple for the code tweakers skinning the site to their desires -->
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

<!-- amusing dev note about "low security" goes here, need template up and running to reference functions properly -->

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