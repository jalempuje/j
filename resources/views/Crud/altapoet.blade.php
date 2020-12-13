@extends('layouts.master')
@if(isset($poets) and is_object($poets))
    @php
        $title='Modificacion de un Poeta';
        $poet_code=$poets->Code;
        $first_name=$poets->First name;
        $surname=$poets->Surname;
        $address=$poets->Address;
        $postcode=$poets->Postcode;
        $telephone_number=$poets->Telephone number;        
        $boton='Actualizar';
    @endphp
@else
    @php
        $title='Alta de un usuario';
        $poet_code='';
        $first_name='';
        $surname='';
        $address='';
        $postcode='';
        $telephone_number='';
        $boton='Inserrtar';
    @endphp
@endif
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
            <h2 class="titulo">Poetas</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="images/eli/e.jpg" alt="" class="imagen-about-us">
                <div class="contenido-textos">
  
                
                <form action="{{isset($poets) ? action('poetscircle@update') :action('poetscircle@store')}}" method="POST">
                {{csrf_field()}}
                @if(isset($poets) and is_object($poets))
                <input type="hidden" name="Code" value="{{$poet_code}}">
                @endif
                <label for="First name">First name</label>
                <input type="text" name="First name">
                <br>
                <label for="Surname">Surname</label>
                <input type="text" name="Surname">
                <br>
                <label for="Address">Address</label>
                <input type="text" name="Address">
                <br>
                <label for="Postcode">Postcode</label>
                <input type="text" name="Postcode">
                <br>
                <label for="Telephone number">Telephone number</label>
                <input type="text" name="Telephone number">
                <br>
                <input type="submit" value={{$boton}}>
                </form>
                </div>
            </div>
            <section class="portafolio">
                <div class="contenedor">
                    <h2 class="titulo">Find me on: </h2>
                    <div class="galeria-port">
                        <div class="imagen-port">
                            <img src="images/harryy.jpg" alt="">
                            <div class="hover-galeria">
                                <img src="images/brush.png" alt="">
                                <p> <a href="https://twitter.com/sheerandarlin?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><center><b>JaleTW</b></center></a></p>
                            </div>
                        </div>
                        <div class="imagen-port">
                            <img src="images/harry.jpg" alt="">
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
