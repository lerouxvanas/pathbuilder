<h1>home</h1>
<?php

    echo $data['title'].'<hr />';

    foreach ($data['users'] as $user) {
        echo $user->first_name . " " . $user->last_name . "<br />";
    }

    /*
    echo ROOT;
    echo "<hr />";
    if (extension_loaded('pdo')) {
        echo "PDO is enabled<hr />";
    } else {
        echo "PDO is not enabled<hr />";
    }

    if (extension_loaded('pdo_mysql')) {
        echo " PDO_MYSQL is enabled<hr />";
    } else {
        echo " PDO_MYSQL is not enabled<hr />";
    }

    $host = $_ENV['MYSQL_HOST'];
    $user = $_ENV['MYSQL_USER'];
    $password = $_ENV['MYSQL_PASSWORD'];
    $dbname = $_ENV['MYSQL_DATABASE'];

    $dsn = "mysql:host=".$host.";dbname=".$dbname;


    try {
        $conn = new PDO("mysql:host=$host;port=3306;dbname=$dbname", $user, $password);
        // Set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        echo "Connected successfully<hr />";

        // Perform query

        $sql_insert = "INSERT INTO $dbname.users (first_name, last_name, email) VALUES (:first_name, :last_name, :email);";
        
        
        $sql_create = "CREATE TABLE $dbname.users (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            first_name VARCHAR(30) NOT NULL,
            last_name VARCHAR(30) NOT NULL,
            email VARCHAR(50),
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )";
        

        $first_name = "John";
        $last_name = "Doe";
        $email = "test@example.com";

        $sql_fetch = "SELECT * FROM $dbname.users";
        $stm = $conn->prepare($sql_fetch);
        $stm->execute();
        //$stm->execute(['first_name' => $first_name, 'last_name' => $last_name, 'email' => $email]);
        //$stm->execute(['first_name' => 'Henning', 'last_name' => 'van As', 'email' => 'henning@example.com']);
        //$stm->execute(['first_name' => 'Leroux', 'last_name' => 'van As', 'email' => 'leroux@example.com']);

        
        $users = $stm->fetchAll();

        foreach ($users as $user) {
            echo $user->first_name . " " . $user->last_name . "<br />";
        }
        

       
    } catch(PDOException $e) {
        echo "Connection failed::::: " . $e->getMessage();
    }
    */
?>

