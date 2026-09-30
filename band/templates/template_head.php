<html lang="fr">
<head>
    <?php
        require './band_generators.php';

        session_start();

        $group_name = $_SESSION['group_name'];
        $group_logo = $_SESSION['group_logo'];
        
        if($group_name == null)
        {
            $group_name = generate_bandname();
            $_SESSION['group_name'] = $group_name;
        }
        if($group_logo == null)
        {
            $group_logo = generate_bandlogo();
            $_SESSION['group_logo'] = $group_logo;
        }        
    ?>
    <meta charset="UTF-8">
    <title><?= $group_name; ?> - <?= $subtitle; ?></title>
    <link rel="stylesheet" href="./style.css">
</head>