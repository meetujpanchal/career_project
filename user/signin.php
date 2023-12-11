<html><head><script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js" nonce="8d6b0d9a-dd9e-4437-a827-b811fd4b4210"></script><script defer="" src="/cdn-cgi/zaraz/s.js?z=JTdCJTIyZXhlY3V0ZWQlMjIlM0ElNUIlNUQlMkMlMjJ0cmFja3MlMjIlM0ElNUIlNUQlMkMlMjJ0JTIyJTNBJTIyRm9ybS12NyUyMGJ5JTIwQ29sb3JsaWIlMjIlMkMlMjJ3JTIyJTNBMTM2NiUyQyUyMmglMjIlM0E3NjglMkMlMjJqJTIyJTNBNjE3JTJDJTIyZSUyMiUzQTEzNjYlMkMlMjJsJTIyJTNBJTIyaHR0cHMlM0ElMkYlMkZjb2xvcmxpYi5jb20lMkZldGMlMkZyZWdmb3JtJTJGY29sb3JsaWItcmVnZm9ybS0zMyUyRiUyMiUyQyUyMnIlMjIlM0ElMjJodHRwcyUzQSUyRiUyRmNvbG9ybGliLmNvbSUyRndwJTJGYm9vdHN0cmFwLWZvcm0tdmFsaWRhdGlvbiUyRiUyMiUyQyUyMmslMjIlM0EyNCUyQyUyMm4lMjIlM0ElMjJVVEYtOCUyMiUyQyUyMm8lMjIlM0EtMzMwJTdE"></script><script nonce="8d6b0d9a-dd9e-4437-a827-b811fd4b4210">(function(w,d){!function(a,e,t,r){a.zarazData=a.zarazData||{},a.zarazData.executed=[],a.zarazData.tracks=[],a.zaraz={deferred:[]},a.zaraz.track=(e,t)=>{for(key in a.zarazData.tracks.push(e),t)a.zarazData["z_"+key]=t[key]},a.zaraz._preSet=[],a.zaraz.set=(e,t,r)=>{a.zarazData["z_"+e]=t,a.zaraz._preSet.push([e,t,r])},a.addEventListener("DOMContentLoaded",(()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r),n=e.getElementsByTagName("title")[0];n&&(a.zarazData.t=e.getElementsByTagName("title")[0].text),a.zarazData.w=a.screen.width,a.zarazData.h=a.screen.height,a.zarazData.j=a.innerHeight,a.zarazData.e=a.innerWidth,a.zarazData.l=a.location.href,a.zarazData.r=e.referrer,a.zarazData.k=a.screen.colorDepth,a.zarazData.n=e.characterSet,a.zarazData.o=(new Date).getTimezoneOffset(),z.defer=!0,z.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData))),t.parentNode.insertBefore(z,t)}))}(w,d,0,"script");})(window,document);</script>
<meta charset="utf-8">
<title>Form-v7 by Colorlib</title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" type="text/css" href="css/opensans-font.css">
<link rel="stylesheet" type="text/css" href="fonts/line-awesome/css/line-awesome.min.css">

<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">

<link rel="stylesheet" href="css/style.css">
<meta name="robots" content="noindex, follow">
</head>
<body class="form-v7">
<div class="page-content">
<div class="form-v7-content">
<div class="form-left">
<img src="images/form-v7.jpg" alt="form">
<p class="text-1">Sign Up</p>
<p class="text-2">Privaci policy &amp; Term of service</p>
</div>
<form class="form-detail" action="#" method="post" id="myform" novalidate="novalidate">
<div class="form-row">
<label for="username">USERNAME</label>
<input type="text" name="username" id="username" class="input-text">
</div>
<div class="form-row">
<label for="your_email">E-MAIL</label>
<input type="text" name="your_email" id="your_email" class="input-text" required="" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" aria-required="true">
</div>
<div class="form-row">
<label for="password">PASSWORD</label>
<input type="password" name="password" id="password" class="input-text" required="" aria-required="true">
</div>
<div class="form-row">
<label for="comfirm_password">CONFIRM PASSWORD</label>
<input type="password" name="comfirm_password" id="comfirm_password" class="input-text" required="" aria-required="true">
</div>
<div class="form-row-last">
<input type="submit" name="register" class="register" value="Register">
<p>Or<a href="#">Sign in</a></p>
</div>
</form>
</div>
</div>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script>
		// just for the demos, avoids form submit
		jQuery.validator.setDefaults({
		  	debug: true,
		  	success:  function(label){
        		label.attr('id', 'valid');
   		 	},
		});
		$( "#myform" ).validate({
		  	rules: {
			    your_email: {
			      	required: true,
			      	email: true
			    },
			    password: "required",
		    	comfirm_password: {
		      		equalTo: "#password"
		    	}
		  	},
		  	messages: {
		  		username: {
		  			required: "Please enter an username"
		  		},
		  		your_email: {
		  			required: "Please provide an email"
		  		},
		  		password: {
	  				required: "Please provide a password"
		  		},
		  		comfirm_password: {
		  			required: "Please provide a password",
		      		equalTo: "Wrong Password"
		    	}
		  	}
		});
	</script>

<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer="" src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon="{&quot;rayId&quot;:&quot;6f81a774f8a66eb9&quot;,&quot;token&quot;:&quot;cd0b4b3a733644fc843ef0b185f98241&quot;,&quot;version&quot;:&quot;2021.12.0&quot;,&quot;si&quot;:100}" crossorigin="anonymous"></script>

</body></html>