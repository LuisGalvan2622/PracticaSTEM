<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>IntroPhp7 Grupo X__</title>
    <link rel="stylesheet" href="css/estilos.css"/>
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/problemas.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
   <section class="wrapper">
    <header>
      <h1 class="logo"><a href="index.html">IntroPHP7</a></h1>
      <nav>
      <ul>
        <li><a href="index.php" class="current">Inicio</a></li>
        <li><a href=basicoPhp7.php>Básico Php7</a></li>
      </ul>
      </nav>
    </header>
<section id="contenedor">
<section  class="problema">
  <h2>Problema: El movimiento que experimenta cierta particula está descrita por la función</h2>
    <p><br>
        x(t) = 7*sin(2t + &#928;/6)<br></p>
  <p>Descripción:</p>
    <p>donde x se mide en centı́metros y t en π segundos. <br>Determinar:
        <br>a) la posición de la partı́cula cuando t=0 s,
        <br>b) la velocidad de la partı́cula cuando t = 0 s y t = 5 s,
        <br>c) la aceleración en los mismos instantes</p>
</section>
<section class="formulas">
<h2>Fórmulas</h2>
    <p>a) x(t) = 7sin(2t + &#928;/6)</p>
    <p>b) v(t) = dx(t)/dt = 14cos(2t + &#928;/6)</p>
    <p>c) a(t) = d2x(t)/dt2 = -28sin(2t + &#928;/6)</p>
</section>
<section class="datos">
<h2>Datos:</h2>
    <p>a) t = 0 <br>b y c) t = 0, t = 5</p>
</section>
    <section class="calculos">
        <h2>Solución</h2>
        <p>a) Posición de la partícula:<br>
            x(t) = 7*sin(2t + &#928;/6)<br>
            Para ( t = 0 ): <br>
            x(0) = 7*sin(2(0) + &#928;/6) = 7*sin(&#928;/6) = 7*0.5 = 3.5 <br>
        </p>
        <p>b) Velocidad de la partícula:<br>
            v(t) = 14*cos(2t + &#928;/6)<br>
            Para ( t = 0 ):
            v(0) = 14*cos(2(0) + &#928;/6) = 14*cos(&#928;/6) = 14*0.866 = 12.12436 <br>
            Para ( t = 5 ):
            v(5) = 14*cos((2(5) + &#928;/6) = 14*cos(10 + &#928;/6) = 14cos(10.5236) = 14*(-0.45465) = -6.36506
        </p>
        <p>c) Aceleración de la partícula:<br>
            a(t) = -28*sin(2t + &#928;/6)<br>
            Para ( t = 0 ):
            a(0) = -28*sin(2(0) + &#928;/6) = -28*sin(&#928;/6) = -28*0.5 = -14<br>
            Para ( t = 5 ):
            a(5) = -28*sin(2(5) + &#928;/6) = -28*sin(10 + &#928;/6) = -28*sin(10.5236) = -28*(-0.89067) = 24.93881
        </p>
    </section>

    <?php
    function calcula() {
        $PI = 3.141592; // Definición de Pi
        $resultado = ""; // Para almacenar el texto final

        // Inciso A: Calcular posición
        $resultado .= "A) Posición<br>";
        $resultado .= "La posición cuando t = 0s es " . calcula_posicion(0) . " unidades<br>";

        // Inciso B: Calcular velocidad
        $resultado .= "B) Velocidad<br>";
        $resultado .= "La velocidad cuando t = 0s es " . calcula_velocidad(0) . " unidades<br>";
        $resultado .= "La velocidad cuando t = 5s es " . calcula_velocidad(5) . " unidades<br>";

        // Inciso C: Calcular aceleración
        $resultado .= "C) Aceleración<br>";
        $resultado .= "La aceleración cuando t = 0s es " . calcula_aceleracion(0) . " unidades<br>";
        $resultado .= "La aceleración cuando t = 5s es " . calcula_aceleracion(5) . " unidades<br>";

        return $resultado;
    }

    function calcula_posicion($t) {
        $PI = 3.141592;
        $resultado = 7 * sin((2 * $t) + ($PI / 6)); // Fórmula de posición
        return round($resultado, 5); // Redondear a 5 decimales
    }

    function calcula_velocidad($t) {
        $PI = 3.141592;
        $resultado = 14 * cos((2 * $t) + ($PI / 6)); // Fórmula de velocidad
        return round($resultado, 5); // Redondear a 5 decimales
    }

    function calcula_aceleracion($t) {
        $PI = 3.141592;
        $resultado = -28 * sin((2 * $t) + ($PI / 6)); // Fórmula de aceleración
        return round($resultado, 5); // Redondear a 5 decimales
    }
    ?>

<section class="resultado">
<h2>Resultado:<br></h2>
<div id="resultadoA">
<?php
  print "<p>".calcula(). "</p>";
?>
</div>
</section>
</section>
    <footer class="pie">
     Creative Commons versión 3.0 SciSoft 2033
    </footer>
   </section>
</body>
</html>
