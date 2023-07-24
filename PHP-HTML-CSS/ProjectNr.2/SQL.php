 <link rel="stylesheet" href="style-Contact-Me.css" />

<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$mysqli = new mysqli("lxdatav2.ectgroup.de", "entp", "-úà5ÉR¦Ã©am0èþþþjHÄ³", "praktikum");
if ($mysqli->connect_errno) {
    die("Verbindung fehlgeschlagen: " . $mysqli->connect_error );
}

print_r($_POST);
if (!empty($_POST) && !isset($_POST['CustomerID'])) {
    $mysqli->query("INSERT INTO CustomersList
    SET CustomerName ='".$_POST['CustomerName']."' ,
	    ContactName	= '".$_POST['ContactName']."',
	    Address= '".$_POST['Address']."',
	    City='".$_POST['City']."',
	    PostalCode= '".$_POST['PostalCode']."',
	    Country='".$_POST['Country']."'");
}

if (isset($_POST['CustomerID'])) {
    $CustomerID=$_POST['CustomerID'];
    $mysqli->query( "DELETE FROM CustomersList WHERE CustomerID = $CustomerID");
}


/*
$servername = "lxdatav2.ectgroup.de";
$username = "entp";
$password = "-úà5ÉR¦Ã©am0èþþþjHÄ³";
$dbname = "praktikum";
*/

?>

<style>
    table {
        border-collapse: collapse; /* setz die Tabelle zusammen */
        width: 100%;
    }
    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 20px;

    }

</style>
<table>

    <?php

    $result = $mysqli->query("SELECT * FROM CustomersList");
    $array = $result->fetch_all(MYSQLI_ASSOC);
    print_r($array[0]);
    foreach ($array[0] as $key => $value) {
        echo "<th>$key</th>";
    }

    foreach ($array as $row) {
        echo "<tr>";
        foreach ($row as $item) {
            echo "<td>$item</td>";
        }
        echo "<td>
            <form action='SQL.php' method='post'>
            <input type='submit' value='Delete' class='insert_btn'> <input type='text' id='CustomerID' name='CustomerID' value='".$row["CustomerID"]."' hidden>
            </form></td>";
            echo "</tr>";


    }
    //while ($row = $result->fetch_assoc()) {
    //    echo " <tr>
    //        <td>".$row["Buch Nr."]."</td>
    //        <td>".$row["Name der Kunde"]."</td>
    //        <td>".$row["Kosten in €"]."</td>
    //        <td>".$row["Bestellung"]."</td>
    //    </tr>";
    // }

    ?>
    <form action="SQL.php" method="post">
    <tr>
            <th> <input type="submit" value="Insert" class="insert_btn"></th>

            <th><input type="text" id="CustomerName" name="CustomerName" value=""><br></th>
            <th><input type="text" id="ContactName" name="ContactName" value=""><br></th>
            <th><input type="text" id="Address" name="Address" value=""><br></th>
            <th><input type="text" id="City" name="City" value=""><br></th>
            <th><input type="text" id="PostalCode" name="PostalCode" value=""><br></th>
            <th><input type="text" id="Country" name="Country" value=""><br></th>


        </tr>
    </form>
</table>