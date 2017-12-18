<html>

<body>
  <div class="jumbotron">
    <div class="row">
      <div class="col-sm-1">
      </div>
      <div class="col-sm-8">              
        <h3>Final Project WSD!!</h3>
      </div>
      <div class="col-sm-2">        
        <?php        
        if($_SESSION['page']!='homepage' && $_SESSION['action']!='register' && $_SESSION['action']!='login') {
        ?>        
        
        <?php
            $userName='';
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            if (isset($_SESSION['userName']) && !empty($_SESSION['userName'])) {$userName=$_SESSION["userName"];
            echo '<div style="text-align:center;"><a href="index.php?page=accounts&action=profilePage"><img src="images/Profile_pic.png" width="50px;" height="50px;"/> </div><div style="text-align:center;">'.$userName.'</a>   |   ';
            echo '<a href="index.php?page=accounts&action=logout">Logout</a></div>';
            }else{
                echo '<div style="text-align:center;"><a href="index.php?page=accounts&action=profilePage"><img src="images/Profile_pic.png" width="50px;" height="50px;"/> </div><div style="text-align:center;"></a>';
                echo '<a href="index.php?page=accounts&action=logout">LogIn</a></div>';
            }
            
        ?>
        
          <?php
          }
        ?>
      </div>
    </div>
  </div>
</body>
</html>