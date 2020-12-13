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
            <h2 class="titulo">Libros</h2>
            
                 <div>
                <a href="{{action('poetscircle@create')}}"><img src="{{url('/images/icons8-nuevo-64.png')}}"> Agregar un nuevo Libro</a>
                </div>  

          <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">Code</th>
                <th scope="col">First name</th>
                <th scope="col">Surname</th>
                <th scope="col">Address</th>
                <th scope="col">Postcode</th>
                <th scope="col">Telephone number</th>
                <th scope="col">Borrar</th>
                <th scope="col">Actualizar</th>
              </tr>
            </thead>
            <tbody>
            @foreach($poets as $poets)
              <tr>
                <th scope="row">{{$poets->poet_code}}</th>
                <td>{{$poets->first_name}}</td>
                <td>{{$poets->surname}}</td>
                <td>{{$poets->address}}</td>
                <td>{{$poets->postcode}}</td>
                <td>{{$poets->telephone_number}}</td>
                <td><a href="{{action('poetscircle@show',['Code'=>$poets->poet_code])}}"><img src="{{url('/images/icons8-aprobar-y-actualizar-64.png')}}"></a> </td>
                <td><a href="{{action('poetscircle@destroy',['Code'=>$poets->poet_code])}}"><img src="{{url('/images/icons8-eliminar-64.png')}}"></a> </td>
              </tr>
              @endforeach
            </tbody>
          </table>      
           
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
