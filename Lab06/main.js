/* Author: Ryan Byrd
 * Date: 10/04/2018
 * Name: main.js
 * Description: this javascript file sends ajax request and handles server's responses.
 */

var xmlHttp;  //XMLHttpRequest object

//when the browser finishes loading the web page, execute the following code
window.onload = function () {

    // create a XMLHttpRequest object compatible to most browsers
    if (window.ActiveXObject) {
        xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
    } else if (window.XMLHttpRequest) {
        xmlHttp = new XMLHttpRequest();
    } else {
        alert("Error creating the XMLHttpRequest object.");
        xmlHttp = false;
    }
    return xmlHttp;
};

/*
 * this function does the calculation by sending an AJAX request.
 */
function calculate() {

    //establish variables for radius and height that will receive user input. 
    var radius = document.getElementById("radius").value;
    var height = document.getElementById("height").value;
    
    //if statement to make sure that all numbers input have to be above 0
    if (radius <= 0 || height <= 0) {

    //Clear inputs when input is missing
        document.getElementById("base").innerHTML = "";
        document.getElementById("volume").innerHTML = "";
        document.getElementById("lateral").innerHTML = "";
        document.getElementById("surface").innerHTML = "";

    } else {

    // open an asynchronous request to the server. cylinder.php
        xmlHttp.open("GET", "cylinder.php?radius=" + radius + "&height=" + height, true);
        
        //handle server's responses
        xmlHttp.onreadystatechange = function () {
        
            // proceed only if the transaction has completed and the transaction completed successfully
            if (xmlHttp.readyState === 4 && xmlHttp.status === 200) {

                // extract the JSON received from the server
                var resultJSON = JSON.parse(xmlHttp.responseText);
                
                //make outputs for the empty id forms on index.php
                document.getElementById("base").innerHTML = resultJSON.base;
                document.getElementById("volume").innerHTML = resultJSON.volume;
                document.getElementById("lateral").innerHTML = resultJSON.lateral;
                document.getElementById("surface").innerHTML = resultJSON.surface;

            }
        };
                // make the request
                xmlHttp.send(null);
    }
}