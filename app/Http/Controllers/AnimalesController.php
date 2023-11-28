<?php

namespace App\Http\Controllers;

use App\Models\Animales;
use App\Models\Zoologicos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnimalesController extends Controller
{
    public function index($id){
        $IDzoo = Zoologicos::find($id);
        $id = $IDzoo->id;
        $animales = Animales::all()->where('zoologico_id', '=' , $id);
        $especiesAnimales = Animales::select('especie', DB::raw('count(*) as totalEspecies'))->where('zoologico_id', '=', $id)
        ->groupBy('especie')
            ->get();
    
        $data = [];
    
        foreach ($especiesAnimales as $animal){
            $data['label'][] = $animal->especie;
            $data['data'][] = $animal->totalEspecies;
        }
    
    
        $data['data'] = json_encode($data);
        return view("animales.index", compact('animales', 'id'), $data);
    }

    public function inicio($id){
        $IDzoo = Zoologicos::find($id);
        $id = $IDzoo->id;
        $animales = Animales::all()->where('zoologico_id', '=' , $id);
        $especiesAnimales = Animales::select('especie', DB::raw('count(*) as totalEspecies'))->where('zoologico_id', '=', $id)
        ->groupBy('especie')
            ->get();
    
        $data = [];
    
        foreach ($especiesAnimales as $animal){
            $data['label'][] = $animal->especie;
            $data['data'][] = $animal->totalEspecies;
        }
    
    
        $data['data'] = json_encode($data);
        return view("zoologicoEstados.inicio", compact('animales', 'id'), $data);
    }


    public function create($id){
        $IDzoo = Zoologicos::find($id);
        $animales = Animales::all();
        $especies = ["mamiferos", "aves", "reptiles", "ranas", "peces", "cienpies", "arañas/alacranes", "erizos", "caracoles", "lombrices", "rotiferos", "medusas", "esponjas"];
        $habitads = ["pradera", "bosque", "desierto", "montaña", "sabana", "tundra", "altiplano", "lago", "pantano", "rio", "arrecifeCoral", "oceano", "playa"];
        $alimentacion = ["carnivoro", "herbivoro", "omnivoro"];
        $paises = ["Afganistán","Albania","Alemania","Andorra","Angola","Antigua y Barbuda","Arabia Saudita","Argelia","Argentina","Armenia","Australia ","Austria","Azerbaiyán","Bahamas","Bangladés","Barbados","Baréin","Bélgica","Belice","Benín","Bielorrusia","Birmania","Bolivia", "Bosnia y Herzegovina","Botsuana","Brasil","Brunéi","Bulgaria","Burkina Faso","Burundi","Bután","Cabo Verde","Camboya","Camerún","Canadá ","Catar","Chad","Chile","China","Chipre","Ciudad del Vaticano","Colombia","Comoras","Corea del Norte","Corea del Sur","Costa de Marfil","Costa Rica","Croacia","Cuba","Dinamarca","Dominica","Ecuador","Egipto","El Salvador","Emiratos Árabes Unidos","Eritrea","Eslovaquia ","Eslovenia","España","Estados Unidos","Estonia","Etiopía","Filipinas","Finlandia","Fiyi","Francia","Gabón","Gambia","Georgia" ,"Ghana","Granada","Grecia","Guatemala","Guyana","Guinea","Guinea ecuatorial","Guinea-Bisáu","Haití","Honduras","Hungría","India ","Indonesia","Irak","Irán","Irlanda","Islandia","Islas Marshall","Islas Salomón","Israel","Italia","Jamaica","Japón","Jordania ","Kazajistán","Kenia","Kirguistán","Kiribati","Kuwait","Laos","Lesoto","Letonia","Líbano","Liberia","Libia","Liechtenstein", "Lituania","Luxemburgo","Madagascar","Malasia","Malaui","Maldivas","Malí","Malta","Marruecos","Mauricio","Mauritania","México","Micronesia ","Moldavia","Mónaco","Mongolia","Montenegro","Mozambique","Namibia","Nauru","Nepal","Nicaragua","Níger","Nigeria","Noruega", "Nueva Zelanda","Omán","Países Bajos","Pakistán","Palaos","Palestina","Panamá","Papúa Nueva Guinea","Paraguay","Perú","Polonia","Portugal","Reino Unido","República Centroafricana","República Checa","República de Macedonia","República del Congo","República Democrática del Congo","República Dominicana","República Sudafricana","Ruanda ","Rumanía","Rusia","Samoa","San Cristóbal y Nieves","San Marino","San Vicente y las Granadinas","Santa Lucía","Santo Tomé y Príncipe","Senegal", "Serbia","Seychelles","Sierra Leona","Singapur","Siria","Somalia","Sri Lanka","Suazilandia","Sudán","Sudán del Sur","Suecia","Suiza ","Surinam","Tailandia","Tanzania","Tayikistán","Timor Oriental","Togo","Tonga","Trinidad y Tobago","Túnez","Turkmenistán","Turquía"," Tuvalu","Ucrania","Uganda","Uruguay","Uzbekistán","Vanuatu","Venezuela","Vietnam","Yemen","Yibuti","Zambia","Zimbabue"];
        $extincion = ["si", "no"];
        return view('animales.create', compact('animales', 'especies', 'habitads', 'alimentacion', 'paises', 'IDzoo', 'extincion'));
    }

    public function store(Request $request, $id){
        $id_zoo = Zoologicos::find($id);
        $id = $id_zoo->id;
        $animales = new Animales();
        $animales->nombre = $request->post('nombre');
        $animales->especie = $request->post('especie');
        $animales->años = $request->post('extincion');
        $animales->origen = $request->post('origen');
        $animales->habitad = $request->post('habitad');
        $animales->alimentacion = $request->post('alimentacion');
        $animales->zoologico_id = $id;
        $animales->save();
        return redirect()->route('animales.index', $id)->with('success');
    }

    public function edit($id){
        $animal = Animales::find($id);
        $idAnimal = $animal->id;
        $idZoo = Zoologicos::all();
        $especies = ["mamiferos", "aves", "reptiles", "ranas", "peces", "cienpies", "arañas/alacranes", "erizos", "caracoles", "lombrices", "rotiferos", "medusas", "esponjas"];
        $habitads = ["pradera", "bosque", "desierto", "montaña", "sabana", "tundra", "altiplano", "lago", "pantano", "rio", "arrecifeCoral", "oceano", "playa"];
        $alimentacion = ["carnivoro", "herbivoro", "omnivoro"];
        $paises = ["Afganistán","Albania","Alemania","Andorra","Angola","Antigua y Barbuda","Arabia Saudita","Argelia","Argentina","Armenia","Australia ","Austria","Azerbaiyán","Bahamas","Bangladés","Barbados","Baréin","Bélgica","Belice","Benín","Bielorrusia","Birmania","Bolivia", "Bosnia y Herzegovina","Botsuana","Brasil","Brunéi","Bulgaria","Burkina Faso","Burundi","Bután","Cabo Verde","Camboya","Camerún","Canadá ","Catar","Chad","Chile","China","Chipre","Ciudad del Vaticano","Colombia","Comoras","Corea del Norte","Corea del Sur","Costa de Marfil","Costa Rica","Croacia","Cuba","Dinamarca","Dominica","Ecuador","Egipto","El Salvador","Emiratos Árabes Unidos","Eritrea","Eslovaquia ","Eslovenia","España","Estados Unidos","Estonia","Etiopía","Filipinas","Finlandia","Fiyi","Francia","Gabón","Gambia","Georgia" ,"Ghana","Granada","Grecia","Guatemala","Guyana","Guinea","Guinea ecuatorial","Guinea-Bisáu","Haití","Honduras","Hungría","India ","Indonesia","Irak","Irán","Irlanda","Islandia","Islas Marshall","Islas Salomón","Israel","Italia","Jamaica","Japón","Jordania ","Kazajistán","Kenia","Kirguistán","Kiribati","Kuwait","Laos","Lesoto","Letonia","Líbano","Liberia","Libia","Liechtenstein", "Lituania","Luxemburgo","Madagascar","Malasia","Malaui","Maldivas","Malí","Malta","Marruecos","Mauricio","Mauritania","México","Micronesia ","Moldavia","Mónaco","Mongolia","Montenegro","Mozambique","Namibia","Nauru","Nepal","Nicaragua","Níger","Nigeria","Noruega", "Nueva Zelanda","Omán","Países Bajos","Pakistán","Palaos","Palestina","Panamá","Papúa Nueva Guinea","Paraguay","Perú","Polonia","Portugal","Reino Unido","República Centroafricana","República Checa","República de Macedonia","República del Congo","República Democrática del Congo","República Dominicana","República Sudafricana","Ruanda ","Rumanía","Rusia","Samoa","San Cristóbal y Nieves","San Marino","San Vicente y las Granadinas","Santa Lucía","Santo Tomé y Príncipe","Senegal", "Serbia","Seychelles","Sierra Leona","Singapur","Siria","Somalia","Sri Lanka","Suazilandia","Sudán","Sudán del Sur","Suecia","Suiza ","Surinam","Tailandia","Tanzania","Tayikistán","Timor Oriental","Togo","Tonga","Trinidad y Tobago","Túnez","Turkmenistán","Turquía"," Tuvalu","Ucrania","Uganda","Uruguay","Uzbekistán","Vanuatu","Venezuela","Vietnam","Yemen","Yibuti","Zambia","Zimbabue"];
        $nacion = Animales::select('origen')->where('id', '=', $id)->get();
        $extincion = ["si", "no"];
        return view("animales.edit", compact('animal','idAnimal', 'idZoo', 'especies', 'paises', 'habitads', 'alimentacion', 'nacion', 'extincion'));

    }


    public function update(Request $request, $id){
        // $id_zoo = Zoologicos::find($id);
        // $id = $id_zoo->id;
        $animales = Animales::find($id);
        $animales->nombre = $request->post('nombre');
        $animales->especie = $request->post('especie');
        $animales->años = $request->post('años');
        $animales->origen = $request->post('origen');
        $animales->habitad = $request->post('habitad');
        $animales->alimentacion = $request->post('alimentacion');
        $animales->zoologico_id = $request->post('idZoo');
        $animales->save();
        return redirect()->route('animales.index', $animales->zoologico_id = $request->post('idZoo'))->with('success');
    }

    public function show($id){
        $animal = Animales::find($id);
        return view('animales/delete', compact('animal'));
    }

    public function destroy(Request $request, $id){
        $animal = Animales::find($id);
        $idZoo = $animal->zoologico_id = $request->post('idZoo');
        $animal->delete();

        return redirect()->route('animales.index', $idZoo)->with('danger', 'Eliminado con exito!');

    }
}
