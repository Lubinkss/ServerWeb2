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
        
        $nom = null;
        $password = null;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
            if (isset($_POST['uname'])) {
                $nom = htmlspecialchars($_POST['uname']);
            } else {
                $nom = '';
            }

            if (isset($_POST['psw'])) {
                $password = htmlspecialchars($_POST['psw']);
            } else {
                $password = '';
            }
        }
    
        echo "Bonjour " . $nom . " " . $password; 
        if(!isset($_SESSION['connected'])) {
             $_SESSION['connected'] = null;
        }
        
       
        
        require './connect.php';

        if ($password && $nom)
        {
            $dsn="mysql:dbname=".BASE.";host=".SERVER;
            try{
                $connexion=new PDO($dsn,USER,PASSWD);
            }
            catch(PDOException $e){
                printf("Échec de la connexion : %s\n", $e->getMessage());
                exit();
            }
            $sql="SELECT * from admins WHERE login = '" . $nom . "' AND password = '" . $password . "'";
            $data = $connexion->query($sql);

            if(!$data)
            {
                echo "Pb d'accès à la table";
                exit();
            }
            else if($connexion->query($sql) != null){
                $_SESSION['connected'] = true;
            }
        } 

        if($_GET["disconnect"] == 1)
        {
            $_SESSION['connected'] = false;
        }


    ?>
    <meta charset="UTF-8">
    <title><?= $group_name; ?> - <?= $subtitle; ?></title>
    <link rel="stylesheet" href="./style.css">
</head>