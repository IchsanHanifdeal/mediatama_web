<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Author;
use App\Models\Artikel;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.artikel', [
            'artikel' => Artikel::all(),
            'artikel_terbaru' => Artikel::latest()->first(),
            'total_artikel' => Artikel::count(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.artikel.create', [
            'author' => Author::all(),
            'category' => Category::all(),
            'tag' => Tag::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_kategori_artikel' => 'required',
            'id_tag' => 'required',
            'author_id' => 'required',
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        DB::beginTransaction();

        try {
            $article = Artikel::create([
                'title' => $validated['title'],
                'content' => $validated['content'],
                'author_id' => $validated['author_id'],
            ]);

            DB::commit();

            return redirect()->route('article')->with('toast', [
                'message' => 'Artikel berhasil ditambahkan.',
                'type' => 'success',
            ]);
        } catch (\Exception $e) {
            DB::rollBack();

            Log::error('Gagal menyimpan artikel', [
                'error' => $e->getMessage(),
                'request' => $request->all(),
            ]);

            return redirect()->back()
                ->withErrors(['message' => 'Terjadi kesalahan saat menyimpan artikel.'])
                ->withInput()
                ->with('toast', [
                    'message' => 'Gagal menambahkan artikel.',
                    'type' => 'error',
                ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Artikel $artikel) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $article = Artikel::findOrFail($id);

        return view('dashboard.artikel.update', [
            'article' => $article,
            'author' => Author::all(),
            'category' => Category::all(),
            'tag' => Tag::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'author_id' => 'required',
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        DB::beginTransaction();

        try {
            $article = Artikel::findOrFail($id);

            $article->update([
                'title' => $validated['title'],
                'content' => $validated['content'],
                'author_id' => $validated['author_id'],
            ]);

            DB::commit();

            return redirect()->route('article')->with('toast', [
                'message' => 'Artikel berhasil diperbarui.',
                'type' => 'success',
            ]);
        } catch (\Exception $e) {
            DB::rollBack();

            Log::error('Gagal memperbarui artikel', [
                'error' => $e->getMessage(),
                'request' => $request->all(),
            ]);

            return redirect()->back()
                ->withErrors(['message' => 'Terjadi kesalahan saat memperbarui artikel.'])
                ->withInput()
                ->with('toast', [
                    'message' => 'Gagal memperbarui artikel.',
                    'type' => 'error',
                ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $artikel = Artikel::findOrFail($id);

            $artikel->delete();

            DB::commit();

            return redirect()->back()->with('toast', [
                'message' => 'Artikel berhasil dihapus.',
                'type' => 'success'
            ]);
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->back()->withErrors(['file_materi' => $e->getMessage()])
                ->with('toast', [
                    'message' => $e->getMessage(),
                    'type' => 'error'
                ]);
        }
    }
}
