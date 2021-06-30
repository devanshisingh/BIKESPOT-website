<?php // To accept the information of bike and insert it in database
    session_start();

    header("Content-Type: application/json; charset=UTF-8");

    $x = $_POST["data"];

    $data = json_decode($x, true);

    $reg_no = $data["reg_no"];
    $reg_year = $data["reg_year"];
    $reg_month = $data["reg_month"];
    $ownership = $data["ownership"];
    $brand = $data["brand"];
    $model = $data["model"];
    $state = $data["state"];
    $city = $data["city"];
    $price = $data["price"];

    $user_id = $_SESSION["user_id"];
    echo $user_id;

    include("connect.php");

    $sql_insert = "INSERT INTO bikes (user_id, reg_no, reg_year, reg_month, ownership, brand, model, sell_state, sell_city, sell_price, used_bike) 
                    VALUES ('$user_id', '$reg_no', '$reg_year', '$reg_month', '$ownership', '$brand', '$model', '$state', '$city', '$price', '1')";        
    $tmp = $connection->query($sql_insert);

    $sql_update = "UPDATE verified_users SET bike_id = (SELECT bike_id FROM bikes WHERE bikes.user_id = $user_id) WHERE user_id = $user_id";
    $tmp = $connection->query($sql_update);
        
    $connection -> close();
        
    //     $_SESSION['user_first_name'] = $fname;
    //     $_SESSION['user_last_name'] = $lname;
    //     $_SESSION['user_email'] = $email;
    //     $_SESSION['user_phone'] = $phone;
    //     $_SESSION['user_id'] = $row["user_id"];
    //     $_SESSION['logged_in'] = true;
    // }

    // header('location: ../home.php');

?>

