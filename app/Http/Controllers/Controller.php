<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(
 *   version="1.0.0",
 *   title="Projeto Marvel",
 *   description="Marvel"
 * ) 
 */

 /**
 * @OA\Schema(
 *   schema="auth",
 *   allOf={
 *     @OA\Schema(
 *       @OA\Property(property="email", type="string", example="email@email.com"),
 *       @OA\Property(property="password", type="string", example="*******"),
 *       required={"email", "password"}
 *     )
 *   }
 * )
 * 
 * 
 * 
 * @OA\Parameter(
 *  name="id",
 *  description="Id",
 *  required=true,
 *  in="path",
 *  @OA\Schema(type="integer")
 * )
 *  @OA\Schema(
 *    schema="token", 
 *    allOf={
 *      @OA\Schema(@OA\Property(property="token", type="string"))
 *    }
 * )
 * @OA\Parameter(
 *  name="personagem_id",
 *  description="Personagem Id",
 *  required=true,
 *  in="path",
 *  @OA\Schema(type="integer")
 * )
 *  
 * @OA\Parameter(
 *  name="quadrinho_id",
 *  description="Quadrinho Id",
 *  required=true,
 *  in="path",
 *  @OA\Schema(type="integer")
 * )
 *
 * @OA\Post(
 *     path="/api/login",
 *     description="Usuario JWT, login com credenciais E-mail e Senha",
 *     summary="Marvel - Usuário JWT",
 *     tags={"Usuário"},
 *     @OA\RequestBody(
 *      required=true,
 *      description="Usuário JWT",
 *      @OA\JsonContent(
 *          ref="#/components/schemas/auth"   
 *      ),
 *     ),     
 *     @OA\Response(response=200, description="Ok", 
 *      @OA\MediaType(mediaType="application/json", @OA\Schema(ref="#/components/schemas/token"))
 *     ),
 *     @OA\Response(response=400, description="Bad Request"),       
 *     @OA\Response(response=401, description="Unauthorized")
 * )
 */

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        return response()
            ->json($this->model->get(), 200);
    }

    public function show($id)
    {
        $model = $this->model->find($id);
        return response()
            ->json($model, 200);
    }

    public function create(Request $data)
    {
        $model = $this->model->create($data->all());
        return response()
            ->json($model, 201);
    }

    public function update(Request $data, $id)
    {
        $model = $this->model->find($id);
        $model->fill($data->all());
        return response()
            ->json($model, 200);
    }

    public function delete($id)
    {
        $model = $this->model->find($id);
        $model->delete();
        return response()
            ->json(['deleted' => 'Ok'], 200);
    }
}
