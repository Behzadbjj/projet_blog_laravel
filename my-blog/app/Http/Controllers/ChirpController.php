<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use App\Models\Chirp;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ChirpController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(): View
    { {
            $chirps = Chirp::all();

            return view('posts.show', ['chirps' => $chirps]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }


    public function store(Post $post, Request $request)
    {
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);

        $chirp = new Chirp();
        $chirp->message = $validated['message'];
        $chirp->user_id = auth()->id();
        $chirp->post_id = $post->id;
        $chirp->save();
        return redirect()->back()->with('success', 'Chirp ajouté ');
    }




    public function edit(Chirp $chirp): View
    {
        $this->authorize('update', $chirp);

        return view('chirps.edit', [
            'chirp' => $chirp,
        ]);
    }

    public function update(Request $request, Chirp $chirp): RedirectResponse
    {
        $this->authorize('update', $chirp);

        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);

        $chirp->update($validated);

        return redirect(route("posts.show", $chirp->post));
    }


    public function destroy(Chirp $chirp): RedirectResponse
    {
        $this->authorize('delete', $chirp);

        $chirp->delete();

        return redirect()->back()->with('success', 'Chirp deleted ');
    }
}
