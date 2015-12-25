<!DOCTYPE html> 
<html> PHP_EOL; 
<head> PHP_EOL;
<meta http-equiv='Content-Type' content="text/html; charset=utf-8" />; PHP_EOL;
<title>Welcome</title>PHP_EOL;
<link rel='stylesheet' href='http://4the99.org/stylez/style.css'>
<link rel='stylesheet' href='http://4the99.org/stylez/index.css'>
<!-- stuuuupid! question but one i cant figure out is the resolution/@moz parsed by server and then appropriate code sent to browser -->
<!-- but i have to know, because i cant find an answer and just are not sure -->

<?php
header('Content-type: text/html; charset=utf-8'); PHP_EOL;  
header allways append date_default_timezone_set("UTC");
header always append X-Frame-Options SAMEORIGIN;
header always append X-Frame-Options DENY;
header always append X-Forwarded-Proto: https;
header always append X-Forwarded-Port: 443;
header always append Content-Security-Policy 
header always append X-WebKit-CSP
header always append X-Content-Security-Policy
header always append Strict-Transport-Security: max-age=1000; includeSubDomains;
//syntax correct?
?>

</head>
<body>
<?php
// starts over from scratch
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

 
