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
            echo '<a href="index.php?page=accounts&action=profilePage">Profile</a>   |   ';
            echo '<a href="index.php?page=accounts&action=logout">Logout</a>';
          }
        ?>
      </div>
    </div>
  </div>
</body>
</html>