<?php
    $title = 'Includes';

    include('../inc/header.php');
    require_once('../inc/functions.php');

    $guitars = ['Vela', 'Explorer', 'Strat'];

?>


<h1>
    <?= $title ?>
</h1>
<?php
    output($guitars);
?>

<?php include('./../inc/footer.php'); ?>