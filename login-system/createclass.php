<?php
require 'db.php';
session_start();
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Create new class</title>
  <?php include 'css/css.html'; ?>
</head>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
  require 'classcreater.php';
}
?>
<body>
    <div class="form">

          <h1>Create new class</h1>
          
          <form action="createclass.php" method="post">
              
          <div class="field-wrap">
            <label>
              Class code(Preferably enter like "CSE2021",etc.<span class="req">*</span>
            </label>
            <input type="text"required name="classcode" autocomplete="off"/>
          </div>
              
          <div class="field-wrap">
            <label>
              Enter Passcode<span class="req">*</span>
            </label>
            <input type="password"required name="passcode" autocomplete="off"/>
          </div>     
     
          <button class="button button-block"/>Apply</button>
          
          </form>

    </div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>

</body>
</html>
