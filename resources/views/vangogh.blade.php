@extends('layouts.master')
@section('title', 'Vincent Van Gogh')
@section('header')
@stop
@section('navbar')

            <a href="{{action('controlador@login')}}">Home</a>
            <a href="{{action('controlador@leo')}}">Leonardo Da Vinci</a>
            <a href="{{action('controlador@eli')}}">Elisabeth Vigée-Lebrun</a>
            <a href="{{action('controlador@fri')}}">Frida Khalo</a>
            <a href="{{action('controlador@pic')}}">Pablo Picasso</a>
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
          <li><a href="https://www.youtube.com/watch?v=tqzoDm9D9X8">Picasso<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
        </ul>
      </div>
@stop
@section('content')
        <section class="contenedor sobre-nosotros">
            <h2 class="titulo">Vincent Van Gogh</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="images/van/v.jpg" alt="" class="imagen-about-us">
                <div class="contenido-textos">
                    
                <p>Vincent van Gogh, por quien el color era el símbolo principal de expresión, nació el 30 de marzo de 1853 en Groot-Zundert de Holanda. El hijo de un pastor, criado en una atmósfera religiosa y refinada, Vincent era muy emocional y no tenía confianza en sí mismo. Entre 1860 y 1880, cuando decidió finalmente ser artista, Van Gogh había tenido dos amores inadecuados y infelices y había trabajado sin éxito como empleado en una librería, vendedor de arte, y predicador en Le Borinage (una región aburrida de minera en Bélgica), donde fue despedido por “exceso de celo.”

Se quedó en Bélgica a estudiar el arte, dedicado para dar felicidad creando belleza. Las obras de este período temprano en Holanda son pinturas de género muy iluminadas y de tonos sombríos de las que la más famosa es Los comedores de papas (1885). En ese año Van Gogh fue a Antwerp donde descubrió las obras de Rubens y compró muchos grabados japoneses.
Durante su carrera breve vendió solamente una pintura. Las obras más finas de Van Gogh fueron producidas en menos de tres años por una técnica que crecía más y más apasionada en la brochada, en color simbólico e intenso, en tensión superficial, y en el movimiento y la vibración de forma y línea. La fusión inimitable de forma y contenido de Van Gogh es poderosa, dramática, rítmica, imaginativa y emocional. El artista estaba absorto completamente en el esfuerzo para explicar su lucha contra su locura o en la comprensión de la esencia espiritual de hombre y naturaleza.
</p>
                </div>
            </div>
            <section class="portafolio">
                <div class="contenedor">
                    <h2 class="titulo">Obras más importantes: </h2>
                    <div class="galeria-port">
                        <div class="imagen-port">
                            <img src="images/van/lanocheestrellada.jpg" alt="">
                            <div class="hover-galeria">
                                <img src="images/brush.png" alt="">
                                <p> <a href="https://www.todocuadros.com.mx/van-gogh/noche-estrellada.htm"><center><b>La noche estrellada</b></center></a></p>
                            </div>
                        </div>
                        <div class="imagen-port">
                            <img src="images/van/autorretrato.jpg" alt="">
                            <div class="hover-galeria">
                                <img src="images/brush.png" alt="">
                                <p><a href="https://www.vangoghgallery.com/es/pinturas/autorretratos.html"><center><b>Autorretrato</b></center></a></p>
                            </div>
                        </div>
                        <div class="imagen-port">
                            <img src="images/van/terrazadecafeporlanoche.jpg" alt="">
                            <div class="hover-galeria">
                                <img src="images/brush.png" alt="">
                                <p><a href="https://es.wikipedia.org/wiki/Terraza_de_caf%C3%A9_por_la_noche"><center><b>La terraza de café por la noche</b></center></a></p>
                            </div>
                        </div>
                        <div class="imagen-port">
                            <img src="images/van/loscomedoresdepatatas.jpg" alt="">
                            <div class="hover-galeria">
                                <img src="images/brush.png" alt="">
                                <p><a href="https://es.wikipedia.org/wiki/Los_comedores_de_patatas"><center> <b>Los comedores de patatas</b></center></a></p>
                            </div>
                        </div>
                        <div class="imagen-port">
                            <img src="images/van/lirios.jpg" alt="">
                            <div class="hover-galeria">
                                <img src="images/brush.png" alt="">
                                <p><a href="https://es.wikipedia.org/wiki/Lirios_(Van_Gogh)"><center><b>Lirios</b></center></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
       
@stop
@section('footer')

@stop
