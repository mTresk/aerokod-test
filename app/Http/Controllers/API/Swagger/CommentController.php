<?php

namespace App\Http\Controllers\API\Swagger;

use App\Http\Controllers\Controller;

/**
 * @OA\Post(
 *     path="/api/comments",
 *     summary="Создание комментария",
 *     tags={"Comment"},
 *
 *     @OA\RequestBody(
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(
 *                 @OA\Property(
 *                     property="content",
 *                     type="string",
 *                     example="Velit sequi perferendis dolores expedita."
 *                 ),
 *                 @OA\Property(
 *                     property="user_id",
 *                     type="integer",
 *                     example=1
 *                 ),
 *                 @OA\Property(
 *                      property="post_id",
 *                      type="integer",
 *                      example=1
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
 *                              property="content",
 *                              type="string",
 *                              example="Velit sequi perferendis dolores expedita."
 *                          ),
 *                          @OA\Property(
 *                              property="user_id",
 *                              type="integer",
 *                              example=1
 *                          ),
 *                          @OA\Property(
 *                              property="post_id",
 *                              type="integer",
 *                              example=1
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
 *      path="/api/comments",
 *      summary="Получение списка комментариев",
 *      tags={"Comment"},
 *
 *      @OA\Response(
 *          response=200,
 *          description="OK",
 *               @OA\MediaType(
 *               mediaType="application/json",
 *               @OA\Schema(
 *                   @OA\Property(
 *                         property="data",
 *                         type="array",
 *                          @OA\Items(
 *                              @OA\Property(
 *                                  property="id",
 *                                  type="integer",
 *                                  example=1
 *                              ),
 *                              @OA\Property(
 *                                  property="content",
 *                                  type="string",
 *                                  example="Velit sequi perferendis dolores expedita."
 *                              ),
 *                              @OA\Property(
 *                                  property="user_id",
 *                                  type="integer",
 *                                  example=1
 *                              ),
 *                              @OA\Property(
 *                                  property="post_id",
 *                                  type="integer",
 *                                  example=1
 *                              ),
 *                              @OA\Property(
 *                                  property="created_at",
 *                                  type="string",
 *                                  example="2024-04-19T08:12:42.000000Z"
 *                              ),
 *                           )
 *                       ),
 *                    )
 *               )
 *          )
 *  ),
 *
 * @OA\Get(
 *       path="/api/comments/{comment}",
 *       summary="Получение одного комментария",
 *       tags={"Comment"},
 *
 *       @OA\Parameter(
 *          description="ID комментария",
 *          in="path",
 *          name="comment",
 *          required=true,
 *          example=1
 *       ),
 *
 *       @OA\Response(
 *          response=200,
 *          description="OK",
 *              @OA\MediaType(
 *                  mediaType="application/json",
 *                  @OA\Schema(
 *                      @OA\Property(
 *                          property="data",
 *                          type="object",
 *                              @OA\Property(
 *                                  property="id",
 *                                  type="integer",
 *                                  example=1
 *                              ),
 *                              @OA\Property(
 *                                  property="content",
 *                                  type="string",
 *                                  example="Velit sequi perferendis dolores expedita."
 *                              ),
 *                              @OA\Property(
 *                                  property="user_id",
 *                                  type="integer",
 *                                  example=1
 *                              ),
 *                              @OA\Property(
 *                                  property="post_id",
 *                                  type="integer",
 *                                  example=1
 *                              ),
 *                              @OA\Property(
 *                                  property="created_at",
 *                                  type="string",
 *                                  example="2024-04-19T08:12:42.000000Z"
 *                              ),
 *                          ),
 *                      )
 *              )
 *        )
 *    )
 *  ),
 *
 * @OA\Put(
 *        path="/api/comments/{comment}",
 *        summary="Обновление комментария",
 *        tags={"Comment"},
 *
 *        @OA\Parameter(
 *           description="ID поста",
 *           in="path",
 *           name="comment",
 *           required=true,
 *           example=1
 *        ),
 *
 *        @OA\RequestBody(
 *          @OA\MediaType(
 *              mediaType="application/json",
 *              @OA\Schema(
 *                  @OA\Property(
 *                      property="content",
 *                      type="string",
 *                      example="Velit sequi perferendis dolores expedita."
 *                  ),
 *                  @OA\Property(
 *                      property="user_id",
 *                      type="integer",
 *                      example=1
 *                  ),
 *                  @OA\Property(
 *                      property="post_id",
 *                      type="integer",
 *                      example=1
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
 *        path="/api/comments/{comment}",
 *        summary="Удаление комментария",
 *        tags={"Comment"},
 *
 *        @OA\Parameter(
 *           description="ID поста",
 *           in="path",
 *           name="comment",
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
 *                          example="Комментарий удален"
 *                       ),
 *                   )
 *              )
 *         )
 *     )
 *   ),
 */
class CommentController extends Controller
{
}
