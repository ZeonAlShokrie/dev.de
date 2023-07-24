<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="stylePHP.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
<style>

</style>

    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    require("./PHP-HTML-CSS/ProjectNr.2/Test.php");
    require("./PHP-HTML-CSS/ProjectNr.2/orders.php");

        class AppleDevice{
            public $ram;
            public $storage;
            public $color;
        }
        $iphone14proMax = new AppleDevice();
        $iphone14proMax ->ram ="4GB";
        $iphone14proMax ->storage ="64GB";
        $iphone14proMax ->color ="Black";
        echo "<pre>";
        var_dump($iphone14proMax);

        $iphone15proMax = new AppleDevice();
        var_dump($iphone15proMax);
        $foo = new Test();
        $foo->setName("Hallo");
        $foo->setCat("Bye"  );
        var_dump($foo);
        echo $foo->getName();
        echo $foo->getCat();

        $order = new orders();
        $order
            ->setCustomerID(2)
            ->setCustomerName("Zeon")
            ->setContactName("Zainalabedin")
            ->setAddress("Auricher Weg 20")
            ->setCity("Friedeburg")
            ->setPostalCode(26446)
            ->setCountry("germany");
            var_dump($order);
            echo "</pre>";

    ?>
</body>
</html>