<?php

session_start();

if (isset($_SESSION['user_id'])) {
}else {
      header('Location: Error.php');
}

?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <title>ServerPi</title>
    <link rel="stylesheet" href="/assets/css/fontello.css">
    <link rel="stylesheet" href="/assets/css/panel.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/menu.css">
    <link rel="stylesheet" href="/assets/css/banner.css">
    <link rel="stylesheet" href="/assets/css/slider.css">
    <link rel="stylesheet" href="/assets/css/blog.css">
    <link rel="stylesheet" href="/assets/css/info.css">
    <link rel="stylesheet" href="/assets/css/scrollbar.css">
  </head>
  <body>
    <header>

      <?php require 'partials/header.php' ?>

    </header>
    <main>
      <section id="banner">
        <img src="assets\imgs\hacker_banner2.jpg" alt="">
        <div class="contenedor">
          <h2>Llegado el momento...</h2>
          <p>¿Quíenes velan por la proteccion de los datos?</p>
          <a href="#">Leer más</a>
        </div>
      </section>

      <section id="Bienvenidos">
        <h2>Bienvenidos a ServerPi</h2>
        <p>Esta página ha sido desarrollada por Iñaki Andoni Hernández Quero para la puesta
        en marcha de su projecto, durante la presentacion del trabajo final servira de apoyo
        en la muestra de vulnerabilidades y herramientas de Penn-Testing.</p>
      </section>

      <section  id="slider">
          <h3>Temas tratados en la presentación del trabajo.</h3>
            <ul>
              <li>
                <div class="contenedor" >
                  <h4>Network Hacking</h4>
                  <p>
                    Esta sección le enseñará cómo probar la seguridad de las redes,
                    tanto cableadas como inalámbricas. Primero, aprenderá algunos
                    términos básicos de red, cómo funcionan las redes y cómo se
                    comunican los dispositivos entre sí.</p>
                </div>
              </li>
              <li>
                <div class="contenedor" >
                  <h4>Gaining Access</h4>
                  <p>
                    Ataques del lado del servidor: en esta subsección, aprenderá cómo
                    obtener acceso completo a los sistemas informáticos sin la necesidad
                    de la interacción del usuario.<br>
                    Aprenderá cómo reunir información útil
                    sobre un sistema informático de destino, como su sistema operativo,
                    puertos abiertos, servicios instalados, y luego aprenderá a usar esta
                    información para descubrir puntos débiles y vulnerabilidades y explotarlos
                    para obtener un control total sobre el objetivo.<br>
                    Finalmente, aprenderá cómo generar diferentes tipos de informes para sus
                    descubrimientos.</p>
                </div>
              </li>
              <li>
                <div class="contenedor" >
                  <h4>Post Explotation</h4>
                  <p>
                    En esta sección, aprenderá cómo interactuar con los sistemas que ha comprometido
                    hasta ahora. Aprenderá cómo acceder al sistema de archivos (leer / escribir / cargar
                    / ejecutar), mantener su acceso, espiar el objetivo e incluso utilizar la computadora
                    de destino como un pivote para hackear otros sistemas informáticos.</p>
                </div>
              </li>
              <li>
                <div class="contenedor" >
                  <h4>Website Hacking</h4>
                  <p>
                    En esta sección, aprenderá cómo funcionan los sitios web, cómo recopilar información
                    sobre un sitio web de destino (como el propietario del sitio web, la ubicación del servidor,
                    las tecnologías usadas, etc.) y cómo descubrir y explotar las siguientes vulnerabilidades
                    peligrosas para piratear sitios web.</p>
                </div>
              </li>
            </ul>
      </section>

      <!--
      <section  id="info">
        <h3>Tipos de ataques que se tratarán en la presentación.</h3>
        <div class="contenedor">
          <div class="info-cir">
            <img src="assets\imgs\cir1.jpg" alt="">
            <h4>Network Hacking</h4>
          </div>
          <div class="info-cir">
            <img src="assets\imgs\cir2.jpg" alt="">
            <h4>Gaining Access</h4>
          </div>
          <div class="info-cir">
            <img src="assets\imgs\cir3.jpg" alt="">
            <h4>Post Explotation</h4>
          </div>
          <div class="info-cir">
            <img src="assets\imgs\cir4.png" alt="">
            <h4>Website Hacking</h4>
          </div>
        </div>
      </section>-->



      <section id="blog">
        <h3>Articulos relacionados.</h3>
        <div class="contenedor">
          <article class="">
            <a target="_blank" href="https://backtrackacademy.com/articulo/generar-un-email-spamming">
              <img src="assets\imgs\articulo1.png" alt="" title="Abrir noticia">
            </a>
            <h4>Generar email de spamming</h4>
          </article>
          <article class="">
            <a target="_blank" href="https://backtrackacademy.com/articulo/eludiendo-la-politica-de-ejecucion-de-powershell">
              <img src="assets\imgs\articulo2.png" alt="" title="Abrir noticia">
            </a>
            <h4>Política de ejecución Powershell</h4>
          </article>
          <article class="">
            <a target="_blank" href="https://backtrackacademy.com/articulo/ofuscando-ips-para-saltar-filtros-firewalls-y-antivirus">
              <img src="assets\imgs\articulo3.png" alt="" title="Abrir noticia">
            </a>
            <h4>Ofuscando IPS</h4>
          </article>
          <article class="">
            <a target="_blank" href="https://backtrackacademy.com/articulo/metasploit-5-0-el-marco-de-pruebas-de-penetracion-mas-utilizado-del-mundo">
              <img src="assets\imgs\articulo4.png" alt="" title="Abrir noticia">
            </a>
            <h4>El marco de pruebas de penetración</h4>
          </article>
          <article class="">
            <a target="_blank" href="https://backtrackacademy.com/articulo/pasos-a-seguir-para-evitar-amenazas-y-explotacion-de-vulnerabilidades">
              <img src="assets\imgs\articulo5.png" alt="" title="Abrir noticia">
            </a>
            <h4>Consejos para evitar amenazas y explotaciones.</h4>
          </article>
          <article class="">
            <a target="_blank" href="https://backtrackacademy.com/articulo/simulando-una-ddos-botnet">
              <img src="assets\imgs\articulo6.png" alt="" title="Abrir noticia">
            </a>
            <h4>Simulando una DDOS Botnet.</h4>
          </article>
        </div>
      </section>

    </main>

    <footer>
      <div class="contenedor">
        <p class="copy">ServerPi &copy; 2019</p>
        <div class="sociales">
          <a target="_blank" class="icon-facebook-squared" href="#"></a>
          <a target="_blank" class="icon-twitter" href="https://twitter.com/andonihq98?lang=es"></a>
          <a target="_blank" class="icon-instagram" href="#"></a>
          <a target="_blank" class="icon-adult" href="https://andoni98.github.io/AndoniHQ/#"></a>
        </div>
      </div>
    </footer>
  </body>
</html>
