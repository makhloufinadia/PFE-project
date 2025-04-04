<html>
<head>
    <title>Shareboard</title>
</head>
<body>
    <?php 
    if(isset($view) && file_exists($view)) {
        require($view);
    } else {
        echo "Contenu non disponible";
    }
    ?>
</body>
</html>