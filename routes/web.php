<?php

use App\Http\Controllers\TestEnrollmentController;
use App\Mail\WelcomeMail;
use App\Notifications\TestEnrollment;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Rotte GET
Route::view('/script','script')->name('script');
Route::get('/', [\App\Http\Controllers\DashboardController::class, 'viewAll'])->name('dashboard');
Route::get('/eventi', [\App\Http\Controllers\EventController::class,'getEvents'])->name('eventi');
Route::get('/evento-{id}', [\App\Http\Controllers\EventController::class,'getEvent'])->name('evento');
Route::get('/sottoevento-{id}', [\App\Http\Controllers\SubeventController::class,'getSubevent'])->name('sottoevento');
Route::get('/calendario-eventi', [\App\Http\Controllers\CalendarioEventiController::class, 'visualizzazioneCalendarioEventi'])->name('calendario-eventi');
Route::view('/creazione-evento', 'creazione-evento')->name('creazione-evento')->middleware('auth');
Route::view('/storico-eventi', 'storico-eventi')->name('storico-eventi')->middleware('auth');
Route::view('/eventi-preferiti', 'eventi-preferiti')->name('eventi-preferiti')->middleware('auth');
Route::get('/artista-{id}', [\App\Http\Controllers\ArtistController::class, 'viewArtist'])->name('artista');
Route::view('/eventi-organizzati', 'eventi-organizzati')->name('eventi-organizzati<')->middleware('auth');
Route::view('/pricing', 'pricing')->name('pricing');
Route::view('/carrello', 'carrello')->name('carrello')->middleware('auth');
Route::view('/about', 'about')->name('about');
Route::get('/topics', [\App\Http\Controllers\TopicController::class, 'visualizzaTopics'])->name('topics');
Route::get('/topic-{id}', [\App\Http\Controllers\TopicController::class, 'visualizzaTopic'])->name('topic');
Route::view('/creazione-topic', 'creazione-topic')->name('creazione-topic')->middleware('auth');
Route::view('/profilo', 'profilo')->name('profilo')->middleware('auth');
Route::get('/topics', [\App\Http\Controllers\TopicController::class, 'ricercaTopics'])->name('topics');
Route::view('/calendario-eventi-preferiti', 'calendario-eventi-preferiti')->name('calendario-eventi-preferiti')->middleware('auth');
Route::get('/lista-utenti', [\App\Http\Controllers\ChatController::class, 'viewList'])->name('lista-utenti')->middleware('auth');
Route::get('/chat-utente-{id}', [\App\Http\Controllers\ChatController::class, 'viewChat'])->name('chat-utente')->middleware('auth');
Route::get('/eventi-consigliati', [\App\Http\Controllers\EventController::class, 'viewEventiConsigliati'])->name('eventi-consigliati')->middleware('auth');
Route::get('/calendario-eventi-prenotati', [\App\Http\Controllers\CalendarioEventiPrenotatiController::class,'visualizzaCalendario'])->name('calendario-eventi-prenotati')->middleware('auth');
Route::get('/eventi-prenotati', [\App\Http\Controllers\EventiPrenotatiController::class,'visualizzaEventi'])->name('eventi-prenotati')->middleware('auth');
Route::get('/send-testenrollment',[TestEnrollmentController::class, 'sendTestNotification']);
Route::get('/contact-us',[\App\Http\Controllers\ContactController::class,'contact'])->name('contact-us');
// rotte mail
Route::get('/email', function() {
    Mail::to('casciani99@gmail.com')->send(new WelcomeMail());
    return new WelcomeMail();
});

// Rotte POST
Route::post('/profilo', [\App\Http\Controllers\UserController::class, 'modifica'])->name('profilo')->middleware('auth');
Route::post('/creazione-evento', [\App\Http\Controllers\EventController::class, 'creaEvento'])->name('creazione-evento')->middleware('auth');
Route::post('/topic-{id}', [\App\Http\Controllers\TopicController::class, 'inserisciCommento'])->name('topic');
Route::post('/creazione-topic', [\App\Http\Controllers\TopicController::class, 'creazioneTopic'])->name('creazione-topic')->middleware('auth');
Route::post('/eventi', [\App\Http\Controllers\EventController::class,'ricerca'])->name('eventi');
Route::post('/eventi-organizzati', [\App\Http\Controllers\EventController::class, 'creaDettagliEventi'])->name('eventi-organizzati')->middleware('auth');
Route::post('/ricerca', [\App\Http\Controllers\RicercaController::class, 'ricercaCompleta'])->name('ricerca');
Route::post('/sottoevento-{id}', [\App\Http\Controllers\SubeventController::class,'editPreferiti'])->name('sottoevento')->middleware('auth');
Route::post('/eventi-preferiti', [\App\Http\Controllers\SubeventController::class, 'favoriteSubevent'])->name('eventi-preferiti')->middleware('auth');
Route::post('/acquisto-simulato', [\App\Http\Controllers\EventController::class, 'AcquistoSimulato'])->name('acquisto-simulato');
Route::post('/calendario-eventi-preferiti', [\App\Http\Controllers\CalendarioSottoeventiController::class, 'favoriteSubevent'])->name('calendario-eventi-preferiti')->middleware('auth');
Route::post('/lista-utenti', [\App\Http\Controllers\ChatController::class, 'cercaUtente'])->name('lista-utenti')->middleware('auth');
Route::post('/chat-utente-{id}', [\App\Http\Controllers\ChatController::class, 'invioMessaggio'])->name('chat-utente')->middleware('auth');

