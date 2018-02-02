<?php

    include "header.php";

    $selectedGurka = findGurka($_GET['selected'], $gurkItemArray);
?>
<h2>Allt du behöver veta om: <?php echo $selectedGurka['name']  ?></h2>
<p>
    <?php echo $selectedGurka['description'] ?>
</p>
<?php include "footer.php" ?>