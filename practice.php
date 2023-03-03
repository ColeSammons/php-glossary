<?php declare(strict_types=1); ?> <!-- strict requirement -->
<!-- echo -->
<h1>
    <?php
    $var = 'Hello World';
    echo $var;
    ?>
</h1>
<!-- shorthand echo -->
<?='<p>Hello World</p>'; ?>

<!-- Concat two strings -->
<?php echo 'Hello, ' . $name; ?>
<!-- Or place it inside "" -->
<?php
echo "Hello, $name"
    ?>