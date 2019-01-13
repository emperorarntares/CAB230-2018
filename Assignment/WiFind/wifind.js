function validateForm() 
{
	// Variables for input names.
    var userName = document.forms["form"]["username"].value;
	var email = document.forms["form"]["email"].value;
	var password = document.forms["form"]["password"].value;
	var confirm_password = document.forms["form"]["confirm-password"].value;
	
	var checkbox = document.getElementById('ticked');
	var genderSelected = document.getElementById('gender');

	// Regex validation.
	var regEmail = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	var regName = /^[a-z0-9]+$/i;
	
	var valid = true;
	// If field is blank.
    if (userName == "")
	{
		document.getElementById("username").style.border="1px solid red";
        document.getElementById("error-name").innerHTML = "*Please fill out your username.";

        valid = false;
    }
	
	if (email == "")
	{
		document.getElementById("email").style.border="1px solid red";
        document.getElementById("error-email").innerHTML = "*Please fill out your email.";
        valid = false;
    }
	
	// If field has invalid characters (@$#).
	if (regName.test(form.username.value) == false) 
    {
		document.getElementById("username").style.border="1px solid red";
        document.getElementById("error-name").innerHTML = "*Please enter a valid username.";
        valid = false;
    }
	
	if (regEmail.test(form.email.value) == false) 
    {
		document.getElementById("email").style.border="1px solid red";
        document.getElementById("error-email").innerHTML = "*Please enter a valid email address.";
        valid = false;
    }
	
	// If field is blank.
	if (password == "")
	{
		document.getElementById("password").style.border="1px solid red";
        document.getElementById("error-password").innerHTML = "*Password is empty.";
        valid = false;
    }
	
	if (confirm_password == "")
	{
		document.getElementById("confirm-password").style.border="1px solid red";
        document.getElementById("error-confirm-password").innerHTML = "*Password is empty.";
        valid = false;
    }
	
	// If passwords don't match then do not pass page.
	if (document.getElementById('password').value != document.getElementById('confirm-password').value)
	{
		valid = false;
	}
	
	// If password is less than 6 characters
	if (password.length < 6 && confirm_password.length)
	{
		document.getElementById("password").style.border="1px solid red";
		document.getElementById("confirm-password").style.border="1px solid red";
		document.getElementById("error-confirm-password").innerHTML = "*Password must be at least 6 characters.";
		
		valid = false;
	}
	
	// Gender select
	if (male.checked == false && female.checked == false)
	{
		alert('Please select your gender.');
		valid = false;
	}
	
	// Terms and conditions
	if (checkbox.checked == false)
	{
		alert('You have not agreed to the Terms of Use & Privacy Policy.');
		valid = false;
	}
	
	
	// If all is valid, then page processes
	
	return valid;
}

var check = function errorValidator() 
{
	// Store local arrays here */
	var validator = ["password","confirm-password"];
	var clear_error = ["error-password", "error-confirm-password"];
	var nameArray = ["username", "email"];
	var errorArray = ["error-name","error-email"];

	// Password conditions
	if (document.getElementById('password').value == document.getElementById('confirm-password').value)
	{	
		for (var i = 0; i < validator.length; i++) 
		{
			document.getElementById(validator[i]).style.border="1px solid silver";
		}
		
		for (var i = 0; i < clear_error.length; i++) 
		{
			document.getElementById(clear_error[i]).innerHTML = '';
		}
	} 
	else 
	{
		for (var i = 0; i < validator.length; i++) 
		{
			document.getElementById(validator[i]).style.border="1px solid red";
		}
		
		document.getElementById('error-confirm-password').style.color = 'red';
		document.getElementById('error-confirm-password').innerHTML = '*Passwords do not match.';
	}
	// clear error msg
	for (var i = 0; i < nameArray.length; i++) 
	{
		if (document.getElementById(nameArray[i]).value > "")
		{
			document.getElementById("error").innerHTML = "";
		}
	}

	// When blank form is being filled.
	for (var i = 0; i < nameArray.length; i++) 
	{
		if (document.getElementById(nameArray[i]).value > "")
		{
			for (var i = 0; i < nameArray.length; i++) 
			{
				document.getElementById(nameArray[i]).style.border="1px solid silver";
			}
			for (var i = 0; i < errorArray.length; i++) 
			{
				document.getElementById(errorArray[i]).innerHTML = "";
			}
		}
	}
}

function validateFormLogin() 
{
	// Variables for input names.
    var userName = document.forms["form"]["username"].value;
	var password = document.forms["form"]["password"].value;
	
	var valid = true;
	// If field is blank.
    if (userName == "")
	{
		document.getElementById("username").style.border="1px solid red";
        document.getElementById("error-name").innerHTML = "*Username/Email is required.";

        valid = false;
    }
	
	if (password == "")
	{
		document.getElementById("password").style.border="1px solid red";
        document.getElementById("error-password").innerHTML = "*Password is required.";
        valid = false;
    }
	
	// If all is valid, then page processes
	return valid;
	
}

