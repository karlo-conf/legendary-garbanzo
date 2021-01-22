<html>
<head><title>Your Favorite</title></head>
<body>
    <?php
    $user = $_POST['username'];
    $wineC = $_POST['color'];
    $fdish = $_POST['dish'];
        if(empty($user)){
            echo "User is not define PLEASE add a username";
          } else{
            if(!isset($wineC)){
              echo "Wine color is not set PLEASE select color";
            }else {
              if(empty($fdish)){
                echo "PLEASE put your favorite dish";
              }else {
                echo "Thanks for your selection $user <br>";
                echo "You really enjoy $fdish <br>";
                echo "especially with a nice $wineC wine <br>";
              }
            }
          }
    ?>
</body>
</html>
