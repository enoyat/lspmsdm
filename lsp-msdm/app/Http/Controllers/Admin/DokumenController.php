<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dokumen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Response;

class DokumenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = Dokumen::latest();

        $dokumens = $query->paginate(8);

        if ($request->ajax()) {
            return response()->json([
                'html'    => view('admin.dokumen.partials.data', compact('dokumens'))->render(),
                'hasMore' => $dokumens->hasMorePages(),
            ]);
        }

        return view('admin.dokumen.index', compact('dokumens'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dokumen.create');

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
        $simpan = Dokumen::create(['title' => $request->title,
            'description'                      => $request->description,
            'kategori'                         => $request->kategori,
            'filedokumen'                      => DokumenController::simpandokumen($request->file('filedokumen')),
        ]);
        return redirect()->route('dokumen.index')
            ->with('success', 'upload dokumen berhasil');
        //
    }
    public function simpandokumen($filedokumen)
    {
        $file          = $filedokumen;
        $tujuan_upload = 'public/dokumen';
        $acak          = rand(0, 10000);
        $extension     = $file->getClientOriginalExtension();
        $iddokumen     = $acak . '.' . $extension;
        if (file_exists(public_path() . '/dokumen/' . $iddokumen)) {
            return 'filesudahada.jpg';
        } else {
            $path = $file->storeAs('dokumen', $iddokumen, 'public');
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
        $dokumen = Dokumen::where('id', $id)->get();
        return view('admin.dokumen.show', compact('dokumen')); //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dokumen = Dokumen::find($id);

        return view('admin.dokumen.edit', compact('dokumen'));
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
        $datadokumen              = Dokumen::find($id);
        $datadokumen->title       = $request->title;
        $datadokumen->description = $request->description;
        $datadokumen->kategori    = $request->kategori;
        $datadokumen->f_aktif     = $request->f_aktif;
        $uploadedFile             = $request->file('filedokumen');
        if (! empty($request->file('filedokumen'))) {
            $datadokumen->filedokumen = DokumenController::simpandokumen($request->file('filedokumen'));
        } else {
            $datadokumen->filedokumen = $request->filelama;
        }
        $datadokumen->save();
        return redirect()->route('dokumen.index')
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
        $dokumen         = Dokumen::find($id);
        $datafiledokumen = $dokumen->filedokumen;

        $dokumen->delete();
        File::delete('storage/dokumen/' . $datafiledokumen);
        return redirect()->route('dokumen.index')
            ->with('success', 'Post deleted successfully');
        //
    }
}
