<?php
    // die Variabels schreiben
    $FirstName = $_POST ["FirstName"];
    $Surname = $_POST ["Surname"];
    $Email = $_POST ["Email"];
    $Password = $_POST ["Password"];

    // sql Verbindung
    $conn = new mysqli("lxdatav2.ectgroup.de", "entp", "-úà5ÉR¦Ã©am0èþþþjHÄ³", "praktikum");
    if ($conn->connect_error) {
        die("Verbindung fehlgeschlagen: " . $conn->connect_error);
    }else{
        $sql = $conn->prepare("INSERT INTO LoginData(FirstName, Surname, Email, Password) values(?, ?, ?, ?)");
        $sql->bind_param("ssss" ,$FirstName, $Surname, $Email, $Password);
        $sql->execute();
        echo "Die Anmeldung ist Erfolgreich";
        $sql->close();
        $conn->close();
    }