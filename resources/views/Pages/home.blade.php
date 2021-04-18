@extends('/Layouts/app')

@section('content')

    <img src="{{asset('/Img/etang.png')}}" alt="Etang" class="rounded shadow-md h-32 mt-12">

    <h1 class="text-3xl sm:text-5xl font-semibold text-indigo-600 mt-5">
    Hello From Savigneux !!!
    </h1>

    <p class="text-lg text-gray-800 mt-5"> 
    Heure Courante : {{date('d/m/y')}} {{date('h:i A')}}
    </p>

    <p><a href="{{route('app_help')}}" class="text-indigo-400 underline hover:text-indigo-600">
     Aide ...
    </a>&emsp;
    <a href="{{route('app_event')}}" class="text-indigo-400 underline hover:text-indigo-600">
     Event ...
    </a>
    </p>

    <!--{{config('app.name')}}-->

@endsection

@section('script_footer')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
@endsection




