<?php

namespace App\Http\Controllers\Artigo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Marcador;

class MarcadorController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $marcadores = Marcador::all('id', 'name', 'tagColor');
    //return $data;
    return view('marcadores/list', ['marcadores'=>$marcadores]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('marcadores/create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $data = $request->all();
    Marcador::create([
        'name'=>$request->name,
        'tagColor'=>$request->tagColor
    ]);
    //return 'Marcador '.$data['name'].' criado com sucesso!';
    return $this->index();
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //dd($id);
    $marcador = Marcador::findOrFail($id);
    return view('marcadores/show', ['marcador' => $marcador]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    //dd($id);
    $marcador = Marcador::findOrFail($id);
    //dd($marcador['name']);
    return view('marcadores/edit', ['marcador' => $marcador]);
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
    $marcador = Marcador::findOrFail($id);
    
    $marcador->name        = $request->name;
    $marcador->tagColor = $request->tagColor;

    $marcador->save();
    //$statusOperacao = 'atualizado';
    $marcador = Marcador::findOrFail($id);
    return view('marcadores/show', ['marcador' => $marcador]);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $marcador = Marcador::findOrFail($id);
    $marcadorDeletado = $marcador['name'];
    //dd($produtoDeletado);
    $marcador->delete();
    //$statusOperacao = 'deletado';
    return view('/marcadores/excluido', ['marcadorDeletado' => $marcadorDeletado]);
  }

  public function pageConfirmarDeletar($id)
  {
    //recebe method=PUT mas na pageConfirmarDeletar envia DELETE.
    $marcador = Marcador::findOrFail($id);
    return view('marcadores/confirmarDeletar', ['marcador' => $marcador]);
  }
}
