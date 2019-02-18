<html>
<body>
<?php $name = $_POST["name"]; ?>
<?php $smsr = $_POST["smsr"]; ?>
Welcome <?php echo $name; ?><br />
In order to buy <?php echo $smsr; ?> you need to be
    <?php
    switch ($smsr) {
        case "specs":
            echo "over 16";
            break;
        case "mugs":
            echo "over 18";
            break;
        case "sausage rolls":
            echo "over 21";
            break;
        default:
            echo "<span style='color: red;'>Error </span><br />You must enter either specs, mugs or sausage roll";
    } ?>
</body>
</html>