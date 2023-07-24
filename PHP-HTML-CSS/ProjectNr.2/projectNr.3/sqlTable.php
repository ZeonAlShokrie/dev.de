<link rel="stylesheet" href="../../../stylePHP.css" />
<link rel="orders" href="orders.php">
<?php
require("orders.php");
$mysqli = new mysqli("lxdatav2.ectgroup.de", "entp", "-úà5ÉR¦Ã©am0èþþþjHÄ³", "praktikum");
if ($mysqli->connect_errno) {
    die("Verbindung fehlgeschlagen: " . $mysqli->connect_error);
}

$sql = "SELECT * FROM CustomersList";
if ($result = $mysqli->query($sql)) {
    $customerList=[];
        while ($row = $result->fetch_row()) {
        print_r($row);
        $order = new orders();
        $order
            ->setCustomerID($row[0])
            ->setCustomerName($row[1])
            ->setContactName($row[2])
            ->setAddress($row[3])
            ->setCity($row[4])
            ->setPostalCode($row[5])
            ->setCountry($row[6]);
    $customerList[]=$order;
    }

}

$mysqli->close();

?>

<table>
    <thead>
    <tr>
        <th>CustomerID</th>
        <th>CustomerName</th>
        <th>ContactName</th>
        <th>Address</th>
        <th>City</th>
        <th>PostalCode</th>
        <th>Country</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($customerList as $customer) : ?>
        <tr>
            <td><?php echo $customer->getCustomerID(); ?></td>
            <td><?php echo $customer->getCustomerName(); ?></td>
            <td><?php echo $customer->getContactName(); ?></td>
            <td><?php echo $customer->getAddress(); ?></td>
            <td><?php echo $customer->getCity(); ?></td>
            <td><?php echo $customer->getPostalCode(); ?></td>
            <td><?php echo $customer->getCountry(); ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

