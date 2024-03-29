<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{
    public function getdate()
    {
        $voitures = DB::select('select * from voiture ');

        return view('Voiture', [
            'voitures' => $voitures
        ]);
    }
    public function insertData(Request $request)
    {
        $marque = $request->marque;
        $modele = $request->modele;
        $annee = $request->annee;
        $couleur = $request->couleur;
    
        $n = DB::insert('insert into voiture (marque, modele, annee, couleur) values (?, ?, ?, ?)', [$marque, $modele, $annee, $couleur]);
    
        return redirect('/voiture');
    }
    public function updateData($id){
        $voitures = DB::select('select * from voiture where id=? ',[$id]);
        return view('ModifierVoiture',[
            'voitures'=>$voitures
        ]);
    }


    public function saveupdateData(Request $request, $id)
    {
        $marque = $request->marque;
        $modele = $request->modele;
        $annee = $request->annee;
        $couleur = $request->couleur;
    
        // Update the voiture record with the provided ID
        $n = DB::update('update voiture set marque=?, modele=?, annee=?, couleur=? where id=?', [$marque, $modele, $annee, $couleur, $id]);
    
        return redirect('/voiture');
    }
    
    public function deletedate($id)
    {
        DB::delete('delete from voiture where id = ?', [$id]);
        return redirect('/voiture');
    }

    public function deleteVoiture(){
        DB::delete('delete from voiture');
        return redirect('/voiture');
    }
    public function insertVoiture()
    {
    DB::insert("INSERT INTO voiture (marque, modele, annee, couleur) VALUES
        ('Toyota', 'Corolla', 2018, 'Red'),
        ('Honda', 'Civic', 2019, 'Blue'),
        ('Ford', 'Focus', 2017, 'Black'),
        ('Chevrolet', 'Malibu', 2020, 'Silver'),
        ('BMW', 'X5', 2019, 'White')");
        return redirect('/voiture');
    }

// ================================================================================
// public function index()
//   {  
//     $voitures = DB::table('voiture')->get();
//     foreach ($voitures as $voiture) {
//     echo $voiture->marque;
//    }
// }
// public function index(){
//     $voiture = DB::table('voiture')
//     ->select('marque', 'modele as voiture_modele')
//     ->get();
//     echo $voiture;
// }
public function index(){
$voiture = DB::table('voiture')
               ->select(DB::raw('count(*) as voiture_count, id'))
               ->where('id', '<>', 1)
               ->groupBy('id')
               ->get();
    echo $voiture ;

    }
}
