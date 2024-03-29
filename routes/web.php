<?php

use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;

Route::get('/voiture', [CrudController::class, 'getdate']);

Route::get('/voi', [CrudController::class, 'index']);

Route::get('/ajouter', function(){
    return view('ajouterVoiture');
});

Route::get('/saveajouter', [CrudController::class, 'insertData']);


Route::get('/Modifier/{id} ', [CrudController::class, 'updateData']);

Route::get('/savemodifier/{id} ', [CrudController::class, 'saveupdateData']);

Route::get('/Supprimer/{n} ', [CrudController::class, 'deletedate']);

Route::get('/suppVoi ', [CrudController::class, 'deleteVoiture']);

Route::get('/insrtVoi ', [CrudController::class, 'insertVoiture']);

