<?php

use App\Http\Controllers\Controller;
use App\Models\Jamu;
use Illuminate\Http\Request;


class JamuController extends Controller
{
    public function jamu()
    {
        $jamus = Jamu::all();
        dd($jamus);
        return view('jamus', compact('jamus'));
    }
    public function jamu_show($id)
{
    $jamu = Jamu::find($id);

    if (!$jamu) {
        abort(404); // Tampilkan error 404 jika Jamu tidak ditemukan
    }

    return view('jamus-show', compact('jamu'));
}

}