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
        if($_SESSION['page']!='homepage' && $_SESSION['action']!='register') {
        ?>        
        
        <?php
            echo '<div><a href="index.php?page=accounts&action=profilePage"><img src="images/Profile_pic.png" /> </div><div style="padding-left:15px;">'.$_SESSION["userName"].'</a>   |   ';
            echo '<a href="index.php?page=accounts&action=logout">Logout</a></div>';
        ?>
        
          <?php
          }
        ?>
      </div>
    </div>
  </div>
</body>
</html>