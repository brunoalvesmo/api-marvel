<?php

namespace App\Http\Controllers;

use App\Models\Quadrinhos;

class QuadrinhosController extends Controller
{
    protected $model;

    public function __construct(Quadrinhos $model)
    {
        $this->model = $model;
    }

    /**
    * @OA\Schema(
    *   schema="quadrinhos",
    *   allOf={
    *     @OA\Schema(
    *       @OA\Property(property="id", type="integer"),
    *       @OA\Property(property="titulo", type="string"),
    *       @OA\Property(property="ano", type="integer"),
    *       @OA\Property(property="descricao", type="string")
    *     )
    *   }
    * )
    *
    * @OA\Get(
    *     path="/api/quadrinhos",
    *     description="Quadrinhos",
    *     summary="Quadrinhos - GET",
    *     tags={"Quadrinhos"},
    *     security={{"bearer_token":{}}},
    *     @OA\Response(
    *      response=200,
    *      description="Ok", 
    *      @OA\MediaType(
    *         mediaType="application/json",
    *         @OA\Schema(
    *          type="array", 
    *          @OA\Items(ref="#/components/schemas/quadrinhos")
    *         )
    *      )
    *     ),
    *     @OA\Response(response=400, description="Bad request"),
    *     @OA\Response(response=401, description="Unauthorized"), 
    * )
    *
    * @OA\Get(
    *     path="/api/quadrinhos/{id}",
    *     description="Quadrinhos",
    *     summary="Quadrinhos - GET By id",
    *     tags={"Quadrinhos"},
    *     security={{"bearer_token":{}}}, 
    *     @OA\Parameter(ref="#/components/parameters/id"),
    *     @OA\Response(
    *      response=200,
    *      description="Ok",
    *      @OA\MediaType(
    *         mediaType="application/json",
    *         @OA\Schema(ref="#/components/schemas/quadrinhos")
    *      )
    *     ),   
    *     @OA\Response(response=400, description="Bad request"), 
    *     @OA\Response(response=401, description="Unauthorized"), 
    *     @OA\Response(response=404, description="Not Found"),
    * )
    *
    * @OA\Post(
    *     path="/api/quadrinhos",
    *     description="Quadrinhos",
    *     summary="Quadrinhos - POST",
    *     tags={"Quadrinhos"},
    *     security={{"bearer_token":{}}}, 
    *     @OA\RequestBody(
    *      required=true,
    *      description="Quadrinhos",
    *      @OA\JsonContent(
    *          ref="#/components/schemas/quadrinhos"   
    *      ),
    *     ),     
    *     @OA\Response(
    *      response=200,
    *      description="Successful",
    *      @OA\MediaType(
    *         mediaType="application/json",
    *         @OA\Schema(ref="#/components/schemas/quadrinhos")
    *      )
    *     ),   
    *     @OA\Response(response=400, description="Bad request"), 
    *     @OA\Response(response=401, description="Unauthorized"), 
    * )
    *
    * @OA\Put(
    *     path="/api/quadrinhos/{id}",
    *     description="Quadrinhos",
    *     summary="Quadrinhos - PUT",
    *     tags={"Quadrinhos"},
    *     security={{"bearer_token":{}}}, 
    *     @OA\Parameter(ref="#/components/parameters/id"),
    *     @OA\RequestBody(
    *      required=true,
    *      description="Task",
    *      @OA\JsonContent(
    *          ref="#/components/schemas/quadrinhos"   
    *      ),
    *     ),     
    *     @OA\Response(
    *      response=200,
    *      description="Successful",
    *      @OA\MediaType(
    *         mediaType="application/json",
    *         @OA\Schema(ref="#/components/schemas/quadrinhos")
    *      )
    *     ),   
    *     @OA\Response(response=400, description="Bad request"), 
    *     @OA\Response(response=401, description="Unauthorized"), 
    * )
    *    
    * @OA\Delete(
    *     path="/api/quadrinhos/{id}",
    *     description="Quadrinhos",
    *     summary="Quadrinhos - DELETE",
    *     tags={"Quadrinhos"},
    *     security={{"bearer_token":{}}}, 
    *     @OA\Parameter(ref="#/components/parameters/id"),
    *     @OA\Response(
    *      response=200,
    *      description="Successful"     
    *     ),   
    *     @OA\Response(response=400, description="Bad request"), 
    *     @OA\Response(response=401, description="Unauthorized"), 
    *     @OA\Response(response=404, description="Not Found"),
    * )
    */
    
}
