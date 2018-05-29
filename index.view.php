<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <title>Paginación</title>
</head>
<body>
    <div class="contenedor">
        <h1>Artículos</h1>
        <section class="articulos">
            <ul>
              <?php foreach ($articulos as $articulo ): ?>
                <li><?php echo $articulo['id'] . '.-' . $articulo['articulo'] ?></li>
              <?php endforeach; ?>
            </ul>
        </section>
        <section class="paginacion">
            <ul>
              <!-- Establecemos cuando el boton de "Anterior" estará desabilitado  -->
              <?php if ($pagina == 1): ?>
                <li class="disabled">&laquo;</li>
              <?php else: ?>
                <li><a href="?pagina=<?php echo $pagina - 1 ?>">&laquo;</a></li>
              <?php endif; ?>

              <!-- Ejecutamos el ciclo para mostrar las páginas -->
              <?php
              for ($i=1; $i <= $numeroPaginas ; $i++) {
                if ($pagina == $i) {
                  echo "<li class='active'> <a href='?pagina=$i'>$i</a> </li>";
                } else {
                  echo "<li><a href='?pagina=$i'>$i</a></li>";
                };
              };
               ?>
               
               <!-- Establecemos cuando el botón de "Siguiente" estará desabilitado -->
               <?php if ($pagina == $numeroPaginas): ?>
                 <li class="disabled">&laquo;</li>
               <?php else: ?>
                 <li><a href="?pagina=<?php echo $pagina + 1 ?>">&raquo;</a></li>
               <?php endif; ?>

            </ul>
        </section>
    </div>
</body>
</html>
