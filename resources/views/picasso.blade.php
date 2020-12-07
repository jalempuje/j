@extends('layouts.master')
@section('title', 'Pablo Picasso')
@section('header')
@stop
@section('navbar')

            <a href="{{action('controlador@login')}}">Home</a>
            <a href="{{action('controlador@leo')}}">Leonardo Da Vinci</a>
            <a href="{{action('controlador@eli')}}">Elisabeth Vigée-Lebrun</a>
            <a href="{{action('controlador@fri')}}">Frida Khalo</a>
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
          <li><a href="https://www.youtube.com/watch?v=Y04tBGUpFgc">Elisabeth<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
          <li><a href="https://www.youtube.com/watch?v=jek99pxYsN0">Frida<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
          <li><a href="https://www.youtube.com/watch?v=tqzoDm9D9X8">Van Gogh<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
        </ul>
      </div>
@stop
@section('content')
        <section class="contenedor sobre-nosotros">
            <h2 class="titulo">Pablo Picasso</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="images/pic/p.jpg" alt="" class="imagen-about-us">
                <div class="contenido-textos">
                    
                <p>(Pablo Ruiz Picasso; Málaga, 1881 - Moulins, Francia, 1973) Pintor español. La trascendencia de Picasso no se agota en la fundación del cubismo, revolucionaria tendencia que rompió definitivamente con la representación tradicional al liquidar la perspectiva y el punto de vista único. A lo largo de su dilatada trayectoria, Pablo Picasso exploró incesantemente nuevos caminos e influyó en todas la facetas del arte del siglo XX, encarnando como ningún otro la inquietud y receptividad del artista contemporáneo. Su total entrega a la labor creadora y su personalidad vitalista, por otra parte, nunca lo alejarían de los problemas de su tiempo; una de sus obras maestras, el Guernica (1937), es la mejor ilustración de su condición de artista comprometido.
                        Hijo del también artista José Ruiz Blasco, en 1895 se trasladó con su familia a Barcelona, donde el joven pintor se rodeó de un grupo de artistas y literatos, entre los que cabe citar a los pintores Ramón Casas y Santiago Rusiñol, con quienes acostumbraba reunirse en el bar Els Quatre Gats. Entre 1901 y 1904, Pablo Picasso alternó su residencia entre Madrid, Barcelona y París, mientras su pintura entraba en la etapa denominada período azul, fuertemente influida por el simbolismo. En la primavera de 1904, Picasso decidió trasladarse definitivamente a París y establecerse en un estudio en las riberas del Sena. 
                    </p>
                    
                </div>
            </div>
            <section class="portafolio">
                <div class="contenedor">
                    <h2 class="titulo">Obras más importantes: </h2>
                    <div class="galeria-port">
                        <div class="imagen-port">
                            <img src="images/pic/guernica.jpg" alt="">
                            <div class="hover-galeria">
                                <img src="images/brush.png" alt="">
                                <p> <a href="https://www.museoreinasofia.es/coleccion/obra/guernica"><center><b>Guernica</b></center></a></p>
                            </div>
                        </div>
                        <div class="imagen-port">
                            <img src="images/pic/lassenoritasdeavignon.jpg" alt="">
                            <div class="hover-galeria">
                                <img src="images/brush.png" alt="">
                                <p><a href="https://historia-arte.com/obras/las-senoritas-de-avignon"><center><b>Las señoritas de Avignon</b></center></a></p>
                            </div>
                        </div>
                        <div class="imagen-port">
                            <img src="images/pic/lamujerquellora.jpg" alt="">
                            <div class="hover-galeria">
                                <img src="images/brush.png" alt="">
                                <p><a href="https://www.elsiglodetorreon.com.mx/noticia/828964.la-mujer-que-llora-de-pablo-picasso.html"><center><b>La mujer que llora</b></center></a></p>
                            </div>
                        </div>
                        <div class="imagen-port">
                            <img src="images/pic/elviejoguitarristaciego.jpg" alt="">
                            <div class="hover-galeria">
                                <img src="images/brush.png" alt="">
                                <p><a href="https://es.wikipedia.org/wiki/El_viejo_guitarrista_ciego"><center> <b>El viejo guitarrista ciego</b></center></a></p>
                            </div>
                        </div>
                        <div class="imagen-port">
                            <img src="images/pic/autorretrato.jpg" alt="">
                            <div class="hover-galeria">
                                <img src="images/brush.png" alt="">
                                <p><a href="http://www.theartwolf.com/self-portraits/picasso-autorretrato.htm"><center><b>Autorretrato</b></center></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
       
@stop
@section('footer')

@stop
