<?php 
    if(isset($_SESSION["username"])){
        include("dbConnection.php");
        $sql = "SELECT id, perm_level FROM users WHERE username = ?";

        $stmt = $db->prepare($sql);
        $stmt->bind_param("s", $_SESSION["username"]);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($profile_id, $perm_level);
        $stmt->fetch();
        $stmt->close();

        if($perm_level == 1){
            $admin_content = "<a class='nav-item nav-link active' href='admin.php'>Moderáció</a>";
        }else{
            $admin_content = "";
        }

        $username_navbar = $_SESSION["username"];
        $navbar_content = "<nav class='navbar navbar-expand-lg navbar-dark bg-dark'>
        <a class='navbar-brand' href='index.php'>Foodine</a>
        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNavAltMarkup' aria-controls='navbarNavAltMarkup' aria-expanded='false' aria-label='Toggle navigation'>
          <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse' id='navbarNavAltMarkup'>
          <div class='navbar-nav'>
            <a class='nav-item nav-link active' href='index.php'>Főoldal</a>
            <a class='nav-item nav-link active' href='recipe.php'>Recept feltöltés</a>
            <a class='nav-item nav-link active' href='profile.php?id=$profile_id'>Profilom</a>
            <a class='nav-item nav-link active' href='pointlist.php'>Pontlista</a>
            <a class='nav-item nav-link active' href='index.php?logout='1''>Kijelentkezés</a>
            $admin_content
          </div>
        </div>
      </nav>";
    }else{
        $navbar_content = "<nav class='navbar navbar-expand-lg navbar-dark bg-dark'  >
        <a class='navbar-brand' href='index.php'>Foodine</a>
        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNavAltMarkup' aria-controls='navbarNavAltMarkup' aria-expanded='false' aria-label='Toggle navigation'>
          <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse' id='navbarNavAltMarkup'>
          <div class='navbar-nav'>
            <a class='nav-item nav-link active' href='index.php'>Főoldal</a>
            <a class='nav-item nav-link active' href='recipe_utmutat.php'>Recept feltöltés</a>
            <a class='nav-item nav-link active' href='pointlist.php'>Pontlista</a>
            <a class='nav-item nav-link active' style='cursor: pointer;' data-toggle='modal' data-target='#exampleModal'>Bejelentkezés</a>
            <a class='nav-item nav-link active' style='cursor: pointer;' data-toggle='modal' data-target='#register'>Regisztráció</a>
            </nav>
          </div>
        </div>";
    }
    echo $navbar_content;
    #<a class='nav-item nav-link disabled' href='#' tabindex='-1' aria-disabled='true'>HAMAROSAN</a>
?>


<!-- Bejelentkezés -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bejelentkezés</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="server.php" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Felhasználónév</label>
                            <input type="text" name="username" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Jelszó</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1"  aria-describedby="pwHelp">
                            <small id="pwHelp" class="form-text text-muted">Jelszód titkosítva van az adatbázisunkba.</small>
                        </div>
                        <button type="submit" name="login_user" class="btn btn-primary">Bejelentkezés</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
        <!-- Regisztrálás -->
        <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="registerLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerLabel">Regisztrálás</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="server.php" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Felhasználónév</label>
                            <input type="text" name="username" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Jelszó</label>
                            <input type="password" name="password_1" class="form-control" id="exampleInputPassword1"  aria-describedby="pwHelp">
                            <small id="pwHelp" class="form-text text-muted">Jelszód titkosítva van az adatbázisunkba.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Jelszó mégegyszer</label>
                            <input type="password"  name="password_2" class="form-control" id="exampleInputPassword1"  aria-describedby="pwHelp">
                        </div>
                        <button type="submit" name="reg_user" class="btn btn-primary">Regisztrálás</button>
                    </form>
                </div>
                </div>
            </div>
        </div>