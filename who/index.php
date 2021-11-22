<!DOCTYPE html>
<html lang="es-419">

<head>
    <link rel="stylesheet" href="../css/styles.css">
    <?php
        include "../templates/head.php"
    ?>
    <title>Mi hoja de vida - Quien Soy</title>
</head>

<body>
    <main class="Menu">
        <ul class="Menu--list">
            <li class="Menu--link">
                <a href="../" class="Menu--link__link" style="color: #000;">Inicio</a>
            </li>
        </ul>
    </main>
    <div class="Info">
        <h2 class="Info__title">
            ¿Quien Soy?
        </h2>
        <div class="Info--container">
            <img src="../img/personal-info.svg" alt="Personal Info svg" class="Info__img">
            <p class="Info__description">
                Soy Sergio Filoth Valiente, estudiante del grado 11° en el C.E.A Puerto Tejada, tengo 17 años de edad actualmente y pienso estudiar Ingenieria en Sistemas.
            </p>
        </div>
    </div>
    <form class="Form" id="contact">
        <div class="Form-content">
            <p class="Form__title">
                Contáctame
            </p>
            <div class="Form-content--name">
                <label for="name">Tu nombre completo<span>*</span></label>
                <input
                    type="text"
                    name="name"
                    id="name"
                    placeholder="Nombre"
                >
            </div>
            <div class="Form-content--email">
                <label for="email">Tu email <span>*</span></label>
                <input
                    type="text"
                    name="email"
                    id="email"
                    placeholder="tu@email.com"
                >
            </div>
            <div class="Form-content--message">
                <label for="about" class="Form-content--label__message">Cuéntame de tu proyecto <span>*</span></label>
                <div class="Form__textarea">
                    <textarea
                        name="message"
                        id="about"
                        class="textarea"
                        placeholder="Hablame de tu proyecto, minimo 75 caracteres"
                    ></textarea>
                </div>
            </div>
            <input
                type="submit"
                value="Pide tu cotización"
                class="btn"
            >
        </div>
    </form>
    <?php
        include "../templates/Footer.php"
    ?>
    <script src="../js/form.js"></script>
</body>
<style>
    .Info__title{
        margin-bottom: 2rem;
    }
</style>

</html>