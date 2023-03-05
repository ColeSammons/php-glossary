<?php
    $title = 'POST Input';

    include('../inc/header.php');
    require_once('../inc/functions.php');
    
    // Good for only one form
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

        if($email == false) {
            $status = 'Please enter a valid email';
        }

        // retreives from the name of input
        $_POST['email'];
        output($_POST);
    }

     // Good for multiple forms
    //  if(isset($_POST['login'])) {
    //     // retreives from the name of input
    //     $_POST['email'];
    //     output($_POST);
    // }

?>

<h1>
    <?= $title ?>
</h1>

<form action="" method="POST">
    <div>
        <label for="email">Email:</label>
        <input class="form-control" type="text" name='email' id='email'>
    </div>
    <br>
    <div>
        <label for="password">Password:</label>
        <input class="form-control" type="text" name='password' id='password'>
    </div>
    <br>
    <div>
        <input type="submit" value="Login" name="login">
    </div>
</form>
<p><?php
    if(isset($status)) {
        echo $status;
    }
?></p>

<?php include('./../inc/footer.php'); ?>