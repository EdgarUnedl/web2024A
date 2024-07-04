<?php
    session_start();
    echo "<h1>".session_status()."</h1>";
?>
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>UNEDL 2024 PIV</title>
        <meta name="keywords" content="UNEDL, Universidad, ingenieria de software, programación web">
        <meta name="description" content="Universidad de desarrollo de software y programación web">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link href="img/favicon.png" sizes="16x16" type="img/png">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js" type="text/javascript"></script>
        <script src="js/jquery.js" type="text/javascript"></script>
        <link rel="stylesheet" href="css/estiloDemo.css" type="text/css"/>
    </head>
    <body>
        <header>
            <h1>CABECERA</h1>
        </header> <!-- Esto es un comentario de la etiqueta header -->
        <hr>
        <nav id="barraNavegacion">
            <menu id="menuPrincipal">
            <ul>
                <li class="menu"> <div> <a id="main" href="#main">Principal</a> </div> </li>
                <li class="menu"> <div> <a id="countrys" href="#countrys">Paises</a> </div> </li>
                <li class="menu"> <div> <a href="#banderas">Banderas</a> </div> </li>
                <li class="menu"> <div> <a href="#contact">Contacto</a> </div> </li>
            </ul>
            </menu>
        </nav>
        <section id="sectionMain">
            <p>
                <h3>Sección Principal</h3>
            </p>
        </section>
        <aside id="aside">
            <table>
                <caption>Registrados</caption>
                <thead>
                    <td>#</td>
                    <td>Nombre</td>
                    <td>Apellidos</td>
                    <td>Edad</td>
                    <td>Genero</td>
                </thead>
                <tbody id="Tregistrados">
                    
                </tbody>
            </table>
        </aside>
        <footer><h1>BARRA INSTITUCIONAL</h1></footer>
    </body>
    <script type="text/javascript">
        //Function anonina
        /**
         * */
        $(function (){
         var attr;   
        $("#countrys").click(function (){
                console.log("Click");
                $("#sectionMain").load('php/paises.xhtml');
         });
            
        $("#main").click(function (){
            //var name= prompt("Ingresa tu nombre");
             $("#sectionMain").load('php/formulari.php',{name:name},function (){
                 
             });
        });   
        
        
            
            
        });
    </script>
</html>
