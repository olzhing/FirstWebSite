

<?php
    $servername = 'localhost';
    $username = 'root';
    $pasword = '';
    //collect data from DB to array 
    try{
        // SELECT ALL PRODUCTS
        $conn = new PDO("mysql:host=$servername;dbname=uni", $username, $pasword);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->query("SELECT * FROM message");
        $universities = array();
        while($uni = $stmt->fetch(PDO::FETCH_ASSOC)){
            $universities[] = $uni;
        }

        echo json_encode($universities);
    }catch(PDOException $e){
        echo "Connection failed " .$e->getMessage();
    }

?>  