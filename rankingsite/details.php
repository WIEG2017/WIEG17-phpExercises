<?php
    $pageTitle = "Detailsidan";
    include "header.php";
    
    $selectedKey = $_GET['selected'];
    $selectedGurka = $gurkItemArray[1];
    
    ?>
<h2>Allt du behöver veta om: <?php echo $selectedGurka['name']  ?></h2>
<p>
    <?php echo $selectedGurka['description'] ?>
</p>
<?php include "footer.php" ?>