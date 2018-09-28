<!--Ryan Byrd
9/27/2018
index.php
The form that processes the data that's input.-->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Zip Code Lookup</title>
        <link href="main.css" rel="stylesheet" type="text/css"/>
        <!-- link an external javascript file named main.js -->
        <script src="main.js" type="text/javascript"></script>
    </head>
    <body>
        <h2 style="text-align: center">Zip Code Lookup</h2>
        <h3 style="text-align: center">An AJAX Application for Looking up Geographical Information by Zip Code</h3>

        <div id="zipcode-input">
            <strong>Enter 5-digit zip code:</strong>
			<input maxlength="5" id="zipcode" onkeyup="handlekeyup(event)">
			<span id="message" style="color: red; margin-left: 5px"></span>
        </div>
    
            <table id="zipcode-results">
                <tr>
                    <td>State</td>
                    <td id="state"></td>
                </tr>
                <tr>
                    <td>County</td>
                    <td id="county"></td>
                </tr>
                <tr>
                    <td>City</td>
                    <td id="city"></td>
                </tr>
                <tr>
                    <td>Area Code</td>
                    <td id="area_code"></td>
                </tr>
                <tr>
                    <td>Population</td>
                    <td id="population"></td>
                </tr>
                <tr>
                    <td>Time Zone</td>
                    <td id="time_zone"></td>
                </tr>
                <tr>
                    <td>Latitude</td>
                    <td id="latitude"></td>
                </tr>
                <tr>
                    <td>Longitude</td>
                    <td id='longitude'></td>
                </tr>
            </table>
    </body>
</html>
