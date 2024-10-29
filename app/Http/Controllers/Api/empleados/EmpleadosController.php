<?php

namespace App\Http\Controllers\Api\multas;
use App\Http\Controllers\Controller;

use App\Models\Multas;
use Illuminate\Http\Request;
use App\Laravue\JsonResponse;
class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try{
            $query = Multas::query();
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
            Log::error('[MultasController] error in obtener_multas '.$e->getMessage(). ' In Line: ' . $e->getLine());

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
            $especialidad = Multas::create($request->all());
            return response()->json(new JsonResponse(['data' => $especialidad, 'mensaje' => 'Registrado exitosamente']));
        }
        catch(Exception $e) {
            Log::error('[MultasController] error in store '.$e->getMessage(). ' In Line: ' . $e->getLine());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  App\Models\Multas  $multas
     * @return \Illuminate\Http\Response
     */
    public function show(Multas $multas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Multas  $multas
     * @return \Illuminate\Http\Response
     */
    public function edit(Multas $multas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Models\Multas  $multas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Multas $multas)
    {
        try{
         $multas->where('id',$request->id)->update(['nombre'=>$request->nombre]);
         return response()->json(new JsonResponse(['mensaje' => 'Actualizado exitosamente']));
        }
        catch(Exception $e) {
            Log::error('[MultasController] error in update '.$e->getMessage(). ' In Line: ' . $e->getLine());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\Multas  $multas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Multas $multas)
    { 
        try {
            $multas->delete();
            return response()->json(new JsonResponse(['mensaje' => 'Eliminado exitosamente']));
        }
        catch(Exception $e) {
            Log::error('[MultasController] error in destroy '.$e->getMessage(). ' In Line: ' . $e->getLine());
        }
    }
}
