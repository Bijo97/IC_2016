<style type="text/css">				
#holder {
	position: relative;   /* leave as "relative" to keep timer centered on 
				 your page, or change to "absolute" then change
				 the values of the "top" and "left" properties to 
				 position the timer */
	top: 10px;            /* change to position the timer; must also change
				 position to "absolute" above */
	left: 0px;  	      /* change to position the timer; must also change
				 position to "absolute" above */
	width: 270px;
	height: 60px;
	border: none;
	margin: 0px auto;
}

#title, #note {
	color: black;	      /* this determines the color of the DAYS, HRS, MIN, 
				 SEC labels under the timer and the color of the 
				 note that displays after reaching the target date
				 and time; if using the blue digital images,
				 change to #52C6FF; for the red images,
				 change to #FF6666; for the white images,
				 change to #BBBBBB; for the yellow images,
				 change to #FFFF00 */
}

#note {
	position: relative;
	top: 6px;
	height: 20px;
	width: 260px;
	margin: 0 auto;
	padding: 0px;
	text-align: center; 
	font-family: Arial; 
	font-size: 18px;
	font-weight: bold;    /* options are normal, bold, bolder, lighter */
	font-style: normal;   /* options are normal or italic */
	z-index: 1;
}

.title {
	border: none;
	padding: 0px;
	margin: 0px;
	width: 30px;
	text-align: center;
	font-family: Arial;
	font-size: 18px;
	font-weight: normal;    /* options are normal, bold, bolder, lighter */
	background-color: transparent; 
}

#timer {
	position: relative; 
	top: 0px; 
	left: -120px; 
	margin: 5px 0; 
	text-align: center; 
	width: 500px;
	height: 26px;
	border: none;
	padding: 10px 5px 20px 5px; 
	background: transparent;      /* may change to another color, or to "transparent" */
	border-radius: 20px;
	box-shadow: none;  /* change to "none" if you don't want a shadow */
}

#countdown {
	margin-left:-30px;
}
</style>

<script type="text/javascript">		
/*
Count down until any date script-
By JavaScript Kit (www.javascriptkit.com)
Over 200+ free scripts here!
Modified by Robert M. Kuhnhenn, D.O. 
(www.rmkwebdesign.com/Countdown_Timers/)
on 5/30/2006 to count down to a specific date AND time,
on 10/20/2007 to a new format, on 1/10/2010 to include
time zone offset, and on 7/12/2012 to digital numbers.
*/

/*  
CHANGE THE ITEMS BELOW TO CREATE YOUR COUNTDOWN TARGET DATE AND ANNOUNCEMENT 
ONCE THE TARGET DATE AND TIME ARE REACHED.
*/
var note="Competition has began!";	/* -->Enter what you want the script to 
				      display when the target date and time 
				      are reached, limit to 25 characters */
var year=2015;      /* -->Enter the count down target date YEAR */
var month=11;       /* -->Enter the count down target date MONTH */
var day=4;         /* -->Enter the count down target date DAY */
var hour=9;         /* -->Enter the count down target date HOUR (24 hour clock) */
var minute=0;      /* -->Enter the count down target date MINUTE */
var tz=7;          /* -->Offset for your timezone in hours from UTC (see 
			  http://wwp.greenwichmeantime.com/index.htm to find 
			  the timezone offset for your location) */

//-->    DO NOT CHANGE THE CODE BELOW!    <--	
d1 = new Image(); d1.src = "digital-numbers/1.png";
d2 = new Image(); d2.src = "digital-numbers/2.png";
d3 = new Image(); d3.src = "digital-numbers/3.png";
d4 = new Image(); d4.src = "digital-numbers/4.png";
d5 = new Image(); d5.src = "digital-numbers/5.png";
d6 = new Image(); d6.src = "digital-numbers/6.png";
d7 = new Image(); d7.src = "digital-numbers/7.png";
d8 = new Image(); d8.src = "digital-numbers/8.png";
d9 = new Image(); d9.src = "digital-numbers/9.png";
d0 = new Image(); d0.src = "digital-numbers/0.png";
bkgd = new Image(); bkgd.src = "digital-numbers/bkgd.gif";

var montharray=new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");

