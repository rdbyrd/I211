<strong>Enter coordinates and radius of the circle: </strong>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
    <table>
        <tr>
            <td> X coordinate:</td>
            <td><input type="number" name="xCoord" value="" required /></td>
        </tr>
        <tr>
            <td>Y coordinate: </td>
            <td><input type="number" name="yCoord" value="" required /> </td>
        </tr>
        <tr>
            <td>Radius: </td>
            <td><input type="number" name="radius" value=""  step=".1" required /></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" value="Submit" /></td>
        </tr>
    </table>
</form>