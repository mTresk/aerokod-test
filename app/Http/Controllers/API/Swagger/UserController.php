<?php

namespace App\Http\Controllers\API\Swagger;

use App\Http\Controllers\Controller;

/**
 * @OA\Post(
 *     path="/api/users",
 *     summary="Создание пользователя",
 *     tags={"User"},
 *
 *     @OA\RequestBody(
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(
 *                 @OA\Property(
 *                     property="name",
 *                     type="string",
 *                     example="Jessica Smith"
 *                 ),
 *                 @OA\Property(
 *                     property="email",
 *                     type="string",
 *                     example="example@example.com"
 *                 ),
 *                 @OA\Property(
 *                     property="password",
 *                     type="string",
 *                     example="password"
 *                 ),
 *                 @OA\Property(
 *                     property="password_confirmation",
 *                     type="string",
 *                     example="password"
 *                 ),
 *             )
 *         )
 *     ),
 *
 *     @OA\Response(
 *         response=201,
 *         description="OK",
 *              @OA\MediaType(
 *              mediaType="application/json",
 *              @OA\Schema(
 *                  @OA\Property(
 *                        property="data",
 *                        type="object",
 *                          @OA\Property(
 *                              property="id",
 *                              type="integer",
 *                              example=1
 *                          ),
 *                          @OA\Property(
 *                              property="name",
 *                              type="string",
 *                              example="Jessica Smith"
 *                          ),
 *                          @OA\Property(
 *                              property="email",
 *                              type="string",
 *                              example="example@example.com"
 *                          ),
 *                          @OA\Property(
 *                              property="created_at",
 *                              type="string",
 *                              example="2024-04-19T08:12:42.000000Z"
 *                          ),
 *                       ),
 *                   )
 *              )
 *         )
 *     )
 * ),
 *
 * @OA\Get(
 *      path="/api/users",
 *      summary="Получение списка пользователей",
 *      tags={"User"},
 *
 *      @OA\Response(
 *          response=200,
 *          description="OK",
 *               @OA\MediaType(
 *               mediaType="application/json",
 *               @OA\Schema(
 *                   @OA\Property(
 *                      property="data",
 *                      type="array",
 *                      @OA\Items(
 *                          @OA\Property(
 *                              property="id",
 *                              type="integer",
 *                              example=1
 *                          ),
 *                          @OA\Property(
 *                              property="name",
 *                              type="string",
 *                              example="Jessica Smith"
 *                          ),
 *                          @OA\Property(
 *                              property="email",
 *                              type="string",
 *                              example="example@example.com"
 *                          ),
 *                          @OA\Property(
 *                              property="created_at",
 *                              type="string",
 *                              example="2024-04-19T08:12:42.000000Z"
 *                          ),
 *                      )
 *                   )
 *               )
 *            )
 *          )
 *      )
 *  ),
 *
 * @OA\Get(
 *       path="/api/users/{user}",
 *       summary="Получение одного пользователя",
 *       tags={"User"},
 *
 *       @OA\Parameter(
 *          description="ID пользователя",
 *          in="path",
 *          name="user",
 *          required=true,
 *          example=1
 *       ),
 *
 *     @OA\Response(
 *          response=200,
 *          description="OK",
 *               @OA\MediaType(
 *               mediaType="application/json",
 *               @OA\Schema(
 *                   @OA\Property(
 *                         property="data",
 *                         type="object",
 *                           @OA\Property(
 *                               property="id",
 *                               type="integer",
 *                               example=1
 *                           ),
 *                           @OA\Property(
 *                               property="name",
 *                               type="string",
 *                               example="Jessica Smith"
 *                           ),
 *                           @OA\Property(
 *                              property="email",
 *                              type="string",
 *                              example="example@example.com"
 *                          ),
 *                         @OA\Property(
 *                              property="created_at",
 *                             type="string",
 *                             example="2024-04-19T08:12:42.000000Z"
 *                        ),
 *                      ),
 *                  )
 *             )
 *        )
 *    )
 *  ),
 *
 * @OA\Put(
 *        path="/api/users/{user}",
 *        summary="Обновление пользователя",
 *        tags={"User"},
 *
 *        @OA\Parameter(
 *           description="ID пользователя",
 *           in="path",
 *           name="user",
 *           required=true,
 *           example=1
 *        ),
 *
 *        @OA\RequestBody(
 *          @OA\MediaType(
 *              mediaType="application/json",
 *              @OA\Schema(
 *                  @OA\Property(
 *                      property="name",
 *                      type="string",
 *                      example="Jessica Smith"
 *                  ),
 *                  @OA\Property(
 *                      property="password",
 *                      type="string",
 *                      example="password"
 *                  ),
 *                  @OA\Property(
 *                      property="password_confirmation",
 *                      type="string",
 *                      example="password"
 *                  ),
 *              )
 *          )
 *      ),
 *
 *      @OA\Response(
 *           response=200,
 *           description="OK",
 *                @OA\MediaType(
 *                mediaType="application/json",
 *                @OA\Schema(
 *                    @OA\Property(
 *                          property="data",
 *                          type="object",
 *                            @OA\Property(
 *                                property="id",
 *                                type="integer",
 *                                example=1
 *                            ),
 *                            @OA\Property(
 *                                property="name",
 *                                type="string",
 *                                example="Jessica Smith"
 *                            ),
 *                            @OA\Property(
 *                               property="email",
 *                               type="string",
 *                               example="example@example.com"
 *                           ),
 *                          @OA\Property(
 *                               property="created_at",
 *                              type="string",
 *                              example="2024-04-19T08:12:42.000000Z"
 *                         ),
 *                       ),
 *                   )
 *              )
 *         )
 *     )
 *   ),
 *
 * @OA\Delete(
 *        path="/api/users/{user}",
 *        summary="Удаление пользователя",
 *        tags={"User"},
 *
 *        @OA\Parameter(
 *           description="ID пользователя",
 *           in="path",
 *           name="user",
 *           required=true,
 *           example=1
 *        ),
 *
 *        @OA\Response(
 *           response=200,
 *           description="OK",
 *                @OA\MediaType(
 *                mediaType="application/json",
 *                @OA\Schema(
 *                    @OA\Property(
 *                          property="message",
 *                          type="string",
 *                          example="Пользователь удален"
 *                       ),
 *                   )
 *              )
 *         )
 *     )
 *   ),
 */
class UserController extends Controller
{
}
