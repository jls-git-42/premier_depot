@extends('/Layouts/app',['pageTitle'=>'Event'])


<!-- @section('title','About-Us | '.config('app.name'))  titre de la page en second argument -->

@section('content') 
        
    <h1 class="text-3xl sm:text-5xl font-semibold text-indigo-600 mt-5"> 
    Actions ... 
    </h1>

    <p>
        <?php dump($actions) ?> <!-- affiche un tableau sous laravel, equivaut a un vardump sous php-->
        <?= var_dump($actions) ?>

        <ul class="list-disc">
            <!-- affichage des données sans utiliser blade
            <?//php foreach($actions as $action):?>
                <li><?//= $action?></li>
            <?//php endforeach;?> -->

            <!-- affichage des données avec blade -->
            @foreach($actions as $action)
            <li>{{$action}}</li>
            @endforeach


        </ul>
    </p>

    <p><a href="{{route('app_home')}}" class="text-indigo-400 underline hover:text-indigo-600">
     Revenir Vers La Page D'accueil ...
    </a></p>
    
@endsection