var checkLogin = function errorValidatorLogin() 
{
	
	// When blank form is being filled.
	var nameArray = ["username", "password"];
	var errorArray = ["error","error-name","error-password"];
	
	for (var i = 0; i < nameArray.length; i++) 
	{
		if (document.getElementById(nameArray[i]).value > "")
		{
			for (var i = 0; i < nameArray.length; i++) 
			{
				document.getElementById(nameArray[i]).style.border="1px solid silver";
			}
			for (var i = 0; i < errorArray.length; i++) 
			{
				document.getElementById(errorArray[i]).innerHTML = "";
			}
		}
	}
}

// Script for profile
function myGender() {
    var str = document.getElementById("genderID").innerHTML; 
	if(str == "Gender: 0"){
		var res = str.replace("0", "Male");
	}
	else {
		var res = str.replace("1", "Female");
	}
	
    document.getElementById("genderID").innerHTML = res;
}

// Script for geolocation

function showMapReview() {
	var latitude = document.getElementById("latR").innerHTML;
	var longitude = document.getElementById("longR").innerHTML;
	
	var mymap = L.map('mapReview').setView([latitude, longitude], 15);

	L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		maxZoom: 18,
		id: 'mapbox.streets',
		accessToken: 'pk.eyJ1Ijoibjk5OTQ2NTMiLCJhIjoiY2pocTFtaGxiMHR0ZTM2bXB0MnhkcmdtYiJ9.59yXFlIRHUZWHd5nPBrzdA'
	}).addTo(mymap);

	var marker = L.marker([latitude, longitude]).addTo(mymap);
}

function getLocation() {
	if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(showPosition, showError);
	} else {
		document.getElementById("status").innerHTML="Geolocation is not supported by this browser.";
	}
}

function showPosition(position) {
	var lat = position.coords.latitude;
	var lon = position.coords.longitude;
	window.location.href="results.php?lat=" + lat + "&lon=" + lon;
}

function showError(error) {
	var msg = "";
	switch(error.code) {
		case error.PERMISSION_DENIED:
			msg = "User denied the request for Geolocation."
			break;
		case error.POSITION_UNAVAILABLE:
			msg = "Location information is unavailable."
			break;
		case error.TIMEOUT:
			msg = "The request to get user location timed out."
			break;
		case error.UNKNOWN_ERROR:
			msg = "An unknown error occurred."
			break;
	}
	document.getElementById("status").innerHTML = msg;
}

//Creating a map with multiple markers
function map(){
	var mymap = L.map('mapid').setView([document.getElementById("lat1").innerHTML, document.getElementById("long1").innerHTML], 9);
	var i;
	var marker = [];
	var Click = [onClick0, onClick1, onClick2, onClick3, onClick4, onClick5, onClick6, onClick7, onClick8, onClick9];
	var a = 1;
	for(i = 0; i <= (document.getElementsByClassName('lat').length) - 1; i++) {
		var latitude = document.getElementById("lat" + a).innerHTML;
		var longitude = document.getElementById("long" + a).innerHTML;
		marker[i] = L.marker([latitude,longitude]);
		marker[i].addTo(mymap);
		marker[i].on('click', Click[i]);
		a = a + 1;
	}

	L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		maxZoom: 18,
		id: 'mapbox.streets',
		accessToken: 'pk.eyJ1Ijoibjk5OTQ2NTMiLCJhIjoiY2pocTFtaGxiMHR0ZTM2bXB0MnhkcmdtYiJ9.59yXFlIRHUZWHd5nPBrzdA'
	}).addTo(mymap);

}

function onClick0(e) {
	window.open("review.php?name=" + document.getElementById("locName1").innerHTML);
	}
function onClick1(e) {
	window.open("review.php?name=" + document.getElementById("locName2").innerHTML);
	}
function onClick2(e) {
	window.open("review.php?name=" + document.getElementById("locName3").innerHTML);
	}
function onClick3(e) {
	window.open("review.php?name=" + document.getElementById("locName4").innerHTML);
	}
function onClick4(e) {
	window.open("review.php?name=" + document.getElementById("locName5").innerHTML);
	}
function onClick5(e) {
	window.open("review.php?name=" + document.getElementById("locName6").innerHTML);
	}
function onClick6(e) {
	window.open("review.php?name=" + document.getElementById("locName7").innerHTML);
	}
function onClick7(e) {
	window.open("review.php?name=" + document.getElementById("locName8").innerHTML);
}
function onClick8(e) {
	window.open("review.php?name=" + document.getElementById("locName9").innerHTML);
}
function onClick9(e) {
	window.open("review.php?name=" + document.getElementById("locName10").innerHTML);
}








