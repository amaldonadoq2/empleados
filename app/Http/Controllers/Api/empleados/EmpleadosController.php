<?php

namespace App\Http\Controllers\Api\empleados;
use App\Http\Controllers\Controller;

use App\Models\Empleados;
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
        try {
        $query = Empleados::with('empresa'); 
        $total = $query->count();

        $order = config('vue_table_var.order');
        if (isset($request->sort) && isset($request->sort['order']) && isset($request->sort['prop']) && $request->sort['prop'] !== null && $request->sort['order'] !== null) {
            $query = $query->orderBy($request->sort['prop'], $order[$request->sort['order']]);
        } else {
            $query = $query->orderBy('created_at', 'desc');
        }
        $data = $query->get();

        return response()->json(new JsonResponse(['items' => $data, 'total' => $total]));
    } catch (Exception $e) {
        Log::error('[EmpleadosController] error in obtener_Empleados ' . $e->getMessage() . ' In Line: ' . $e->getLine());

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
            $especialidad = Empleados::create($request->all());
            return response()->json(new JsonResponse(['data' => $especialidad, 'mensaje' => 'Registrado exitosamente']));
        }
        catch(Exception $e) {
            Log::error('[EmpleadosController] error in store '.$e->getMessage(). ' In Line: ' . $e->getLine());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  App\Models\Empleados  $Empleados
     * @return \Illuminate\Http\Response
     */
    public function show(Empleados $Empleados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Empleados  $Empleados
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleados $Empleados)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Models\Empleados  $Empleados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleados $Empleados)
    {
        try{
         $Empleados->where('id',$request->id)->update(['nombre'=>$request->nombre]);
         return response()->json(new JsonResponse(['mensaje' => 'Actualizado exitosamente']));
        }
        catch(Exception $e) {
            Log::error('[EmpleadosController] error in update '.$e->getMessage(). ' In Line: ' . $e->getLine());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\Empleados  $Empleados
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleados $Empleados)
    { 
        try {
            $Empleados->delete();
            return response()->json(new JsonResponse(['mensaje' => 'Eliminado exitosamente']));
        }
        catch(Exception $e) {
            Log::error('[EmpleadosController] error in destroy '.$e->getMessage(). ' In Line: ' . $e->getLine());
        }
    }
    
}
