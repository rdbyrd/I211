<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>The Right Cylinder Application</title>
        <style>
            input {
                height: 20px;
                font-size: 11pt;
                border: 1px solid #ccc;
            }

            .details {
                width: 300px;
                height: 22px;
                border: 1px solid #ccc;
                float: right;
                line-height: 22px;
                padding-left: 2px;
                display: inline-block;
            }

        </style>
        <script src="main.js" type="text/javascript"></script>
    </head>
    <body>
        <h2 style="text-align: center">The Right Cylinder Application</h2>
        <div style="width:500px; border: 1px solid #aaa; padding: 10px; margin: 10px auto; min-height: 300px">
            <div style="height: 130px; padding-bottom: 30px; border-bottom: 1px dotted #aaa">
                <div style="width: 60%; float: left">
                    <h4>Enter radius and height:</h4>
                    Radius (r): <input id="radius" type="number" min="0.1" step="0.1" placeholder="Enter value"><br><br>
                    Height (h): <input id="height" type="number" min="0.1" step="0.1" placeholder="Enter value">
                </div>
                <div style="width: 40%; float: left; text-align: center; height: 130px;">
                    <img src="cylinder.png" alt="" style="width: 120px"/>
                </div>
            </div>
            <div style="margin-top: 30px ">
                <div class="details" id="base"></div><p>Base Area:</p>
                <div class="details" id="volume"></div><p>Volume:</p>
                <div class="details" id="lateral"></div><p>Lateral Surface:</p>
                <div class="details" id="surface"></div><p>Surface Area:</p>
            </div>
        </div>
    </body>
</html>
