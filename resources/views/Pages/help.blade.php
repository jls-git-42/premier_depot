
@extends('/Layouts/app',['pageTitle'=>'Help'])

@section('content') 

    <h1 class="text-3xl sm:text-5xl font-semibold text-indigo-600 mt-5">Help</h1>

    <P> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia commodi 
    quisquam sint, maxime delectus totam, sapiente minima voluptatum assumenda incidunt rem iure 
    quod aliquam earum sequi error fugit harum non!
    </P>

    @include('/Layouts/Share/_isweekend')

    <p><a href="{{route('app_home')}}" class="text-indigo-400 underline hover:text-indigo-600">
     Revenir Vers La Page D'accueil ...
    </a></p>
   
@endsection