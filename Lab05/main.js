/* Author: Ryan Byrd
 * Date: 9/27/2018
 * Name: main.js
 * Description: this is the javascript file for the application.
 */
var xmlHttp;  //xmlhttprequest object

//create an XMLHttpRequest object when the web page loads
window.onload = function () {
    xmlHttp = createXmlHttpRequestObject();
};

//this function creates a XMLHttpRequest object. It should work with most types of browsers.
function createXmlHttpRequestObject() {
    // create a XMLHttpRequest object compatible to most browsers
    if (window.ActiveXObject) {

        //Ensure the code works for IE5 and IE6
        return new ActiveXObject("Microsoft.XMLHTTP");

        //Ensure the code works for modern browsers
    } else if (window.XMLHttpRequest) {
        return new XMLHttpRequest();

        //return an error if the browser is incompatible.
    } else {
        alert("Error creating the XMLHttpRequest object.");
        return false;
    }
}

/******************************************************************************
 * Handle key press event.
 *****************************************************************************/
function handlekeyup(e) {
    //retreieve user input from the textbox
    var zipcode = trim(document.getElementById('zipcode').value);

    //clear all when the zip code box is empty.
    if (zipcode.length === 0) {
        error("");
        clear();
        return;
    }

    //if the zip code does not contain 5 digits, it is not a valid zip.
    if (!zipcode.match(/\b\d{5}\b/g)) {
        error("Zipcode not valid.");
        clear();
        return;
    }

    //if a number key or enter is pressed, call the process function
    var e = e || window.event; // get the event for different browsers
    var keycode = e.which || e.keyCode;
    if ((keycode >= 48 && keycode <= 57) || (keycode >= 96 && keycode <= 105) || keycode === 13) {
        process(zipcode);
    }
    return;
}

/*
 * This function makes asynchronous HTTP request using the XMLHttpRequest object.
 * It passes a zip code to a server-side script for processing.
 * This function is invoked by the handlekeyup function when a keystroke is detected.
 */
function process(zip)
{
//    add your code here to process ajax requests and handle server's responses
    // open an asynchronous request to the server. Get resposnse from zip_lookup.php
    xmlHttp.open("GET", "zip_lookup.php?zip=" + zip, true);

    //handle server's responses
    xmlHttp.onreadystatechange = function () {
        // proceed only if the transaction has completed and the transaction completed successfully
        if (xmlHttp.readyState === 4 && xmlHttp.status === 200) {

            // extract the JSON received from the server
            var resultJSON = JSON.parse(xmlHttp.responseText);
            var result = resultJSON.result;
            
            //report errors
            if (resultJSON.hasOwnProperty("error") === true) {
                clear();
                error(resultJSON.error);
            } else {
                display(resultJSON);
                error("");
            }
        }
    };
    // make the request
    xmlHttp.send(null);
}
;

/*
 * This function accepts a JSON object containing geographical information
 * and display it in an HTML table.
 */
function display(resultJSON) {

    //add your code here to retrieve data from an JSON object and then display them in a table
    //output all properties for each zipcode
    document.getElementById("state").innerHTML = resultJSON.state;
    document.getElementById("county").innerHTML = resultJSON.county;
    document.getElementById("city").innerHTML = resultJSON.primary_city;
    document.getElementById("area_code").innerHTML = resultJSON.area_code;
    document.getElementById("population").innerHTML = resultJSON.irs_estimated_population;
    document.getElementById("time_zone").innerHTML = resultJSON.timezone;
    document.getElementById("latitude").innerHTML = resultJSON.latitude;
    document.getElementById("longitude").innerHTML = resultJSON.longitude;
}


/*
 * This function clears the geographical information in the second column. 
 * This function is invoked by the handlekeyup function when the zip code 
 * a user has entered contains less than 5 digits or when the delete or backspace 
 * key is pressed.
 */
function clear() {
    //add your code here to clear the geographical information in the HTML table
    //clear all properties when data is wiped
    document.getElementById("state").innerHTML = "";
    document.getElementById("county").innerHTML = "";
    document.getElementById("city").innerHTML = "";
    document.getElementById("area_code").innerHTML = "";
    document.getElementById("population").innerHTML = "";
    document.getElementById("time_zone").innerHTML = "";
    document.getElementById("latitude").innerHTML = "";
    document.getElementById("longitude").innerHTML = "";
}

//This function displays an error message (the argument) in the div block whose id is "message".  
function error(err) {
    //add your code here to display "err" in a web element whose ID is "message". 
    document.getElementById('message').innerHTML = err;
}

/* A home-made trim function that removes leading and
 * trailing white space characters from a string
 */
function trim(str) {
    return str.replace(/^\s\s*/, '').replace(/\s\s*$/, '');
}
