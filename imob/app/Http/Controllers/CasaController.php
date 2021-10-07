<?php

namespace App\Http\Controllers;

use App\Models\Casa;
use Illuminate\Http\Request;

class CasaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $casas = Casa::all();

        return view('casas.index', [ 
            'casas' => $casas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('casas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $casa = new Casa;

        $casa->nome = $request->nome;
        $casa->descricao = $request->descricao;
        $casa->id_energia = $request->id_energia;
        $casa->id_agua = $request->id_agua;
        $casa->status = $request->status;

        // Json upload
        $casa->endereco = $request->endereco;
        $casa->caracteristicas = $request->caracteristicas;
        //    imagem upload
    

    if($request->hasFile('imagem') && $request->file('imagem')->isValid()){
        

        $requestImage = $request->imagem;
        $extension = $requestImage->extension();
        $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension; 

        $requestImage->move(public_path('img/casa'), $imageName);

        $casa->imagem = $imageName;

   }

//    if($request->hasFile('galeria[]') && $request->file('galeria[]')->isValid()){
        

//     $requestGaleria = $request->galeria;
//     $extension = $requestGaleria->extension();
//     $galeriaName = md5($requestGaleria->getClientOriginalName() . strtotime("now")) . "." . $extension; 

//     $requestGaleria->move(public_path('img/casa/galeria'), $galeriaName);

//     $casa->galeria = $galeriaName;

// }

// $galeriaImagem = $request->galeria;

// foreach ($galeriaImagem as $imagem) {
//     $extension = $imagem->extension();
//     $imagemNome = md5($imagem->getClientOriginalName() . strtotime("now")) . "." . $extension;

//     $imagem->move(public_path('img/casa/galeria'), $imagemNome);
//     $imagem = $imagemNome;
//     $casa->galeria = $imagem;
//  }


   

    $casa->save();
    return redirect('/casas')->with('msg','Casa cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Casa  $casa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $casa = Casa::findOrFail($id);
        return view('casas.show',[
            "casa" => $casa
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Casa  $casa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $casa = Casa::findOrFail($id);



        return view('casas.edit', [
            'casa' => $casa
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Casa  $casa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $data = $request->all();
        if($request->hasFile('imagem') && $request->file('imagem')->isValid()){
        

            $requestImage = $request->imagem;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension; 
    
            $requestImage->move(public_path('img/casa'), $imageName);
    
            $data['imagem'] = $imageName;
    
    
       }


        Casa::findOrfail($request->id)->update($data);

        return redirect('/casas')->with('msg','Casa atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Casa  $casa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        Casa::findOrfail($id)->delete();
    
        return redirect('/casas')->with('msg','Casa deletada com sucesso!');
       
    }
}
