<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Response;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = Gallery::latest();

        if ($request->kategori) {
            $query->where('kategori', $request->kategori);
        }

        $gallerys = $query->paginate(8);

        if ($request->ajax()) {
            return response()->json([
                'html'    => view('admin.gallery.partials.data', compact('gallerys'))->render(),
                'hasMore' => $gallerys->hasMorePages(),
            ]);
        }

        $kategoris = Gallery::select('kategori')->distinct()->pluck('kategori');

        return view('admin.gallery.index', compact('gallerys', 'kategoris'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.create');

        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $simpan = Gallery::create(['title' => $request->title,
            'description'                      => $request->description,
            'kategori'                         => $request->kategori,
            'gambar'                           => GalleryController::simpandokumen($request->file('filedokumen')),
        ]);
        return redirect()->route('gallery.index')
            ->with('success', 'upload gallery berhasil');
        //
    }
    public function simpandokumen($filedokumen)
    {
        $file          = $filedokumen;
        $tujuan_upload = 'public/gallery';
        $acak          = rand(0, 10000);
        $extension     = $file->getClientOriginalExtension();
        $iddokumen     = $acak . '.' . $extension;
        if (file_exists(public_path() . '/gallery/' . $iddokumen)) {
            return 'filesudahada.jpg';
        } else {
            $path = $file->storeAs('gallery', $iddokumen, 'public');
            return $iddokumen;

        }

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gallery = Gallery::where('id', $id)->get();
        return view('admin.gallery.show', compact('gallery')); //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery = Gallery::find($id);

        return view('admin.gallery.edit', compact('gallery'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'       => 'required',
            'description' => 'required',
        ]);
        $datagallery              = Gallery::find($id);
        $datagallery->title       = $request->title;
        $datagallery->description = $request->description;
        $datagallery->f_aktif     = $request->f_aktif;
        $datagallery->kategori    = $request->kategori;
        $uploadedFile             = $request->file('filedokumen');
        if (! empty($request->file('filedokumen'))) {
            $datagallery->gambar = GalleryController::simpandokumen($request->file('filedokumen'));
        } else {
            $datagallery->gambar = $request->filelama;
        }
        $datagallery->save();
        return redirect()->route('gallery.index')
            ->with('success', 'Post updated successfully');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery    = Gallery::find($id);
        $datagambar = $gallery->gambar;

        $gallery->delete();
        File::delete('storage/gallery/' . $datagambar);
        return redirect()->route('gallery.index')
            ->with('success', 'Post deleted successfully');
        //
    }
}
