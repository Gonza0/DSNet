<!DOCTYPE html>
<?php
$doc = "../img/doc.pdf";
?>
<html>
    <head>
        <meta charset="UTF-8">

        <title></title>
    </head>
    <body>
        <script>

            function printPDF(PDFtoPrint) {

                var w = window.open(PDFtoPrint);

                w.print();
            }

        </script>
        <section>
            <embed id="PDFtoPrint" src="../img/doc.pdf" width="500px" height="450px">
        </section>


        <br>

        <?php

        /**
         * Esta función devuelve el número de páginas de un archivo pdf
         * Tiene que recibir la ubicación y nombre del archivo
         */
        function numeroPaginasPdf($archivoPDF) {
            $stream = fopen($archivoPDF, "r");
            $content = fread($stream, filesize($archivoPDF));

            if (!$stream || !$content)
                return 0;

            $count = 0;

            $regex = "/\/Count\s+(\d+)/";
            $regex2 = "/\/Page\W*(\d+)/";
            $regex3 = "/\/N\s+(\d+)/";

            if (preg_match_all($regex3, $content, $matches))
                $count = max($matches);

            return $count[0];
        }

        echo "Cantidad de hojas " . numeroPaginasPdf($doc) . "<br>";
        echo "Total $" . numeroPaginasPdf($doc) * 10;
        ?>

    </body>
</html>
