 <?php


    $dbhost = 'localhost';
    $dbname = 'capstone';
    $dbuser = 'root';
    $dbpassword = 'root';

    if ($_SERVER['HTTP_HOST'] == "duke0123.pairserver.com") {
        $dbhost = 'db178.pair.com';
        $dbname = 'duke0123_capstone';
        $dbuser = 'duke0123_3_w';
        $dbpassword = 'pV7mDUNrdBEXfhDu';
        echo 'test';
    }



    try {


        $db = new PDO(
            "mysql:host=$dbhost;dbname=$dbname;charset=utf8",
            $dbuser,
            $dbpassword
        );




        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        exit();
    };
