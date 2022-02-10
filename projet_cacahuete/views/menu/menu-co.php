
<nav class="lazy cc-navbar navbar navbar-expand-lg position-fixed navbar-dark bg-dark py-2 w-100">
    <div class="container-fluid">
        <a class="logo navbar-brand mx-4" href="#">Slurp Cacahuètes</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item active pe-4"><a class="text-light nav-link" href="?section=accueil">Accueil</a></li>

                <li class="nav-item pe-4"><a class="text-light nav-link" href="?section=apropos">A propos</a></li>

                <li class="nav-item pe-4"><a class="text-light nav-link" href="?section=contact">Contact</a></li>

                <li class="nav-item pe-4"><a class="text-light nav-link nav-link" href="?section=cacahuete_doree">Cacahuète dorée</a></li>
            </ul>
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item pe-4"><a class="text-light nav-link nav-link" href="?section=deconnexion">Déconnexion</a></li>
            </ul>
            </div>
        <p class="welcom text-light ">Welcome <?= $_SESSION['nom']; ?> ! ☺️ </p>
    </div>
</nav>
