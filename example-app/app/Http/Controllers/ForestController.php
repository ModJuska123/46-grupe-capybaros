<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForestController extends Controller
{
    public function labas(Request $request, $color, $size)
    {
        return view('bebras', [
            'color' => $color,
            'size' => $size,
            'word' => $request->a
        ]);
    }

// cia prasideda kita uzduotis, kuri vadinasi calaculiatorius
// --------------------------------------------

    public function showCount()
    {
        // $result = session('result', 0);
        // $result = session()->get('result', ''); //naudojamas, kai norime, kad sumos rezultatas butu matomas nuolat
        //pull
        $result = session()->pull('result', '');  //naudojamas, kad rezultatas butu matomas iki refresho
         
        
        return view('counter.count', [     //counter.count reiskia, kad einam i counet folderi, kuriame yra count.blade.php failas
            'result' => $result
        ]);
    }

    public function count(Request $request)
    {
        $count1 = $request->count1;
        $count2 = $request->count2;

        $result = $count1 + $count2;

        // session(['result' => $result]);
        // session()->put('result', $result);
        // session()->flash('result', $result);
        // $request->session()->flash('result', $result);  //naudojamas kartu su get 21e, kad rezultatas butu matomas iki refresho

        return redirect()->route('count')->with('result', $result);  //dar vienas, bet zmogiskas budas gauti rezultata

    }

    //cia prasideda ##3 uzduotis, kuri vadinasi parodyk kvadratukus
    // --------------------------------------------

    public function showSquares()
    {
        // $squares = session()->get('squares', '');
        // $result = session()->get('resault', '');
        $count = session()->get('squares', 0);
        $squares = $count ? range(1, $count) : [];

        return view('sq.show', [
            'count' => $count,
            'squares' => $squares
        ]);
    }

    public function squares(Request $request)
    {
        $count = $request->count ?? 0;

        session()->put('squares', $count);

        return redirect()->route('squares');
    }

    public function addSquares(Request $request)
    {
        $count = $request->count ?? 0;
        $was = session()->get('squares', 0);
        $count += $was;

        session()->put('squares', $count);

        return redirect()->route('squares');
    }
}