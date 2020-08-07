<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Letter;
use App\Http\Resources\LetterResource;

class LetterController extends Controller
{
    public function index()
    {
        $letters = Letter::get();

        return LetterResource::collection($letters);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            "no_surat" => "required",
            "tanggal_kirim" => "required",
            "pengirim" => "required",
            "perihal" => "required"
        ]);

        $letter = Letter::create([
            "no_surat" => $request->no_surat,
            "tanggal_kirim" => $request->tanggal_kirim,
            "pengirim" => $request->pengirim,
            "perihal" => $request->perihal
        ]);

        return new LetterResource($letter);
    }

    public function update(Request $request, Letter $letter)
    {
        $letter->update([
            "pengirim" => $request->pengirim,
            "perihal" => $request->perihal
        ]);

        return new LetterResource($letter);
    }

    public function delete(Letter $letter)
    {
        $letter->delete();

        return [
            "message" => "data surat berhasil dihapus"
        ];
    }
}
