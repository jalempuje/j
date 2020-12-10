@extends('layouts.master')
@section('title', 'Mostrar Usuarios')
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
            <h2 class="titulo">Usuarios</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="images/harryy.jpg" alt="" class="imagen-about-us">
                <div class="contenido-textos">
                 
                 <div>
                <a href="{{action('Crud@create')}}"><img src="{{url('/images/icons8-nuevo-64.png')}}"> Agregar un nuevo Usuario</a>
                </div>  

          <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Usuario</th>
                <th scope="col">Password</th>
                <th scope="col">Llave</th>
                <th scope="col">Actualizar</th>
                <th scope="col">Borrar</th>
              </tr>
            </thead>
            <tbody>
            @foreach($usuarios as $user)
              <tr>
                <th scope="row">{{$user->idUsuario}}</th>
                <td>{{$user->Usuario}}</td>
                <td>{{$user->password}}</td>
                <td>{{$user->key}}</td>
                <td><a href="{{action('Crud@show',['id'=>$user->idUsuario])}}"><img src="{{url('/images/icons8-aprobar-y-actualizar-64.png')}}"></a> </td>
                <td><a href="{{action('Crud@destroy',['id'=>$user->idUsuario])}}"><img src="{{url('/images/icons8-eliminar-64.png')}}"></a> </td>
              </tr>
              @endforeach
            </tbody>
          </table>      
            </div>
            </div>
            <section class="portafolio">
                <div class="contenedor">
                    <h2 class="titulo">Find me on: </h2>
                    <div class="galeria-port">
                        <div class="imagen-port">
                            <img src="images/sailor.jpg" alt="">
                            <div class="hover-galeria">
                                <img src="images/brush.png" alt="">
                                <p> <a href="https://twitter.com/sheerandarlin?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><center><b>JaleTW</b></center></a></p>
                            </div>
                        </div>
                        <div class="imagen-port">
                            <img src="images/sailor1" alt="">
                            <div class="hover-galeria">
                                <img src="images/brush.png" alt="">
                                <p><a href="https://www.instagram.com/jalempuje/?hl=es-la"><center><b> Jale</b></center></a></p>
                            </div>
                        </div>   
                    </div>
                </div>
            </section>
       
@stop
@section('footer')

@stop
