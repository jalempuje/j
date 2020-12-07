@extends('layouts.master')
@section('title', 'Leonardo Da Vinci')
@section('header')
@stop
@section('navbar')

            <a href="{{action('controlador@login')}}">Home</a>
            <a href="{{action('controlador@eli')}}">Elisabeth</a>
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
          <li><a href="https://www.youtube.com/watch?v=YZ_KP3M85S0">Elisabeth<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
          <li><a href="https://www.youtube.com/watch?v=Y04tBGUpFgc">Frida<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
          <li><a href="https://www.youtube.com/watch?v=jek99pxYsN0">Picasso<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
          <li><a href="https://www.youtube.com/watch?v=tqzoDm9D9X8">Van Gogh<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
        </ul>
      </div>
@stop
@section('content')
        <section class="contenedor sobre-nosotros">
            <h2 class="titulo">Leonardo Da Vinci</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="images/leo/l.jpg" alt="" class="imagen-about-us">
                <div class="contenido-textos">
                    
                <p>Leonardo Da Vinci fue un polímata italiano del siglo XV y XVI (nació el 15 de abril de 1452 y murió el 2 de mayo de 1519) conocido principalmente por su destacado talento como pintor, ingeniero e inventor.

Sus obras pictóricas más conocidas son La Gioconda (también conocido como La Mona Lisa) y La última cena (ver imágenes en el punto 2).

Además de estas dos obras de arte, escribió un sinfín de ideas revolucionarias (recogidas en 20 volúmenes) que no pudieron ser desarrolladas hasta varios siglos después, algunas por las limitaciones técnicas existentes en esa época y otras por pequeñas incongruencias en sus bocetos que imposibilitaba el funcionamiento de sus inventos.

<br>Frecuentemente descrito como un arquetipo y símbolo del hombre del Renacimiento, genio universal, además de filósofo humanista cuya curiosidad infinita solo puede ser equiparable a su capacidad inventiva, Leonardo da Vinci es considerado uno de los más grandes pintores de todos los tiempos y, probablemente, la persona con el mayor número de talentos en múltiples disciplinas que jamás ha existido. Como ingeniero e inventor, Leonardo desarrolló ideas muy adelantadas a su tiempo, tales como el helicóptero, el carro de combate, el submarino y el automóvil. Muy pocos de sus proyectos llegaron a construirse (entre ellos la máquina para medir el límite elástico de un cable), puesto que la mayoría no eran realizables durante esa época. Como científico, Leonardo da Vinci hizo progresar mucho el conocimiento en las áreas de anatomía, la ingeniería civil, la óptica y la hidrodinámica.

</p>
                    
                </div>
            </div>
            <section class="portafolio">
                <div class="contenedor">
                    <h2 class="titulo">Obras más importantes: </h2>
                    <div class="galeria-port">
                        <div class="imagen-port">
                            <img src="images/leo/monalisal.jpg" alt="">
                            <div class="hover-galeria">
                                <img src="images/brush.png" alt="">
                                <p> <a href="https://es.wikipedia.org/wiki/La_Gioconda"><center><b>La Mona Lisa</b></center></a></p>
                            </div>
                        </div>
                        <div class="imagen-port">
                            <img src="images/leo/ultimacenal.jpg" alt="">
                            <div class="hover-galeria">
                                <img src="images/brush.png" alt="">
                                <p><a href="https://es.wikipedia.org/wiki/La_%C3%9Altima_Cena"><center><b>La última cena</b></center></a></p>
                            </div>
                        </div>
                        <div class="imagen-port">
                            <img src="images/leo/hombrevirtuanol.jpg" alt="">
                            <div class="hover-galeria">
                                <img src="images/brush.png" alt="">
                                <p><a href="https://es.wikipedia.org/wiki/Hombre_de_Vitruvio"><center><b>Hombre Vitruvio</b></center></a></p>
                            </div>
                        </div>
                        <div class="imagen-port">
                            <img src="images/leo/ginevrade'bencil.jpg" alt="">
                            <div class="hover-galeria">
                                <img src="images/brush.png" alt="">
                                <p><a href="https://es.wikipedia.org/wiki/Retrato_de_Ginebra_de_Benci"><center> <b>Ginevra de' Benci</b></center></a></p>
                            </div>
                        </div>
                        <div class="imagen-port">
                            <img src="images/leo/lavirgendelasrocasl.jpg" alt="">
                            <div class="hover-galeria">
                                <img src="images/brush.png" alt="">
                                <p><a href="https://es.wikipedia.org/wiki/La_Virgen_de_las_Rocas"><center><b> La virgen de las rocas</b></center></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
 
@stop
@section('footer')

@stop
