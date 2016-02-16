
<?php
   
// bot check to do:
// will create some simple algorithm in js only if form submitted without correct answer then we know its a bot. 
// https://stackoverflow.com/questions/121203/how-to-detect-if-javascript-is-disabled
// https://stackoverflow.com/questions/22108118/displaying-a-form-only-if-javascript-is-enabled


class the_portal_to_enlightenment 
{
   // get input and validate layer
   protected function get_login_post ()
   {
       $dirty_email = isset($_POST['dirty_login_email'])
       $dirty_password = isset($_POST['dirty_login_password'])
       $dirty_button = isset($_POST['dirty_login_button']) 
       $dirty_login_form = isset($_POST['dirty_email_login'])      
       
       private function parse_login($dirty_email) //passing var to function correct? 
       {
           $dirty_email = filter_var($email, FILTER_SANITIZE_EMAIL);
               
           if (!filter_var($dirty_email, FILTER_VALIDATE_EMAIL) === false) 
           {
               echo("$dirty_email".'is a valid email address');
           } 
          
           else 
           // how do i return this to javascript/ajax validating emails... properly...           
           {
               echo("$dirty_email".'is not a valid email address');           
           }
                     
       }
   }
   
   private function db_get_login 
  		 {
      	  //this CANNOT! be include() or require() due to nullbytes 
  		     unknown_function("/path/to/db/connection/script")
       
           // http://wiki.hashphp.org/PDO_Tutorial_for_MySQL_Developers
           $stmt = $db->prepare("SELECT password_hash=:password_hash_placeholder AND password_salt=:password_salt_placeholder .
           FROM table WHERE dirty_email=:dirty_email_placeholder");
       
           $stmt->execute(array(':password_hash_placeholder' => $password_hash, ':password_salt_placeholder' => $password_salt));
           $rows = $stmt->fetch(PDO::FETCH_BOUND);
           return("$password_hash $password_salt");
           //  password_verify()
       }
   private function set_cookies() 
   {
       session.cookie_httponly   //<--- dont wory about the http instead of https bit, thats ok, its correct, its just sandbox cookie in browser. 
       session.cookie_secure     //<--- enforces cookie over https 
       session.use_strict_mode
   }
   	
    
   //Presentation layer   
   public function add_headers() 
       {
           header('Content-type: text/html; charset=utf-8');  
           header date_default_timezone_set("UTC");
           header X-Frame-Options SAMEORIGIN;
           header X-Frame-Options DENY;
           header Content-Security-Policy 
           header X-WebKit-CSP
           header X-Content-Security-Policy
           header Strict-Transport-Security: max-age=1000; includeSubDomains;
           header X-Forwarded-Proto: https;
           header X-Forwarded-Port: 443;    
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
        to keep it simple for the code tweakers skinning the site to their desires -->
        <script type="text/javascript" >
    document.getElementById('non_js_is_hidden').style.display='block';
</script>

        <div id='non_js_hidden' style="display:none">
            <form method="POST" action="" id="dirty_login_form">
                <input type='email' name='dirty_email_login' placeholder='Email' />
                <input type='password' name='dirty_password_login' placeholder='******'/>
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