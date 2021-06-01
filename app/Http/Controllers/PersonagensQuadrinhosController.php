<?php

namespace App\Http\Controllers;

use App\Models\PersonagensQuadrinhos;
use Illuminate\Http\Request;

class PersonagensQuadrinhosController extends Controller
{
    /**
    * @OA\Schema(
    *   schema="personagens-quadrinhos",
    *   allOf={
    *     @OA\Schema(
    *       @OA\Property(property="personagem_id", type="integer"),
    *       @OA\Property(property="quadrinho_id", type="integer"),
    *     )
    *   }
    * )
    */
    public function __construct(PersonagensQuadrinhos $model)
    {
        $this->model = $model;
    }

    /** 
    * @OA\Get(
    *     path="/api/personagens-quadrinhos",
    *     description="Personagens e Quadrinhos",
    *     summary="Personagens e Quadrinhos - GET",
    *     tags={"Personagens e Quadrinhos"},    
    *     @OA\Response(
    *      response=200,
    *      description="Ok", 
    *      @OA\MediaType(
    *         mediaType="application/json",
    *         @OA\Schema(
    *          type="array", 
    *          @OA\Items(ref="#/components/schemas/personagens-quadrinhos")
    *         )
    *      )
    *     ),
    *     @OA\Response(response=400, description="Bad request"),
    *     @OA\Response(response=401, description="Unauthorized"), 
    * )
    */
    public function index()
    {
        $data = $this->model->with(['personagem', 'quadrinho'])->get();
        return response()
            ->json($data, 200);
    }
    /**
    * @OA\Get(
    *     path="/api/personagens-quadrinhos/personagem/{id}",
    *     description="Personagens",
    *     summary="Personagens e Quadrinhos - GET By personagem id",
    *     tags={"Personagens e Quadrinhos"},    
    *     @OA\Parameter(ref="#/components/parameters/id"),
    *     @OA\Response(
    *      response=200,
    *      description="Ok",
    *      @OA\MediaType(
    *         mediaType="application/json",
    *         @OA\Schema(ref="#/components/schemas/personagens-quadrinhos")
    *      )
    *     ),   
    *     @OA\Response(response=400, description="Bad request"), 
    *     @OA\Response(response=401, description="Unauthorized"), 
    *     @OA\Response(response=404, description="Not Found"),
    * )
    */
    public function showPersonagem($id)
    {
        $data = $this->model->with(['personagem', 'quadrinho'])->where('personagem_id', $id)->get();
        return response()
            ->json($data, 200);
    }
    /**
    * @OA\Get(
    *     path="/api/personagens-quadrinhos/quadrinho/{id}",
    *     description="Personagens",
    *     summary="Personagens e Quadrinhos - GET By quadrinho id",
    *     tags={"Personagens e Quadrinhos"},    
    *     @OA\Parameter(ref="#/components/parameters/id"),
    *     @OA\Response(
    *      response=200,
    *      description="Ok",
    *      @OA\MediaType(
    *         mediaType="application/json",
    *         @OA\Schema(ref="#/components/schemas/personagens-quadrinhos")
    *      )
    *     ),   
    *     @OA\Response(response=400, description="Bad request"), 
    *     @OA\Response(response=401, description="Unauthorized"), 
    *     @OA\Response(response=404, description="Not Found"),
    * )
    */
    public function showQuadrinho($id)
    {
        $data = $this->model->with(['personagem', 'quadrinho'])->where('quadrinho_id', $id)->get();
        return response()
            ->json($data, 200);
    }
    /**
    * @OA\Post(
    *     path="/api/personagens-quadrinhos",
    *     description="Personagens e Quadrinhos",
    *     summary="Personagens e Quadrinhos - POST",
    *     tags={"Personagens e Quadrinhos"},
    *     @OA\RequestBody(
    *      required=true,
    *      description="Personagens e Quadrinhos",
    *      @OA\JsonContent(
    *          ref="#/components/schemas/personagens-quadrinhos"   
    *      ),
    *     ),     
    *     @OA\Response(
    *      response=200,
    *      description="Successful",
    *      @OA\MediaType(
    *         mediaType="application/json",
    *         @OA\Schema(ref="#/components/schemas/personagens-quadrinhos")
    *      )
    *     ),   
    *     @OA\Response(response=400, description="Bad request"), 
    *     @OA\Response(response=401, description="Unauthorized"), 
    * )
    */
    public function create(Request $data)
    {
        $personagem_id = $data->get('personagem_id');
        $quadrinho_id = $data->get('quadrinho_id');
        if ($this->model->where('personagem_id', $personagem_id)->where('quadrinho_id', $quadrinho_id)->count() === 0)
        {
            $result = $this->model->create($data->all());
            $result->load('personagem');
            $result->load('quadrinho');
            return response()
                ->json($result, 200);
        }
        return response()
            ->json(['exist' => 'Já existe essa relação'], 200);
    }
    /**    
    * @OA\Delete(
    *     path="/personagens-quadrinhos/{personagem_id}/{quadrinho_id}",
    *     description="Personagens e Quadrinhos",
    *     summary="Personagens e Quadrinhos - DELETE",
    *     tags={"Personagens e Quadrinhos"},
    *     @OA\Parameter(ref="#/components/parameters/personagem_id"),
    *     @OA\Parameter(ref="#/components/parameters/quadrinho_id"),
    *     @OA\Response(
    *      response=200,
    *      description="Successful"     
    *     ),   
    *     @OA\Response(response=400, description="Bad request"), 
    *     @OA\Response(response=401, description="Unauthorized"), 
    *     @OA\Response(response=404, description="Not Found"),
    * )
    */
    public function deleteItem($personagem_id, $quadrinho_id)
    {
        $model = $this->model
            ->where('personagem_id', $personagem_id)
            ->where('quadrinho_id', $quadrinho_id)
            ->first();
        if ($model)
        {
            $this->model
                ->where('personagem_id', $personagem_id)
                ->where('quadrinho_id', $quadrinho_id)
                ->delete();
            return response()
                ->json(['exist' => 'Excluido com êxito'], 200);
        }
        return response()
            ->json(['exist' => 'Não encontrado'], 200);
    }
}
