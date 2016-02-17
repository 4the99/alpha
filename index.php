
<?php
   
// bot check to do:
// will create some simple algorithm in js only if form submitted without correct answer then we know its a bot. 
// https://stackoverflow.com/questions/121203/how-to-detect-if-javascript-is-disabled
// https://stackoverflow.com/questions/22108118/displaying-a-form-only-if-javascript-is-enabled

class master_control_class()
{
       private function domain_wide_heatbeat_intilisation()
       {
          public var $everything_is_ok_status_var = true;
          public var $webserver_emergency_shutdown_status_var = false;
          public var $hard_shutdown_status_var = false;
          public var $request_crash_and_burn_status_var = false;
          public var $secured_shutdown_status_var = false;
          public var $maitnence_shutdown_status_var = false; 
          public var $development_mode_status_var = true;
          public var $testing_mode_status_var = true;
          public var $parinoia_level_status_var = 'medium';       
       }    
    
    
    private function domain_wide_heartbeat() 
    {    	
        //runs away screaming!!!
        //my mind keeps EXPLODING with configs! 

        public list master_contol_list($everything_is_ok_status_var, $webserver_emergency_shutdown_status_var, .
        $hard_shutdown_status_var, $request_crash_and_burn_status_var, $secured_shutdown_status_var,           .
        $maitnence_shutdown_status_var, $development_mode_status_var, $testing_mode_status_var, $parinoia_level_status_var);
               
    }
}

class the_portal_to_enlightenment 
{
   // get input and validate layer
   protected function get_login_post()
   {
       $dirty_user_login_email = isset($_POST['dirty_user_login_email'])
       $dirty_user_low_security_zone_login_password = isset($_POST['dirty_user_low_security_zone_login_password'])
//       $dirty_button = isset($_POST['dirty_login_button']) 
//       $dirty_login_form = isset($_POST['dirty_email_login'])      
//not sure about form button/security and what exactly to do, if anything? considering, if not requested server side by post? 
       
       private function parse_login($dirty_user_login_email) //passing var to function correct? 
       {
           $dirty_user_login_email = filter_var($email, FILTER_SANITIZE_EMAIL);
               
           if (!filter_var($dirty_user_login_email, FILTER_VALIDATE_EMAIL) === false) 
           {
               protected $clean_user_login_email =  $dirty_user_login_email;
               return $clean_user_login_email;
              
           } 
          
           else 
           // how do i return this to javascript/ajax validating emails... properly...           
           {
               echo("$dirty_email".'is not a valid email address');           
           }
                     
       }
   }
   
   private function db_get_login($clean_user_email) 
  		 {
      	  //this CANNOT! be include() or require() due to nullbytes 
  		     unknown_function("/path/to/db/connection/script")
           
           // http://wiki.hashphp.org/PDO_Tutorial_for_MySQL_Developers
           try 
           {                  
               $stmt = $db->prepare("SELECT dirty_user_login_master_array=:dirty_user_login_master_array_placeholder .
               FROM dirty_user_master_table WHERE clean_user_email=:clean_email_placeholder");
           
               $stmt->execute(array(':user_login_master_array' => $dirty_list_user_master_login, ':clean_user_email' => $clean_user_email));
               $rows = $stmt->fetch(PDO::FETCH_BOUND);
               return("$dirty_list_user_master_login");
           }
           
           catch(PDOException $dirty_database_crash_error_dump) 
           {
               echo ('Something mission critical just blew up in our face.'."/n".
               '4the99.org is now entering emergency shutdown mode.'."/n".
               'Your last request to the server has just been lost sorry.'."/n".
               'The most likely reason you are seeing this message is that a single error occurred and the whole site was.'."/n".
               'automatically shut down as a safety measure, then your request to access one of the databases was blocked.'."/n".
               ."/n".               
               'Privacy Note: A timestamp and error specifics have been logged into a database, this will be deleted as soon'."/n".
               'as we diagnose and correct the fault in our systems. This may plausibly contain some personal information.'."/n".             
               'This is unfortunate, and we would avoid if we could but it may be required to diagnose the fault'."/n".
               ."/n".
               'We take your privacy and security very seriously and would rather kill off everything over a single error'."/n".
               'then risk a security breach from something we created'."/n".
               'We apologize for the inconvenience and we will let you know more when we do'."/n".
               'Please visit here: '."<a href='"https://4the99.org"'>'https://4the99.org'<p>"."/n".
               'for live updates as we diagnose and correct the situation, and bring everything back online as fast as we can'."/n".
               ."/n". 
               'PS. There is also a very remote chance you somehow managed to cause this error, in which case congratulations!.'"/n".
               'You get a cookie!'); //<--- a special award will appear on their profile ^^. 
               database_has_crashed($diry_database_crash_error_dump->getMessage());
           }
           //  password_verify()
       }
       


   //Presentation layer   
   //htmlspecialchars();
  
   private function nom_nom_nom()
   {
   
       private function cookie_preperation() 
       {
          header('session.cookie_httponly;');   //<--- dont wory about the http instead of https bit, thats ok, its correct, its just browser cookie sandboxing 
          header('session.cookie_secure;');     //<--- enforces cookie over https 
          header('session.use_strict_mode;');
       
           private function cookie_setting()
               {
              	    //seriously think about ways to harden this layer, privacy vs security vs spoofing & open source *sigh* 
                   session_start()
                   //check if cookie is set or catch error & return fail           
               } 
       }
   }	
      
   public function add_headers() 
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
                <input type='password' name='dirty_user_low_security_zone_login_password' placeholder='******'/>
                <button name='dirty_login_button'>Login</button> 
            </form>
        </div>

<!-- amusing dev note about "low security" goes here, need templat
ing up and running to reference functions properly -->

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