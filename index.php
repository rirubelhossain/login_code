
<html>
    <head>
        <link rel = "stylesheet" href = "css/bootstrap.css">
    </html>
    <body style = "background:#CCC;">

    <div class = "container">
        <div class = "row">
            <div class = "col-lg-6 m-auto">
                <div class ="card bg-dark mt-5">
                    <div class = "card-title bg-primary text-white mt-5">
                        <h3 class = "text-center py-3">Login form in php</h3>
                    </div>

                    <?php
                        if(@$_GET['Empty'] == true)
                        {
                    
                    ?>
                    <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Empty']?></div>
                    <?php
                    
                        }
                    ?>
                    <?php
                        if(@$_GET['Invalid'] == true)
                        {
                    
                    ?>
                    <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid']?></div>
                    <?php
                    
                        }
                    ?>
                    

                    <div class = "card-body">
                        <form action = "process.php" method = "post">
                            <input type = "text" name = "userm" placeholder = "User Name" class = "form-control mb-3">
                            <input type = "password" name = "passd" placeholder = "Password" class = "form-control mb-3">
                            
                            <button class = "btn btn-success mt-3" name = "login">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </body>
</html>
