<?php
    require_once "Demo.php";
    $demo = new Demo();
    $res = $demo->demo();
?>

<form action="" method="post">
<table border="1">
    <tr>
        <th>Starting Number</th>
        <td><input type="text" name="start_number"></td>
    </tr>
    <tr>
        <th>Ending Number</th>
        <td><input type="text" name="ending_number"></td>
    </tr>

    <tr>
        <th></th>
        <td>
             <input type="radio" name="check" value="odd"> Odd
             <input type="radio" name="check" value="even"> Even
        </td>
    </tr>
    <tr>
        <th>Result</th>
        <td>
            <textarea rows="5" cols="30">

                <?php echo $res; ?>

            </textarea>
        </td>
    </tr>
    <tr>
        <th></th>
        <td><input type="submit" name="btn" value="Submit"></td>
    </tr>
</table>
</form>