<html>
  <body>
  <?php
    if(isset($_POST['submit'])){
    if(!empty($_POST['blood'])) {
        $selected = $_POST['blood'];
        echo 'You have chosen: ' . $selected;
    } else {
        echo 'Please select the value.';
    }
    }
?>
  </body>
</html>