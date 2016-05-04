<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NoteController extends Controller
{
    /**
     * Show the form to create a new blog post.
     *
     * @return Response
     */
    public function newNote()
    {
        return view('new-note');
    }

    /**
     * Store a new blog post.
     *
     * @param  Request  $request
     * @return Response
     */
    public function createNote(Request $request)
    {
         $this->validate($request, [
            'name' => 'required',
         ]);
        echo 'Validated';
        return;
    }
}