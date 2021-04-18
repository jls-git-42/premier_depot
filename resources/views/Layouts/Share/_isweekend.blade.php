@inject('date','\App\Utilities\Date') <!-- Appel du service date via la classe Date -->

<P> Nom     : {{$nom }}</br>
    Prenom  : {{$prenom }}</br>
    Activité: @if($date::isWeekEnd()) {{"C'et le Week End,Vas T'Amuser"}} @else {{"C'est la semaine, Vas Travailler"}} @endif
</P>