<!--

Deux choses :

1. Appeler le fichier connect.php pour se connecter à la base de données

2. Faire un "SELECT * FROM setlist" en PHP

3. Faire un tableau HTML

4. Remplir le tableau HTML avec le résultat du 2.


-->


<!DOCTYPE html>
<?php
    $subtitle = 'Setlist';
    require './templates/template_head.php';
?>
<body>
    <main>
        <?php require './templates/template_header.php'; ?>
        <div class="margin">
            <input type="search" id="recherche" name="recherche" onkeyup="toggleTableRows()">
            <table>
                <thead>
                    <tr>
                        <th>TITRE</th>
                        <th>ARTIST(S)</th>
                        <th>STYLE</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        

                        $dsn="mysql:dbname=".BASE.";host=".SERVER;
                        try{
                            $connexion=new PDO($dsn,USER,PASSWD);
                        }
                        catch(PDOException $e){
                            printf("Échec de la connexion : %s\n", $e->getMessage());
                            exit();
                        }
                        $sql="SELECT * from setlist";
                        $data = $connexion->query($sql);

                        if(!$data)
                        {
                            echo "Pb d'accès à la table";
                            exit();
                        }
                        else
                        {
                            foreach ($data as $row)
                            {
                                ?>
                                    <tr class="table_row">
                                        <td><?= $row['title'] ?></td>
                                        <td><?= $row['artist'] ?></td>
                                        <td><?= $row['style'] ?></td>
                                    </tr>
                                <?php
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <?php require './templates/template_footer.php'; ?>
        <script src="./script/rechercheparligne.js"></script>
    </main>
</body>
</html>