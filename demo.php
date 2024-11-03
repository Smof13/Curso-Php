<?php

    //variables
    $name = "Santiago";
    $isDev = true;
    $age = 80;
    $isOld = $age > 40;

    //variables constantes, osea que no cambian 
   // const Nombre = "santiago";

    //Uso del define

    define('LOGO_URL', 'https://cdn.freebiesupply.com/logos/large/2x/php-1-logo-svg-vector.svg');

   //concatenacion
    $output = "Hola $name, con una edad de $age 😶‍🌫️";

    //ternaria

    // $outputAge = $isOld
    // ? 'Eres viejo, lo siento'
    // : 'Eres joven felicitaciones '

    //uso del match ""
    $outputAge = match(true) {
        $age < 2   => "Eres un bebe, $name",
        $age < 10  => "Eres un niño, $name",
        $age < 18  => "Eres un adolecente, $name",
        $age == 18 => "Eres mayor de edad, $name",
        $age < 40  => "Eres un adulto joven, $name",
        $age < 60  => "Eres un adulto viejo, $name",
        default    => "hueles mas a madera que a fruta, $name",
    };

    // arrays
    $bestLenguajes = ["PHP", "JavaScript", "Python", 1, 2];
    //agregar nuevo 
    $bestLenguajes[] = "java";
    // agregar por posicion 
    $bestLenguajes[3] = "TypeScript";

    //uso de array parecidos a un "objetos" en javaScript

    $person = [
        "name" => "Miguel",
        "age" => 29,
        "isDev" => true,
        "languaje"  => ["PHP","JAVASCRIPT", "PYTHON"],
    ];

    // renombrar
    $person["name"] = "Juanito";
    $person["languaje"][] = "Java";

    // uso de if

    // if ($isOld) {
    //     echo "<h2> Eres viejo, lo siento</h2>";
    // } else{
    //     echo "<h2> Eres joven, felicidades</h2>";
    // }
?>
        <!-- Mostrar array con forEach -->
        
        <ul>
            <?php foreach ($bestLenguajes as $languaje) : ?>
            <li><?= $languaje ?> </li>
            <?php endforeach; ?>
        </ul>

        <!-- Mostrar array -->
    <h3> El mejor lenguaje es <?= $bestLenguajes[5] ?> </h3>

    <!-- Mostrar el ternario "es como un if" -->
    <h2><?= $outputAge ?> </h2> 

    <!-- Otra manera de hacerlo -->
<?php if ($isOld) : ?>
    <h2>Eres viejo, lo siento</h2>
<?php elseif ($isDev) : ?>
    <h2>No eres viejo pero eres dev. Estas jodido</h2>
<?php else : ?>
    <h2>Eres joven felicitaciones</h2>
<?php endif; ?>








<img src="<?= LOGO_URL ?>" alt="PHP logo" width="200">
<h1>
    <?= $output ?>
</h1>






<style>
    :root{
        color-scheme: light dark;
    }

    body{
        display: grid;
        place-content: center;
    }
</style>