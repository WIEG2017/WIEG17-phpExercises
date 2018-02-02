<?php include "header.php" ?>

    <h2>Gurkor som är rankade:</h2>
    <ul>
        <?php
            listGurkItems($gurkItemArray);
        ?>
    </ul>
    <br/>
    <br/>
    <h3>Vad tycker jag om den här gurkan?</h3>
    <form method="GET" action="/rankingsite/details.php">
        <select name="selected">
        <?php
            listGurkOptions($gurkItemArray);
        ?>
        </select>
        <button type="submit">Ta reda på't</button>
    </form>
<?php include "footer.php" ?>