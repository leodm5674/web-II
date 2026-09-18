     <?
        include("Livro.php");

        $objeto1 = new Livro();
        $objeto2 = new Livro();
        $objeto3 = new Livro();


        $objeto1->setTitulo("");
        $objeto1->getTitulo("");
        $objeto1->setAutor("");
        $objeto1->getAutor("");
        $objeto1->setGenero("");
        $objeto1->getGenero("");
        $objeto1->setQtdpagina("");
        $objeto1->getQtdpagina("");






        $grupo = array($objeto1, $objeto2, $objeto3);







        ?>

     <!DOCTYPE html>
     <html lang="en">

     <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Document</title>
     </head>

     <body>

     </body>

     </html>
     <?php
