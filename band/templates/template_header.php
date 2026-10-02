<header>
    <img src="<?= $group_logo ?>">
    <a href="../band/band.php" class="title"><?= $group_name;?></a>
    <nav>
        <a href="../band/">Home</a>
        <a href="../band/band.php">Band</a>
        <a href="../band/setlist.php">Setlist</a>
        <?php
        if($_SESSION['connected']){
            
            ?><a href ="?disconnect=1"><u>DISCONNECT</u></a><?php
            
        }
        else{
            ?><a id = "bouton" onclick = "showform()"><u>CONNECT</u></a><?php
        }
        ?>
        
        <a href="">Contact</a>
        

        

    </nav>
</header>







<form id="formulaire" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
  
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
    
  </div>
</form>

<script src="./script/afficherForm.js"></script>