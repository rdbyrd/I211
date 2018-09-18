// stores the reference to the XMLHttpRequest object
var xmlHttp;

//player's score
var score = 100;

//is the game over?
var is_game_over = false;

//DOM objects
var messageObj, scoreObj, guessObj;

//this function creates a XMLHttpRequest object. It should work with most types of browsers.
function createXmlHttpRequestObject() {
    // create a XMLHttpRequest object compatible to most browsers
    if (window.ActiveXObject) {
        return new ActiveXObject("Microsoft.XMLHTTP");
    } else if (window.XMLHttpRequest) {
        return new XMLHttpRequest();
    } else {
        alert("Error creating the XMLHttpRequest object.");
        return false;
    }
}

//this function monitors keystrokes. When the Enter key is pressed, invoke the play function.
window.onkeyup = function (e) {
    // get the event for different browsers
    e = (!e) ? window.event : e;

    //if the Enter key is pressed
    if (e.keyCode === 13) {
        play();
    }
};

//when the browser finishes loading the web page, execute the following code
window.onload = function () {
    //DOM objects
    messageObj = document.getElementById("divMessage");
    scoreObj = document.getElementById("score");
    guessObj = document.getElementById("guess");

    //create a XMLHttpRequest object
    xmlHttp = createXmlHttpRequestObject();
};

/*
 * Validate player's input to make sure it is an integer between 1 and 100.
 * It also updates the score and displays error messages.
 * If player's guess is valid, it then make asynchronous HTTP request. 
 * This function is called when the player makes a guess.
 */
function play() {
    //continue if the game is still on
    if (is_game_over) {
        return false;
    }

    //retrieve player's guess from the input textbox
    var guess = guessObj.value;

    //if player's guess is invalid, display an error message
    if (guess < 1 || guess > 100) {
        //display the message
        messageObj.innerHTML = "Please enter a number between 1 and 100.";
        return false;
    }
    //proceed since player's guess is valid
    score -= 5; //5 points are deducted for each guess

    //display the score
    scoreObj.innerHTML = score;

    if (score === 0) { //game is over. The player lost.
        is_game_over = true;

        //display the message
        messageObj.innerHTML = "You lost the game. Click 'Reload' to try it again.";
        return false;
    }

    guessObj.focus();  //set the focus
    guessObj.value = ''; //clear the value

    /*************  complete the ajax code below   *******************/

    // define an ajax request
    xmlHttp.open("GET", "guess.php?guess=" + guess, true);
    

    // call back function that handles server responses
    xmlHttp.onreadystatechange = function() {
        
    }

    // make the request to the server
    xmlHttp.send(null);
}
