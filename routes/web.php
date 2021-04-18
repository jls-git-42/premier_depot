<?php

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('Pages/home');
})->name('app_home');

// on peut aussi ecrire les fonctions de call back comme ci dessous en php
//Route::get('/', fn() => view('Pages/home'))->name('app_home');

// on peut aussi appeller une route directement sous Laravel
//Route::view('/','Pages/home')->name('app_home');

Route::get('/about_us', function () {
    $nom= 'Stollini';
    $prenom = 'Jean Louis';
    return view('Pages/about',compact('nom','prenom'));
})->name('app_about');

// passage de variables a une vue ...
// solution identique a la façon controleur avec utilisation de compact, dans un render
Route::get('/help', function () {
    // definition des variables a passer a la vue

    //$isWeekEnd = date('N') >= 6;
    //dd($isWeekEnd);
    $nom= 'Stollini';
    $prenom = 'Jean Louis';
    
    return view('Pages/help',compact('nom','prenom')); // retour via view de la vue a afficher et des parametres a passer
})->name('app_help');

Route::get('/event', function () {

    // creation des donnees pour eviter le risque d'injection sql on utilise les parametre només d'une requette préparée
   /* $titre='Super Titre';
    $contenu='Super Contenu';
    DB::insert('INSERT INTO posts(title,contenu) VALUES(:title,:contenu)',['title'=>$titre,'contenu'=>$contenu]);
    */


    // affichage des données via facade DB et sql
    $posts = DB::select('SELECT * FROM posts');
    dump($posts);    
    //dump($posts[0]->title);

    // creation des donnees via query builder (ici la requette preparée est directement taitée)

    /*DB::table('posts')->insert([
                                    ['title'=>'Mon beau titre','contenu'=>'Mon beau contenu'],
                                    ['title'=>'Mon super beau titre','contenu'=>'Mon super beau contenu']
                                ]);
    */
    // affichage des données via facade DB et query builder
    $post2 = DB::table('posts')->get(); //retour de l'ensemble des enregistrements et des champs de la table posts
    dump($post2);
    $first =DB::table('posts')->first(); // retour de l'ensemble des champs et du premier enregostrement de la table posts
    dump($first);
    dump($first->title);
    $part = DB::table('posts')->get(['id','title as Heading']); // retour de deux champs seulement dont un renommé
    dump( $part);
    $selection = DB::table('posts')->where('id','>=',3)->get();// retour des enregistrement avec id >= 3
    dump( $selection);

    $selection2 = DB::table('posts')->whereTitleAndContenu('Super Titre','Super Contenu')->get();
    dump($selection2);
    //on peut aussi ecrire
    $selection3 = DB::table('posts')
                ->where('title','=','Autre Titre') // pour ecrire wehre title and wherecontenu on met deux where le andwhere n'existe pas
                //->where ('contenu','=','Un contenu')
                ->orWhere('contenu','=','Autre Contenu')
                ->get();
    dump($selection3);
    
    //modifier un enregistrement
    DB::table('posts')->whereId(2)->update(['title'=>'Nouveau Titre','contenu'=>'Nouveau Contenu']);
    //supprimer un enregistrement iic l'enregistrement avec Id = 2
    //DB::table('posts')->whereId(2)->delete();
    
    // acceder à un enregistrement via un modele ici le modele post
        
    $post = Post::find(4);
    dump($post->title);

    //acceder a l'ensemble de la table
    dump(Post::all());

    //nouvel enregistrement via un modele ici post
        // Methode 1 - ne nécessite pas de declaration en mass-assignable dans la classe modèle Post 
    /*$post=new Post;                             // instanciation
    $post->title = 'Mon joli Titre';            // saisie
    $post->contenu = 'Mon joli Contenu';
    $post->save();                              //enregistrement en base
    */
        // Methode 2 - nécessite une declaration en mass-assignable dans la classe modèle Post 
    /*$post= new Post(['title'=>'Mon Joli Titre 2','contenu'=>'Mon joli Contenu 2']);
    $post->save();
        */
        // Methode 3 - nécessite une declaration en mass-assignable dans la classe modèle Post 
    //Post::create(['title'=>'Mon Joli Titre 3','contenu'=>'Mon joli Contenu 3']);

     
    // definition des variables a passer a la vue
    $actions=['Action_1','Action_2','Action_3','Action_4'];
    
    return view('Pages/event',compact('actions')); // retour via view de la vue a afficher et des parametres a passer
})->name('app_event');

/*
Route::get('/help', function () {
    // definition des variables a passer a la vue
    $nom= 'Stollini';
    $prenom = 'Jean Louis';
    // mise en forme des données qui seront passées au constructeur dans un tableau
    $data=['nom'=>$nom,'prenom'=> $prenom];
    // on peut aussi directement ecrire
    //$data=['nom'=>'Stollini','prenom'=> 'Jean Louis'];

    return view('Pages/help',$data); // retour via view de la vue a afficher et des parametres a passer
})->name('app_help');
*/


/*
Route::get('/help', function () {
    $vue = view::make('Pages/help');
    $vue->nom='stollini';
    $vue->prenom='Jean Louis';

    return $vue; 
})->name('app_help');
*/

