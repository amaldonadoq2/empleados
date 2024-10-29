<?php

namespace App\Http\Controllers\Api\empresas;
use App\Http\Controllers\Controller;

use App\Models\Empresas;
use Illuminate\Http\Request;
use App\Laravue\JsonResponse;
class EmpresasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try{
            $query = Empresas::query();
            $total = $query->count();

            $order = config('vue_table_var.order');
            if (isset($request->sort) && isset($request->sort['order']) && isset($request->sort['prop']) && $request->sort['prop'] !== null && $request->sort['order'] !== null) {
                $query = $query->orderBy($request->sort['prop'], $order[$request->sort['order']]);
            } else {
                $query = $query->orderBy('created_at', 'desc');
            }
            $data = $query->get();

            return response()->json(new JsonResponse(['items' => $data, 'total' => $total]));
        }
        catch(Exception $e) {
            Log::error('[EmpresasController] error in obtener_Empresas '.$e->getMessage(). ' In Line: ' . $e->getLine());

            return response()->json(['email' => 'Something went wrong']);
        }
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
        try{
            $especialidad = Empresas::create($request->all());
            return response()->json(new JsonResponse(['data' => $especialidad, 'mensaje' => 'Registrado exitosamente']));
        }
        catch(Exception $e) {
            Log::error('[EmpresasController] error in store '.$e->getMessage(). ' In Line: ' . $e->getLine());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  App\Models\Empresas  $Empresas
     * @return \Illuminate\Http\Response
     */
    public function show(Empresas $empresa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Empresas  $Empresas
     * @return \Illuminate\Http\Response
     */
    public function edit(Empresas $empresa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Models\Empresas  $Empresas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empresas $empresa)
    {
        try{
         $empresa->where('id',$request->id)->update(['nombre'=>$request->nombre]);
         return response()->json(new JsonResponse(['mensaje' => 'Actualizado exitosamente']));
        }
        catch(Exception $e) {
            Log::error('[EmpresasController] error in update '.$e->getMessage(). ' In Line: ' . $e->getLine());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\Empresas  $Empresas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empresas $empresa)
    { 
        try {
            $empresa->delete();
            return response()->json(new JsonResponse(['mensaje' => 'Eliminado exitosamente']));
        }
        catch(Exception $e) {
            Log::error('[EmpresasController] error in destroy '.$e->getMessage(). ' In Line: ' . $e->getLine());
        }
    }

    public function getEmpresas(){
        try {
            $empresas = Empresas::all();
            return response()->json(new JsonResponse(['items' => $empresas]));
        } catch (Exception $e) {
            Log::error('[EmpleadosController] error in getEmpresas ' . $e->getMessage() . ' In Line: ' . $e->getLine());
            return response()->json(['error' => 'Something went wrong']);
        }
    }
}
