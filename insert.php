<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['name']) && isset($_POST['mail']) &&
        isset($_POST['phn']) && isset($_POST['sub']) &&
        isset($_POST['mess'])) {
        
        $name = $_POST['name'];
        $mail = $_POST['mail'];
        $phn = $_POST['phn'];
        $sub = $_POST['sub'];
        $mess = $_POST['mess'];

        $host = "localhost";
        $dbUsername = "id17830894_shantonu";
        $dbPassword = "Yasinmia1@@@";
        $dbName = "id17830894_submit";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT mail FROM Submit WHERE mail = ? LIMIT 1";
            $Insert = "INSERT INTO Submit(Name, Mail, Phn, Sub, Mess) values(?,?,?,?,?)";

            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $mail);
            $stmt->execute();
            $stmt->bind_result($mail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;

            if ($rnum == 0) {
                $stmt->close();
                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("ssiss",$name, $mail, $phn, $sub, $mess);
                if ($stmt->execute()) {
                    echo "New record inserted sucessfully.";
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "Someone already registers using this email.";
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        die();
    }
}
else {
    echo "Submit button is not set";
}
?>