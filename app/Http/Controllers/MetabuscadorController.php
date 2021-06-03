<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetabuscadorController extends Controller
{
    //
    public function formulario_buscador(){

        return view('metabuscador');
    }
    public function buscar(){
        $termino = $_POST["termino"];
        $Motor = $_POST["Motores"];

        switch($Motor){
            case 1: return redirect()->to("https://www.google.com/search?q=$termino");
                break;
            case 2: return redirect()->to("https://www.bing.com/search?q=$termino");
                break;
            case 3: return redirect()->to("https://www.youtube.com/results?search_query=$termino");
                break;
            case 4: return redirect()->to("https://espanol.search.yahoo.com/search?p=$termino");
                break;
            case 5: return redirect()->to("https://search17.lycos.com/web/?q=$termino");
                break;
            case 6: return redirect()->to("https://es.wikipedia.org/wiki/$termino");
                break;
            case 7: return redirect()->to("https://www.dogpile.com/serp?q=$termino");
                break;
            case 8: return redirect()->to("https://yandex.com/search/?text=$termino");
                break;
            case 9: return redirect()->to("https://www.baidu.com/s?ie=utf-8&f=8&rsv_bp=1&rsv_idx=1&tn=baidu&wd=$termino");
                break;
            case 10: return redirect()->to("https://www.lifeder.com/resultados/?q=$termino");
                break;




        }
    }
}
