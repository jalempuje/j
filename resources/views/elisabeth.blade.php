@extends('layouts.master')
@section('title', 'Elisabeth Vigée-Lebrun')
@section('header')
@stop
@section('navbar')

            <a href="{{action('controlador@login')}}">Home</a>
            <a href="{{action('controlador@leo')}}">Leonardo Da Vinci</a>
            <a href="{{action('controlador@fri')}}">Frida khalo</a>
            <a href="{{action('controlador@pic')}}">Picasso</a>
            <a href="{{action('controlador@van')}}">Van gogh</a>
@stop
@section('barra')
      <!-- Sidebar -->
            <!-- Sidebar -->
      <div id="sidebar-wrapper">
      <ul id="sidebar_menu" class="sidebar-nav">
           <li class="sidebar-brand"><a id="menu-toggle" href="#">Links<span id="main_icon" class="glyphicon glyphicon-align-justify"></span></a></li>
      </ul>
        <ul class="sidebar-nav" id="sidebar">     
          <li><a href="https://www.youtube.com/watch?v=om0y8ly1IZE">Home<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
          <li><a href="https://www.youtube.com/watch?v=YZ_KP3M85S0">Leo<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
          <li><a href="https://www.youtube.com/watch?v=Y04tBGUpFgc">Frida<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
          <li><a href="https://www.youtube.com/watch?v=jek99pxYsN0">Picasso<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
          <li><a href="https://www.youtube.com/watch?v=tqzoDm9D9X8">Van Gogh<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
        </ul>
      </div>
@stop
@section('content')
        <section class="contenedor sobre-nosotros">
            <h2 class="titulo">Elisabeth Vigée-Lebrun</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="images/eli/e.jpg" alt="" class="imagen-about-us">
                <div class="contenido-textos">
                    
                <p>Marie-Louise-Élisabeth Vigée-Lebrun nació el 16 de abril de 1755 en París. Su padre, Louis Vigée, un importante retratista y profesor de pintura, no sólo enseñó sino que alentó a su hija a que siguiera sus pasos en el mundo del arte. Además de la influencia paterna, Élisabeth tuvo la suerte de contar con las enseñanzas de otros maestros de su época como Jean-Baptiste Greuze.
                        Las enseñanzas de todos ellos dieron pronto sus frutos. Una joven Élisabeth pintaba cuadros de manera profesional. No tenía aún 20 años cuando fue admitida en la Academia Francesa.

                        Su círculo artístico se completó con su matrimonio. En 1776 la joven pintora se casaba con Jean-Baptiste-Pierre Lebrun, quien también era pintor y comerciante de arte.
                        Más de 600 retratos convirtieron a una joven francesa de familia de artistas en una de las retratistas más importantes de su tiempo y de toda la historia del arte. Marie-Louise-Élisabeth Vigée-Lebrun inmortalizó a los principales miembros de la realeza y la nobleza europea. Las cortes francesa, inglesa y rusa, entre otras, se rindieron al talento de una gran artista que supo poner sobre el lienzo los rostros de los más destacados personajes de su época.

                    </p>
                    
                </div>
            </div>
            <section class="portafolio">
                <div class="contenedor">
                    <h2 class="titulo">Obras más importantes: </h2>
                    <div class="galeria-port">
                        <div class="imagen-port">
                            <img src="images/eli/queenmarieantoinetteoffrance.jpg" alt="">
                            <div class="hover-galeria">
                                <img src="images/brush.png" alt="">
                                <p> <a href="https://artsandculture.google.com/asset/marie-antoinette-queen-of-france-1755-1793-elisabeth-vig%C3%A9e-le-brun/tAEhw_2KvIWeXQ?hl=es"><center><b>Reina Maria Antonieta de Francia</b></center></a></p>
                            </div>
                        </div>
                        <div class="imagen-port">
                            <img src="images/eli/portraitofprincehenrylubomirskiasthegeniusoffame.jpg" alt="">
                            <div class="hover-galeria">
                                <img src="images/brush.png" alt="">
                                <p><a href="https://es.wikipedia.org/wiki/Archivo:Prince_Heinrich_Lubomirski_as_Genius_of_Fame_by_E.Vigee-Lebrun_(1789,_Gem%C3%A4ldegalerie,_Berlin).jpg"><center><b> Retrato de Príncipe Henry lubomirski como el genio de la fama</b></center></a></p>
                            </div>
                        </div>
                        <div class="imagen-port">
                            <img src="images/eli/portraitofmadamedestaelascorinne.jpg" alt="">
                            <div class="hover-galeria">
                                <img src="images/brush.png" alt="">
                                <p><a href="https://commons.wikimedia.org/wiki/File:Elisabeth_Vig%C3%A9e-Lebrun_-_Portrait_of_Madame_de_Sta%C3%ABl_as_Corinne_on_Cape_Misenum_-_WGA25074.jpg"><center><b>Madame de Stael as Corinne</b></center></a></p>
                            </div>
                        </div>
                        <div class="imagen-port">
                            <img src="images/eli/portraitofannapittashebe.jpg" alt="">
                            <div class="hover-galeria">
                                <img src="images/brush.png" alt="">
                                <p><a href="https://www.hermitagemuseum.org/wps/portal/hermitage/digital-collection/01.+Paintings/37856"><center> <b>Retrato de Anna Pitt como Hebe</b></center></a></p>
                            </div>
                        </div>
                        <div class="imagen-port">
                            <img src="images/eli/annaivanovnatolstaya.jpg" alt="">
                            <div class="hover-galeria">
                                <img src="images/brush.png" alt="">
                                <p><a href="https://www.metmuseum.org/art/collection/search/656963"><center><b>Anna Ivanovna Tolstaya</b></center></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
       
@stop
@section('footer')

@stop
