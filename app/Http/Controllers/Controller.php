<!-- <?php

// namespace App\Http\Controllers;

// use App\Models\Inmueble;
// use Illuminate\Http\Request;

// class InmuebleController extends Controller
// {

//     public function index()
//     {
//         return Inmueble::all();
//     }

//     public function store(Request $request)
//     {
//         $request->validate([
//             'referencia' => 'required',
//             'tipo_inmueble' => 'required',
//             'titulo' => 'required',
//             'tipo_operacion' => 'required'
//         ]);

//         $inmueble = new Inmueble;
//         $inmueble->referencia = $request->referencia;
//         $inmueble->tipo_inmueble = $request->tipo_inmueble;
//         $inmueble->titulo = $request->titulo;
//         $inmueble->tipo_operacion = $request->tipo_operacion;

//         $inmueble->save();

//         return $inmueble;
//     }


//     public function show(Inmueble $inmueble)
//     {
//         return $inmueble;
//     }

//     public function update(Request $request, Inmueble $inmueble)
//     {
//         $request->validate([
//             'referencia' => 'required',
//             'tipo_inmueble' => 'required',
//             'titulo' => 'required',
//             'tipo_operacion' => 'required'
//         ]);

//         $inmueble->referencia = $request->referencia;
//         $inmueble->tipo_inmueble = $request->tipo_inmueble;
//         $inmueble->titulo = $request->titulo;
//         $inmueble->tipo_operacion = $request->tipo_operacion;

//         $inmueble->update();

//         return $inmueble;
//     }

//     public function destroy($id)
//     {
//         $inmueble = Inmueble::find($id);
//         if (is_null($inmueble)) {
//             return response()->json(['message' => 'Inmueble not found'], 404);
//         }
//         $inmueble->delete();
//         return response()->noContent();
//     }
// }
?> -->