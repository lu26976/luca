<? include("../controllers/menu.php"); ?>
<? include("../controllers/menu_scroll.php"); ?>
<html>
    <head>
        <link href="../static/main.css" rel="stylesheet" type="text/css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <div id="wrapper">
            <div id="content">
                <?php include("../template/header.php"); ?>
                <div id="hobby">
                    i miei hobby sono vari madiciamo che i principali sono
                    fumetti e libri fantasy<br>
                    tra i libri che ho letto i miei preferiti sono stati<br>
                    "harry potter"<br>
                    "strange e il signor norrel"<br>
                    "Trilogia dei Lungavista"<br>
                    "Gli inganni di Locke Lamora"<br>
                    Tra i fumetti invece spazio molto di più:<br>
                    <?php menu_scroll($comic)?>
                </div>
            </div>
            
            <div id="right">
            </div>
            <?php include("../template/footer.php"); ?>
        </div>

    </body>
</html>

