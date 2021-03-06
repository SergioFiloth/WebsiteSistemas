<!DOCTYPE html>
<html lang="es-419">

<head>
    <?php
        include "templates/head.php"
    ?>
<link rel="stylesheet" href="css/styles.css">


    <title>Mi hoja de vida</title>

</head>

<body>
    <header class="Hero">
        <main class="Menu">
            <ul class="Menu--list">
                <li class="Menu--link">
                    <a href="who" class="Menu--link__link">¿Quien Soy?</a>
                </li>
                <li class="Menu--link">
                    <a href="who#contact" class="Menu--link__link">Contáctame</a>
                </li>
            </ul>
        </main>
        <div class="Hero--container">
            <h1 class="Hero__title">Mi Hoja<br>De Vida</h1>
            <img src="img/programmer.svg" alt="" class="Hero__img">
        </div>
    </header>
    <div class="Info">
        <h2 class="Info__title">
            Estudios
        </h2>
        <div class="Info--container">
            <img src="img/exams.svg" alt="Exams svg" class="Info__img">
            <p class="Info__description">
                Mis principales estudio de educación superior fueron realizados en el Almirante Jose Prudencio Padilla en Caracas, Venezuela y por ultimo en el C.E.A de Puerto Tejada, Cauca, Colombia.
            </p>
        </div>
    </div>
    <div class="Slogan">
        <p>
            Mi lema de vida es:<br>“Nunca Pares de Aprender”
        </p>
    </div>
    <div class="Works">
        <h2 class="Works__title">
            Mis Ultimos trabajos
        </h2>
        <div class="Works--container">
            <a href="https://pruebassergiof.000webhostapp.com/" target="_blank" class="Works--card">
                <img src="img/works/stratech.png" alt="Stratech Site" class="Works--card__img">
                <div class="Works--card__footer">
                    <p class="Works--footer__description">
                        Es la estructura de un entrenador del famoso juego de cartas: "Poker"
                    </p>
                    <div class="Works--footer__link-container">
                        <p class="Works--footer__name">Stratech</p>
                    </div>
                </div>
            </a>
            <a href="https://papelplumaroja.netlify.app/" target="_blank" class="Works--card">
                <img src="img/works/plumaroja.png" alt="Pluma Roja Site" class="Works--card__img">
                <div class="Works--card__footer">
                    <p class="Works--footer__description">
                        Es la landing page de un proveedor de papel para crear cada quien su propio tabaco a su gusto o como desee
                    </p>
                    <div class="Works--footer__link-container">
                        <p class="Works--footer__name">Papel Pluma Roja</p>
                    </div>
                </div>
            </a>
            <a href="https://sergiofiloth.netlify.app/"target="_blank" class="Works--card">
                <img src="img/works/sergiofiloth.png" alt="Sergio Filoth Site" class="Works--card__img">
                <div class="Works--card__footer">
                    <p class="Works--footer__description">
                        Es mi sitio web principal, de momento siendo solo una lading para que mis clientes puedan conocer de mi y de mi trabajo.
                    </p>
                    <div class="Works--footer__link-container">
                        <p class="Works--footer__name">Mi Sitio Web Personal</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <?php
        include "templates/Footer.php"
    ?>
</body>

</html>