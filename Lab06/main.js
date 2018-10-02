/* Author: your name
 * Date: today's date
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
    //add your code here
}