function countdown(yr,m,d,hr,min){
	theyear=yr;themonth=m;theday=d;thehour=hr;theminute=min;
	var today=new Date();
	var todayy=today.getYear();
	if (todayy < 1000) {todayy+=1900;}
	var todaym=today.getMonth();
	var todayd=today.getDate();
	var todayh=today.getHours();
	var todaymin=today.getMinutes();
	var todaysec=today.getSeconds();
	var todaystring1=montharray[todaym]+" "+todayd+", "+todayy+" "+todayh+":"+todaymin+":"+todaysec;
	var todaystring=Date.parse(todaystring1)+(tz*1000*60*60);
	var futurestring1=(montharray[m-1]+" "+d+", "+yr+" "+hr+":"+min);
	var futurestring=Date.parse(futurestring1)-(today.getTimezoneOffset()*(1000*60));
	var dd=futurestring-todaystring;
	var dday=Math.floor(dd/(60*60*1000*24)*1);
	var dhour=Math.floor((dd%(60*60*1000*24))/(60*60*1000)*1);
	var dmin=Math.floor(((dd%(60*60*1000*24))%(60*60*1000))/(60*1000)*1);
	var dsec=Math.floor((((dd%(60*60*1000*24))%(60*60*1000))%(60*1000))/1000*1);
	if(dday<=0&&dhour<=0&&dmin<=0&&dsec<=0){
		document.getElementById('note').innerHTML=note;
		document.getElementById('note').style.display="block";
		document.getElementById('countdown').style.display="none";
		clearTimeout(startTimer);
		return;
	}
	else {
		document.getElementById('note').style.display="none";
		document.getElementById('timer').style.display="block";
		startTimer = setTimeout("countdown(theyear,themonth,theday,thehour,theminute)",500);
	}
	convert(dday,dhour,dmin,dsec);
}

function convert(d,h,m,s) {
	if (!document.images) return;
	if (d <= 9) {
		document.images.day1.src = bkgd.src;
		document.images.day2.src = bkgd.src;
		document.images.day3.src = eval("d"+d+".src");
	}
	else if (d <= 99) {
		document.images.day1.src = bkgd.src;
		document.images.day2.src = eval("d"+Math.floor(d/10)+".src");
		document.images.day3.src = eval("d"+(d%10)+".src");
	}
	else {
		document.images.day1.src = eval("d"+Math.floor(d/100)+".src");
		var day = d.toString();
		day = day.substr(1,1);
		day = parseInt(day);
		document.images.day2.src = eval("d"+day+".src");
		document.images.day3.src = eval("d"+(d%10)+".src");
	}
	if (h <= 9) {
		document.images.h1.src = d0.src;
		document.images.h2.src = eval("d"+h+".src");
	}
	else {
		document.images.h1.src = eval("d"+Math.floor(h/10)+".src");
		document.images.h2.src = eval("d"+(h%10)+".src");
	}
	if (m <= 9) {
		document.images.m1.src = d0.src;
		document.images.m2.src = eval("d"+m+".src");
	}
	else {
		document.images.m1.src = eval("d"+Math.floor(m/10)+".src");
		document.images.m2.src = eval("d"+(m%10)+".src");
	}
	if (s <= 9) {
		document.images.s1.src = d0.src;
		document.images.s2.src = eval("d"+s+".src");
	}
	else {
		document.images.s1.src = eval("d"+Math.floor(s/10)+".src");
		document.images.s2.src = eval("d"+(s%10)+".src");
	}
}
</script>

<div id="holder">
	<div id="timer">
		<div id="note"></div>
		<div id="countdown">
			<img height=50 src="digital-numbers/bkgd.gif" width=38 name="day1">
			<img height=50 src="digital-numbers/bkgd.gif" width=38 name="day2">
			<img height=50 src="digital-numbers/bkgd.gif" width=38 name="day3">
			<img height=50 id="colon1" src="digital-numbers/colon.png" width=21 name="d1">
			<img height=50 src="digital-numbers/bkgd.gif" width=38 name="h1">
			<img height=50 src="digital-numbers/bkgd.gif" width=38 name="h2">
			<img height=50 id="colon2" src="digital-numbers/colon.png" width=21 name="g1">
			<img height=50 src="digital-numbers/bkgd.gif" width=38 name="m1">
			<img height=50 src="digital-numbers/bkgd.gif" width=38 name="m2">
			<img height=50 id="colon3" src="digital-numbers/colon.png" width=21 name="j1">
			<img height=50 src="digital-numbers/bkgd.gif" width=38 name="s1">
			<img height=50 src="digital-numbers/bkgd.gif" width=38 name="s2">
			<div id="title">
				<div class="title" style="position: absolute; top: 65px; left: 55px">DAYS</div>
				<div class="title" style="position: absolute; top: 65px; left: 175px">HRS</div>
				<div class="title" style="position: absolute; top: 65px; left: 295px">MIN</div>
				<div class="title" style="position: absolute; top: 65px; left: 415px">SEC</div>
			</div>
		</div>
	</div>
</div>