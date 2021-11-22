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
    <div class="Info">
        <h2 class="Info__title">
            De donde soy y un poco de mi.
        </h2>
        <div class="Info--container Info--container__life">
            <p class="Info__description Info--description__life">
                <span class="Info--description__start"></span> Soy originario de Caracas, Venezuela, naci el 22 de Febrero en el año 2004, naci en la "Maternidad Concepción Palacios", la convivencia en mi hogar siempre habia sido buena hasta que cumpli 6 años que mi papa en grandes palabras de volvio alguien agresivo en el lugar, por esa situacion nos mudamos con mi mama y mi hermana para otro departamento llamado "Miranda", siendo mas especifico nos mudamos para El Alto, Los Valles Del Tuy, Miranda, Venezuela. Vivimos alli varios años y alquilamos nuestro apartamento de Caracas en el cual cuando nos queriamos regresar luego de 3 años se tuvo diversas dificultades con las inquilinas, mientras tanto seguiamos viviendo en El Alto, el 16 de Abril del 2016, a las 12 años me bautizo en la "Iglesia Adventista del Septimo Día" a los 7 años aproximadamente(cuando yo tenia unos 12 años) de estar viviendo en ese sitio secuestran a mi mama por estar en el lugar equivocado, a la otra persona si la asesinaron porque era a quien buscaban y a ella la liberaron robandole lo que tenia, por esa misma situacion tomamos la decisión de regresar a nuestro apartamento pese a que la inquilina aun no quisiera regresarnoslo, pero nos regresamos al Caracas, viviendo temporalmente en el apartamento de mi abuela que esta ubicado en el mismo edificio inclusive, despues de diversas intervenciones, y una final con la policia se logro recuperar el apartamento, durante ese año estudie en una de las mejores instituciones tanto en academia como en disciplina, en el "Almirante Jose Prudencio Padilla", una institución Militar-Marina, al concluir ese año me mude hacia Puerto Tejada, Cauca, Colombia, al poco tiempo dandome cuenta que una compañera de ese mismo colegio habia fallecido tristemente en una fiesta que tuvo un "sabotaje" con bombas lacrimógenas, en resumidas cuentas esa a sido mi historia durante el paso de mi vida, actualmente tengo 17 años y soy desarrollador web front-end semi-senior, futuro egresado de la institución C.E.A Puerto Tejada por la cual estoy altamente feliz por su nivel de excelente, no solamente en "PENSUM" sino tambien por sus profesores y metodos de enseñanza.
            </p>
            <img src="../img/world.svg" alt="Personal Info svg" class="Info__img Info--img__life">
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