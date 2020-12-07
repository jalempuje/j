@extends('layouts.master')
@section('title', 'Frida Khalo')
@section('header')
@stop
@section('navbar')

            <a href="{{action('controlador@login')}}">Home</a>
            <a href="{{action('controlador@leo')}}">Leonardo Da Vinci</a>
            <a href="{{action('controlador@eli')}}">Elisabeth Vigée-Lebrun</a>
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
          <li><a href="https://www.youtube.com/watch?v=Y04tBGUpFgc">Elisabeth<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
          <li><a href="https://www.youtube.com/watch?v=jek99pxYsN0">Picasso<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
          <li><a href="https://www.youtube.com/watch?v=tqzoDm9D9X8">Van Gogh<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
        </ul>
      </div>
@stop
@section('content')
        <section class="contenedor sobre-nosotros">
            <h2 class="titulo">Frida Khalo</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="images/fri/f.jpg" alt="" class="imagen-about-us">
                <div class="contenido-textos">
                    
                <p>Magdalena Carmen Frida Kahlo Calderón fue una pintora mexicana, nació el 6 de julio de 1907 en Coyoacán, México. Conocida en el mundo por el sufrimiento que reflejaban sus obras, que están basadas en su vida y las diversas situaciones que debió afrontar.

                        Frida Kahlo es la tercera hija de la unión entre el fotógrafo alemán, Guillermo Kahlo, y Matilde Calderón. La primera hija fue Matilde, de ahí siguió Adriana, Guillermo (Murió a los pocos días), Frida y Cristina; Cristina fue la más unida a Frida y fue la única que dejó descendencia. Guillermo Kahlo antes de conocer a Matilde, tuvo una relación con María Cardeña Espino, quien murió en el parto de Margarita, con quien tuvo tres hijas: Luisa, María (falleció a los pocos días de nacida) y Margarita.
                        
                        En septiembre de 1926 Frida Kahlo hizo su primer autorretrato, lo pintó como regalo para su novio de aquellos tiempos, Alejandro Gómez Arias, quien había terminado la relación. Se lo dio con el fin de recuperar su afecto y que la recordara. En la parte de atrás escribió en alemán: “Hoy es siempre todavía”.
                        
                        En 1927 Frida ya había hecho varios retratos, entre esos a su hermana menor, Cristina. Para ese tiempo Frida ya frecuentaba ambientes políticos, intelectuales y artísticos. Frida conoció a Julio Antonio Mella, un comunista cubano, y su esposa, la fotógrafa Tina Modotti. Tina y Frida se hicieron amigas y Tina invitaba a Frida Kahlo a varias reuniones políticas del partido comunista mexicano, organización en la que se incorporó Frida.
                    </p>
                    
                </div>
            </div>
            <section class="portafolio">
                <div class="contenedor">
                    <h2 class="titulo">Obras más importantes: </h2>
                    <div class="galeria-port">
                        <div class="imagen-port">
                            <img src="images/fri/naturalezamuerta.jpg" alt="">
                            <div class="hover-galeria">
                                <img src="images/brush.png" alt="">
                                <p> <a href="https://es.wikipedia.org/wiki/Naturaleza_muerta:_viva_la_vida"><center><b>Naturaleza muerta: Viva la vida</b></center></a></p>
                            </div>
                        </div>
                        <div class="imagen-port">
                            <img src="images/fri/lasdosfridas.jpg" alt="">
                            <div class="hover-galeria">
                                <img src="images/brush.png" alt="">
                                <p><a href="https://es.wikipedia.org/wiki/Las_dos_Fridas"><center><b>Las dos Fridas</b></center></a></p>
                            </div>
                        </div>
                        <div class="imagen-port">
                            <img src="images/fri/lacolumnarota.jpg" alt="">
                            <div class="hover-galeria">
                                <img src="images/brush.png" alt="">
                                <p><a href="https://es.wikipedia.org/wiki/La_columna_rota"><center><b>La columna rota</b></center></a></p>
                            </div>
                        </div>
                        <div class="imagen-port">
                            <img src="images/fri/autorretratoconcollardeespinasycolibri.jpg" alt="">
                            <div class="hover-galeria">
                                <img src="images/brush.png" alt="">
                                <p><a href="https://noticias.universia.com.ec/en-portada/noticia/2013/05/30/1027408/descubre-autorretrato-collar-espinas-frida-kahlo.html"><center> <b>Autorretrato con collar de espinas y colibrí</b></center></a></p>
                            </div>
                        </div>
                        <div class="imagen-port">
                            <img src="images/fri/hospitalhenryford.jpg" alt="">
                            <div class="hover-galeria">
                                <img src="images/brush.png" alt="">
                                <p><a href="https://artsandculture.google.com/asset/henry-ford-hospital-frida-kahlo/kgHTa-02kVhHJA?hl=es-419"><center><b>Hospital Henry Ford</b></center></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
       
@stop
@section('footer')

@stop
