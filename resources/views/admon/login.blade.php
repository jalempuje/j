@extends('layouts.master')
@section('title', 'Bienvenidisimos')
@section('header')
@stop
@section('navbar')

            <a href="{{action('controlador@van')}}">Vincent Van Gogh</a>
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
          <li><a href="https://www.youtube.com/watch?v=om0y8ly1IZE">Van Gogh<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
          <li><a href="https://www.youtube.com/watch?v=YZ_KP3M85S0">Leo<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
          <li><a href="https://www.youtube.com/watch?v=Y04tBGUpFgc">Elisabeth<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
          <li><a href="https://www.youtube.com/watch?v=jek99pxYsN0">Frida<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
          <li><a href="https://www.youtube.com/watch?v=tqzoDm9D9X8">Picasso<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
        </ul>
      </div>
@stop
@section('content')
        <section class="contenedor sobre-nosotros">
            <h2 class="titulo">Sean bienvenidisimos a mi páginaa, los qm</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="images/sailor1.jpg" alt="" class="imagen-about-us">
                <div class="contenido-textos">
                 <p>
                <form action="{{action('controlador@validarlogin')}}" method="post">
                {{csrf_field()}}
                <label for="user">Usuario</label>
                <input type="text" name="user"></input>
                <br>
                <label for="password">Contraseña</label>
                <input type="password" name="password"></input>
                <br>
                <label for="key">Key</label>
                <input type="text" name="key"></input>
                <br>
                <input type="submit" value="submit">
                </form>
                </p>
                </div>
            </div>
            <section class="portafolio">
                <div class="contenedor">
                    <h2 class="titulo"></h2>
                    <div class="galeria-port">
                        <div class="imagen-port">
                            <img src="images/harry.jpg" alt="">
                            <div class="hover-galeria">
                                <img src="images/brush.png" alt="">
                                <p> <a href="https://es.wikipedia.org/wiki/Harry_Styles"><center><b>Harry</b></center></a></p>
                            </div>
                        </div>
                        <div class="imagen-port">
                            <img src="images/harryy.jpg" alt="">
                            <div class="hover-galeria">
                                <img src="images/brush.png" alt="">
                                <p><a href="https://hstyles.co.uk/"><center><b>J0trón</b></center></a></p>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </section>
            
       
@stop
@section('footer')

@stop
