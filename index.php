
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto-1</title>
    <link rel="stylesheet" href="css/style.css">

    <script src="https://kit.fontawesome.com/53970c4c7e.js" crossorigin="anonymous"></script>

</head>


<body>
 


    <input type="checkbox" id="fa-solid-fa-bars">
    <div class="menu--container">

        <nav id="menu-horizontal">
            <div id="logo1">
                <img class="logo1" src="imagenes/Logo1.png" alt="logo">
            </div>
            <ul>
                <li><a href="#">
                    <label for="fa-solid-fa-bars" class="fa-solid fa-bars"></label></a></li>
                <li><a href="#">concerts</a></li>
                <li><a href="#">festival</a></li>
                <li><a href="#">Spectacles</a></li>
                <li><a href="login.php">S'identifier</a></li>
                <button class="switch" id="switch">
                    <span>
                         <i class="fa-solid fa-moon"></i>
                    </span>
                    <span>
                        <i class="fa-solid fa-sun"></i> 
                    </span>
                </button>
            </ul>
            <div id="perfil">
                <img class="perfil" src="imagenes/Perfil (1) (1).jpg" alt="profil">
            </div>

        </nav>
    </div>
    <div class="container-menu-lateral">
        <nav id="menu-lateral">
            <a href="#">Achetez</a>
            <a href="#">Vendez</a>
            <a href="#">Commnt ça marche?</a>
            <a href="#">Service client</a>
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <label for="fa-solid-fa-bars" class="fa-regular fa-circle-xmark"></label>
        </nav>


    </div>
    <header>
        <div class="title">
            <h1>Achetez et revendez vos billets
                en toute confiance et simplicité</h1>
        </div>
        <div id="logo">
            <img src="imagenes/vinyl-g82ce928e5_640.png" alt="alien">

        </div>


    </header>

    <div id="Title-search">
        <h3>PLACES DE CONCERT A LA UNE</h3>
        <div class="buscar">
            <input type="text" placeholder="Search">
            <div class="button_serch">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>

        </div>
        <main>

            <section>
                <article class="concerts" id="post-1">
                    <p style="color: rgb(0, 255, 0);" class="tex-artcle">10 Billet disponible </p>
                </article>
                <article class="concerts" id="post-2">
                    <p style="color: rgb(255, 0, 0);" class="tex-artcle">1 Billet disponible </p>
                </article>
                <article class="concerts" id="post-3">

                    <p style="color: orange;" class="tex-artcle">5 Billet disponible </p>
                </article>
                <article class="concerts" id="post-4">

                    <p style="color: rgb(0, 255, 0);" class="tex-artcle">9 Billet disponible </p>
                </article>

                <article class="concerts" id="post-1b">
                    <p  style="color: rgb(255, 153, 0);"class="tex-artcle">4 Billet disponible </p>
                </article>
                <article class="concerts" id="post-2b">
                    <p style="color: orange;"class="tex-artcle">3 Billet disponible </p>
                </article>
                <article class="concerts" id="post-3b">

                    <p style="color: rgb(255, 0, 0);" class="tex-artcle">1 Billet disponible</p>
                </article>
                <article class="concerts" id="post-4b">

                    <p style="color: rgb(255, 0, 0);" class="tex-artcle">1 Billet disponible </p>
                </article>

            </section>

        </main>

        <h3>CONCERTS À PROXIMITÉ DE BARCELONA </h3>
        <main>
            <section>
                <article class="concerts" id="post-5">

                    <p style="color: rgb(0, 255, 0);"class="tex-artcle">17 Billet disponible </p>


                </article>
                <article  class="concerts" id="post-6">
                    <p style="color: rgb(255, 0, 0);" class="tex-artcle">1 Billet disponible </p>
                  </article>
                <article class="concerts" id="post-7">
                    <p style="color: rgb(0, 255, 0);" class="tex-artcle">54 Billet disponible </p>

                </article>
                <article class="concerts" id="post-8">
                    <p style="color: rgb(0, 255, 0);"class="tex-artcle">18 Billet disponible</p>
                </article>
                <div class="flechas-2">
                    <i>A</i>
                    <i>B</i>
                </div>

            </section>

        </main>
    

        <footer>
            <p> CONDITIONS GÉNÉRALES D'UTILISATION <br>
                CONDITIONS GÉNÉRALES DE VENTE DES ABONNEMENTS <br>
                CONDITIONS DE DIFFUSION DES ANNONCES <br>
                POLITIQUE DE PROTECTION DES DONNÉES PERSONNELLES <br>
                NOTICE LÉGALE <br>
            </p>
        
        </footer>

       
        
    <script src="js/main.js"></script> 
</body>

</html>