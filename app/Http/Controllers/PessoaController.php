<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pessoa;
use App\Http\Requests\PessoaRequest;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = Pessoa::paginate(10);

        return view('lista', compact('all'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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

        if($request->tipo == 'Física'){
             $validatedData = $request->validate([
                'nome' => 'required',
                'telefone' => 'required',
                'cidade' => 'required',
                'estado' => 'required',
                'email' => 'required|email',
                'tipo' => 'required',
                'documento' => 'required|unique:pessoas|cpf'
            ]);
         }else{
            $validatedData = $request->validate([
                'nome' => 'required',
                'telefone' => 'required',
                'cidade' => 'required',
                'estado' => 'required',
                'email' => 'required|email',
                'tipo' => 'required',
                'documento' => 'required|unique:pessoas|cnpj'
            ]);
         }
      //  $pessoa = new Pessoa;
        $nome = $request->input('nome');
        $telefone = $request->input('telefone');
        $cidade = $request->input('cidade');
        $estado = $request->input('estado');
        $email = $request->input('email');
        $tipo = $request->input('tipo');
        $documento = $request->input('documento');
        $adicionais = $request->input('adicionais');
        //$pessoa->save();   
       // dd($request->all());

        DB::table('pessoas')->insert(
            ['nome' => $nome, 'telefone' => $telefone, 'cidade' => $cidade,
            'estado' => $estado, 'email' => $email, 'tipo' => $tipo, 'documento' => $documento,
            'adicionais' => $adicionais ]
        );

        return redirect('/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          
        $pessoa = Pessoa::findOrFail($id);
        return view('form', compact('pessoa'));
    
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
         $pessoa = Pessoa::findOrFail($id);

         if($request->tipo == 'Física'){
             $validatedData = $request->validate([
                'nome' => 'required',
                'telefone' => 'required',
                'cidade' => 'required',
                'estado' => 'required',
                'email' => 'required|email',
                'tipo' => 'required',
                'documento' => 'required|unique:pessoas|cpf'
            ]);
         }else{
            $validatedData = $request->validate([
                'nome' => 'required',
                'telefone' => 'required',
                'cidade' => 'required',
                'estado' => 'required',
                'email' => 'required|email',
                'tipo' => 'required',
                'documento' => 'required|unique:pessoas|cnpj'
            ]);
         }

         $pessoa->nome = $request->nome;
         $pessoa->telefone = $request->telefone;
         $pessoa->cidade = $request->cidade;
         $pessoa->estado = $request->estado;
         $pessoa->email = $request->email;
         $pessoa->tipo = $request->tipo;
         $pessoa->documento = $request->documento;
         $pessoa->adicionais = $request->adicionais;

         $pessoa->update();

         return redirect('/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dado = Pessoa::findOrFail($id);
        $dado->delete();
        return back()->with(['success' => 'Dado deletado com sucesso']);
    }

    public function formulario(){
        $pessoa = new Pessoa;
        
        return view('form', compact('pessoa'));
    }
}
