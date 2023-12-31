<?php


use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        return Genre::all();
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:genres'
        ]);

        return Genre::create([
            'name' => $request->name
        ]);
    }

    public function show(Genre $genre)
    {
        return $genre;
    }

    public function update(Request $request, Genre $genre)
    {
        $this->validate($request, [
            'name' => 'required|unique:genres'
        ]);

        $genre->update($request->all());

        return $genre;
    }

    public function destroy(Genre $genre)
    {
        $genre->delete();

        return $genre;
    }
}
