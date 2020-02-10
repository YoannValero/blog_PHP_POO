<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a href="index.php"><img src="templates/assets/img/b-logo-png-transparent.png" width="40px" height="40px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Catégorie
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Catégorie 1</a>
                    <a class="dropdown-item" href="#">Catégorie 2</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Autres</a>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?controller=forminscription&task=index" tabindex="-1" aria-disabled="true">Connexion<img src="templates/assets/img/login-account-1ee07cef62c4fe1e69d8c33f7b6ec3b2.png" width="20px" height="20px"></a>
            </li>
        </ul>
    </div>
</nav>