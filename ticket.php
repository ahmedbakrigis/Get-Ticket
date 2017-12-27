<!DOCTYBE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>GetTaket</title>
    <link href="materialize.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

</head>
<body style="margin-top: 200px" class="blue-grey">
<div class="container">
 <form class="card-panel" action="" method="post">
  <div class="card-title">
   <h2 class="center-align red-text">Get Tacket</h2>
  </div>
 <div class="card-content">
  <div class="row">
   <div class="col m6">
    <label for="input-1">Enter Your Name</label>
    <input type="text" id="input-1" name="user">
   </div>
   <div class="col m6">
      <label for="input-2">Enter Your Age</label>
      <input type="text" id="input-2" name="age">
   </div>
  </div>
  <div class="card-action">
   <div class="row">
    <div class="col m6 offset-m3">
     <button class="btn btn-block orange white-text center " name="add">Send</button>
    </div>
   </div>
  </div>
 </div>
 </form>
</div>
<?php
if (isset($_POST['add'])) {
    $name = $_POST['user'];
    $age = $_POST['age'];
    $errors = array();
    function getticket($user, $age)
    {
        $TacketID = rand(1, 1000);
        if ($age >= 21) {
            $msg = "Well Come " . $user . "<br>";
            $msg .= "You Can Come This Party" . "<br>";
            $msg .= "Your Ticket ID IS <span class='red-text'>[ " . $TacketID . "]</span>" . "<br>";
        } else {
            $msg = "Sorry " . $user . "You Cant Come This Party";
        }
        return $msg;
    }

    ?>
    <?php
    if (empty(@$name) || empty(@$age)) {
        $errors[] = "All Field Required";
        if (isset($errors)) {
            foreach ($errors as $error) {
                echo ' <div class="red white-text center-align">' . @$error . '</div>';
            }
        }
    } else {
        ?>
        <div class="container">
            <div class="light-blue">
                <?php
                $ticket=getticket($name,$age);
                echo '<div class="orange white-text center-align">'.$ticket.'</div>';

                ?>
            </div>
        </div>
        <?php
    }
}
?>
<script src="jquery-3.1.1.min.js"></script>
<script src="materialize.min.js"></script>
<script src="main.js"></script>
<script src="qoution.js"></script>
</body>
</html>