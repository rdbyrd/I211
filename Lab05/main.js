/* Author: Louie Zhu
 * Date: 1/29/2017
 * Name: main.js
 * Description: this is the javascript file for the application.
 */
var xmlHttp;  //xmlhttprequest object

//create an XMLHttpRequest object when the web page loads
window.onload = function () {
    xmlHttp = createXmlHttpRequestObject(); 
};



//this function creates a XMLHttpRequest object. It should work with most types of browsers.
function createXmlHttpRequestObject()
{
	// add your code here to create a XMLHttpRequest object compatible to most browsers

        if(window.ActiveXObject) // For Internet Explorer 6 or older
        return new ActiveXObject("Microsoft.XMLHTTP");
    
        else if(window.XMLHttpRequest) //For IE7+ and other browsers
        return new XMLHttpRequest();
    
        return false; // Failed to create the object
}

/******************************************************************************
 * Handle key press event.
 *****************************************************************************/
function handlekeyup(e) {
    //retreieve user input from the textbox
    var zipcode = trim(document.getElementById('zipcode').value);
    
    //clear all when the zip code box is empty.
    if(zipcode.length === 0) {
        error("");
        clear();
        return;
    } 
    
    //if the zip code does not contain 5 digits, it is not a valid zip.
    if(!zipcode.match(/\b\d{5}\b/g)) {
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
	//add your code here to process ajax requests and handle server's responses
        
	
}

/*
 * This function accepts a JSON object containing geographical information
 * and display it in an HTML table.
 */
function display(zip_result) {
    //add your code here to retrieve data from an JSON object and then display them in a table
}

/*
 * This function clears the geographical information in the second column. 
 * This function is invoked by the handlekeyup function when the zip code 
 * a user has entered contains less than 5 digits or when the delete or backspace 
 * key is pressed.
 */
function clear() {
	//add your code here to clear the geographical information in the HTML table
}

//This function displays an error message (the argument) in the div block whose id is "message". 
function error(err) {
   //add your code here to display "err" in a web element whose ID is "message". 
}

/* A home-made trim function that removes leading and
 * trailing white space characters from a string
 */
function trim(str) {
    return str.replace(/^\s\s*/, '').replace(/\s\s*$/, '');
}