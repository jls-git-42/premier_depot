@extends('/Layouts/app',['pageTitle'=>'About_Us'])


<!-- @section('title','About-Us | '.config('app.name'))  titre de la page en second argument -->

@section('content') 
    
    <img src="{{asset('/Img/Blender_logo.png')}}" alt="Blender" class="rounded-full shadow-md my-12">

    
    <h1 class="text-gray-700 mb-5"> 
    Construit Avec <span class="text-pink-500">&hearts;</span> Par Moi Meme ...
    </h1>

    <p><a href="{{route('app_home')}}" class="text-indigo-400 underline hover:text-indigo-600">
     Revenir Vers La Page D'accueil ...
    </a></p>
    
@endsection