Route::middleware('admin')->group(function () {
    // Rotte ADMIN
    Route::get('/admin/dashboard', [\App\Http\Controllers\DashboardAdminController::class, 'vediTutto'])->name('admin.dashboard');
    Route::get('/admin/events', [\App\Http\Controllers\ListaEventiAdminController::class, 'listaEventi'])->name('admin.events');
    Route::view('/admin/aggiungi-evento', 'creazione-evento')->name('admin.aggiungi-evento');
    Route::get('/admin/topics', [\App\Http\Controllers\ListaTopicsAdminController::class, 'listaTopics'])->name('admin.topics');
    Route::get('/admin/artists', [\App\Http\Controllers\ListaArtistiAdminController::class, 'listaArtisti'])->name('admin.artists');
    Route::view('/admin/aggiungi-artista', 'admin.aggiungi-artista')->name('admin.aggiungi-artista');
    Route::get('/admin/pricing', [\App\Http\Controllers\ListaOfferteAdminController::class, 'listaOfferte'])->name('admin.pricing');
    Route::view('/admin/aggiungi-pricing', 'admin.aggiungi-pricing')->name('admin.aggiungi-pricing');
    Route::view('/admin/kinds', 'admin.kinds')->name('admin.kinds');
    Route::get('/admin/kinds', [\App\Http\Controllers\ListaGeneriAdminController::class,'listaGeneri'])->name('admin.kinds');
    Route::view('/admin/aggiungi-kinds', 'admin.aggiungi-kinds')->name('admin.aggiungi-kinds');
    Route::get('/admin/topic-{id}', [\App\Http\Controllers\ListaTopicsAdminController::class, 'singoloTopic'])->name('admin.topic');
    Route::get('/admin/artista-{id}', [\App\Http\Controllers\ListaArtistiAdminController::class, 'singoloArtista'])->name('admin.artista');
    Route::get('/admin/evento-{id}', [\App\Http\Controllers\ListaEventiAdminController::class, 'singoloEvento'])->name('admin.evento');
    Route::view('/admin/gestione-utenti', 'admin.gestione-utenti')->name('admin.gestione-utenti');
    Route::get('/admin/modifica-pricing-{id}', [\App\Http\Controllers\ListaOfferteAdminController::class, 'viewModifica'])->name('admin.modifica-pricing');
    Route::get('/admin/prenotazioni-{id}', [\App\Http\Controllers\ListaPrenotazioniAdminController::class, 'viewPrenotazioni'])->name('admin.prenotazioni');
    Route::get('/admin/modifica-evento-{id}', [\App\Http\Controllers\ListaEventiAdminController::class, 'modifica'])->name('admin.modifica-evento');
    Route::get('/admin/modifica-artista-{id}',[\App\Http\Controllers\ListaArtistiAdminController::class, 'caricaArtista'])->name('admin.modifica-artista');
    // Rotte POST ADMIN
    Route::post('/admin/aggiungi-pricing', [\App\Http\Controllers\ListaOfferteAdminController::class, 'aggiungiOfferta'])->name('admin.aggiungi-pricing');
    Route::post('/admin/pricing', [\App\Http\Controllers\ListaOfferteAdminController::class, 'eliminaOfferta'])->name('admin.pricing');
    Route::post('/admin/modifica-evento-{id}', [\App\Http\Controllers\ListaEventiAdminController::class, 'modificaEvento'])->name('admin.modifica-evento');
    Route::post('/admin/modifica-artista-{id}', [\App\Http\Controllers\ListaArtistiAdminController::class, 'modificaArtista'])->name('admin.modifica-artista');
    Route::post('/admin/gestione-utenti', [\App\Http\Controllers\UtentiAdmin::class, "changeCategoria"])->name('admin.gestione-utenti');
    Route::post('/admin/modifica-pricing-{id}', [\App\Http\Controllers\ListaOfferteAdminController::class, 'modificaOfferta'])->name('admin.modifica-pricing');
    Route::post('/admin/events', [\App\Http\Controllers\ListaEventiAdminController::class, 'elimina'])->name('admin.events');
    Route::post('/admin/evento-{id}', [\App\Http\Controllers\ListaEventiAdminController::class, 'elimina'])->name('admin.evento');
    Route::post('/admin/evento-{id}', [\App\Http\Controllers\ListaEventiAdminController::class, 'approvaEvento'])->name('admin.evento');
    Route::post('/admin/topics', [\App\Http\Controllers\ListaTopicsAdminController::class, 'elimina'])->name('admin.topics');
    Route::post('/admin/topic-{id}', [\App\Http\Controllers\ListaTopicsAdminController::class, 'elimina'])->name('admin.topic');
    Route::post('/admin/aggiungi-artista', [\App\Http\Controllers\ListaArtistiAdminController::class, 'aggiungiArtista'])->name('admin.aggiungi-artista');
    Route::post('/admin/artists', [\App\Http\Controllers\ListaArtistiAdminController::class, 'eliminaArtista'])->name('admin.artists');
    Route::post('/admin/artista-{id}', [\App\Http\Controllers\ListaArtistiAdminController::class, 'eliminaArtista'])->name('admin.artista');
    Route::post('/admin/kinds', [\App\Http\Controllers\ListaGeneriAdminController::class, 'eliminaGenere'])->name('admin.kinds');
    Route::post('/admin/aggiungi-kinds', [\App\Http\Controllers\ListaGeneriAdminController::class, 'aggiungiGenere'])->name('admin.aggiungi-kinds');

});

require __DIR__.'/auth.php';
