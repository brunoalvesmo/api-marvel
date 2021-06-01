<?php

namespace App\Http\Controllers;

use App\Models\Personagem;

class PersonagensController extends Controller
{
    protected $model;

    public function __construct(Personagem $model)
    {
        $this->model = $model;
    }

    /**
    * @OA\Schema(
    *   schema="personagens",
    *   allOf={
    *     @OA\Schema(
    *       @OA\Property(property="id", type="integer"),
    *       @OA\Property(property="description", type="string"),
    *       @OA\Property(property="nome", type="string"),
    *       @OA\Property(property="poder", type="string")
    *     )
    *   }
    * )
    *
    * @OA\Get(
    *     path="/api/personagens",
    *     description="Personagens",
    *     summary="Personagens - GET",
    *     tags={"Personagens"},
    *     security={{"bearer_token":{}}},
    *     @OA\Response(
    *      response=200,
    *      description="Ok", 
    *      @OA\MediaType(
    *         mediaType="application/json",
    *         @OA\Schema(
    *          type="array", 
    *          @OA\Items(ref="#/components/schemas/personagens")
    *         )
    *      )
    *     ),
    *     @OA\Response(response=400, description="Bad request"),
    *     @OA\Response(response=401, description="Unauthorized"), 
    * )
    *
    * @OA\Get(
    *     path="/api/personagens/{id}",
    *     description="Personagens",
    *     summary="Personagens - GET By id",
    *     tags={"Personagens"},
    *     security={{"bearer_token":{}}}, 
    *     @OA\Parameter(ref="#/components/parameters/id"),
    *     @OA\Response(
    *      response=200,
    *      description="Ok",
    *      @OA\MediaType(
    *         mediaType="application/json",
    *         @OA\Schema(ref="#/components/schemas/personagens")
    *      )
    *     ),   
    *     @OA\Response(response=400, description="Bad request"), 
    *     @OA\Response(response=401, description="Unauthorized"), 
    *     @OA\Response(response=404, description="Not Found"),
    * )
    *
    * @OA\Post(
    *     path="/api/personagens",
    *     description="Personagens",
    *     summary="Personagens - POST",
    *     tags={"Personagens"},
    *     security={{"bearer_token":{}}}, 
    *     @OA\RequestBody(
    *      required=true,
    *      description="Personagens",
    *      @OA\JsonContent(
    *          ref="#/components/schemas/personagens"   
    *      ),
    *     ),     
    *     @OA\Response(
    *      response=200,
    *      description="Successful",
    *      @OA\MediaType(
    *         mediaType="application/json",
    *         @OA\Schema(ref="#/components/schemas/personagens")
    *      )
    *     ),   
    *     @OA\Response(response=400, description="Bad request"), 
    *     @OA\Response(response=401, description="Unauthorized"), 
    * )
    *
    * @OA\Put(
    *     path="/api/personagens/{id}",
    *     description="Personagens",
    *     summary="Personagens - PUT",
    *     tags={"Personagens"},
    *     security={{"bearer_token":{}}}, 
    *     @OA\Parameter(ref="#/components/parameters/id"),
    *     @OA\RequestBody(
    *      required=true,
    *      description="Task",
    *      @OA\JsonContent(
    *          ref="#/components/schemas/personagens"   
    *      ),
    *     ),     
    *     @OA\Response(
    *      response=200,
    *      description="Successful",
    *      @OA\MediaType(
    *         mediaType="application/json",
    *         @OA\Schema(ref="#/components/schemas/personagens")
    *      )
    *     ),   
    *     @OA\Response(response=400, description="Bad request"), 
    *     @OA\Response(response=401, description="Unauthorized"), 
    * )
    *    
    * @OA\Delete(
    *     path="/api/personagens/{id}",
    *     description="Personagens",
    *     summary="Personagens - DELETE",
    *     tags={"Personagens"},
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
