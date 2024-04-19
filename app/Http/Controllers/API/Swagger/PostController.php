<?php

namespace App\Http\Controllers\API\Swagger;

use App\Http\Controllers\Controller;

/**
 * @OA\Post(
 *     path="/api/posts",
 *     summary="Создание поста",
 *     tags={"Post"},
 *
 *     @OA\RequestBody(
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(
 *                 @OA\Property(
 *                     property="title",
 *                     type="string",
 *                     example="Velit magnam sint quasi labore doloribus."
 *                 ),
 *                 @OA\Property(
 *                     property="content",
 *                     type="string",
 *                     example="Id consequatur ea accusamus dolorum quas hic. Maxime molestias numquam culpa nemo explicabo quidem eos. Nobis maiores cumque omnis."
 *                 ),
 *                 @OA\Property(
 *                     property="user_id",
 *                     type="integer",
 *                     example=1
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
 *                              property="title",
 *                              type="string",
 *                              example="Velit magnam sint quasi labore doloribus."
 *                          ),
 *                          @OA\Property(
 *                              property="content",
 *                              type="string",
 *                              example="Id consequatur ea accusamus dolorum quas hic. Maxime molestias numquam culpa nemo explicabo quidem eos. Nobis maiores cumque omnis."
 *                          ),
 *                          @OA\Property(
 *                              property="user_id",
 *                              type="integer",
 *                              example=1
 *                          ),
 *                          @OA\Property(
 *                              property="created_at",
 *                              type="string",
 *                              example="2024-04-19T08:12:42.000000Z"
 *                          ),
 *                          @OA\Property(
 *                              property="comments",
 *                              type="array",
 *                              @OA\Items(
 *                                  @OA\Property(
 *                                      property="id",
 *                                      type="integer",
 *                                      example=1
 *                                  ),
 *                                  @OA\Property(
 *                                       property="content",
 *                                       type="string",
 *                                       example="Quia excepturi architecto similique delectus est animi exercitationem."
 *                                  ),
 *                                  @OA\Property(
 *                                      property="user_id",
 *                                      type="integer",
 *                                      example=1
 *                                  ),
 *                                  @OA\Property(
 *                                       property="post_id",
 *                                       type="integer",
 *                                       example=1
 *                                  ),
 *                                  @OA\Property(
 *                                      property="created_at",
 *                                      type="string",
 *                                      example="2024-04-19T08:12:42.000000Z"
 *                                  ),
 *                              )
 *                           ),
 *                       ),
 *                   )
 *              )
 *         )
 *     )
 * ),
 *
 * @OA\Get(
 *      path="/api/posts",
 *      summary="Получение списка постов",
 *      tags={"Post"},
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
 *                         @OA\Items(
 *                              @OA\Property(
 *                                  property="id",
 *                                  type="integer",
 *                                  example=1
 *                                  ),
 *                                  @OA\Property(
 *                                      property="title",
 *                                      type="string",
 *                                      example="Velit magnam sint quasi labore doloribus."
 *                                  ),
 *                                  @OA\Property(
 *                                      property="content",
 *                                      type="string",
 *                                      example="Id consequatur ea accusamus dolorum quas hic. Maxime molestias numquam culpa nemo explicabo quidem eos. Nobis maiores cumque omnis."
 *                                  ),
 *                                  @OA\Property(
 *                                      property="user_id",
 *                                      type="integer",
 *                                      example=1
 *                                  ),
 *                                  @OA\Property(
 *                                      property="created_at",
 *                                      type="string",
 *                                      example="2024-04-19T08:12:42.000000Z"
 *                                  ),
 *                                  @OA\Property(
 *                                      property="comments",
 *                                      type="array",
 *                                      @OA\Items(
 *                                          @OA\Property(
 *                                              property="id",
 *                                              type="integer",
 *                                              example=1
 *                                          ),
 *                                          @OA\Property(
 *                                              property="content",
 *                                              type="string",
 *                                              example="Quia excepturi architecto similique delectus est animi exercitationem."
 *                                          ),
 *                                          @OA\Property(
 *                                              property="user_id",
 *                                              type="integer",
 *                                              example=1
 *                                          ),
 *                                          @OA\Property(
 *                                              property="post_id",
 *                                              type="integer",
 *                                              example=1
 *                                          ),
 *                                          @OA\Property(
 *                                              property="created_at",
 *                                              type="string",
 *                                              example="2024-04-19T08:12:42.000000Z"
 *                                          ),
 *                                      )
 *                                  ),
 *
 *                       ),
 *                    )
 *               )
 *          )
 *  ),
 *
 * @OA\Get(
 *       path="/api/posts/{post}",
 *       summary="Получение одного поста",
 *       tags={"Post"},
 *
 *       @OA\Parameter(
 *          description="ID поста",
 *          in="path",
 *          name="post",
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
 *                              @OA\Property(
 *                                  property="id",
 *                                  type="integer",
 *                                  example=1
 *                              ),
 *                              @OA\Property(
 *                                  property="title",
 *                                  type="string",
 *                                  example="Velit magnam sint quasi labore doloribus."
 *                              ),
 *                              @OA\Property(
 *                                  property="content",
 *                                  type="string",
 *                                  example="Id consequatur ea accusamus dolorum quas hic. Maxime molestias numquam culpa nemo explicabo quidem eos. Nobis maiores cumque omnis."
 *                              ),
 *                              @OA\Property(
 *                                  property="user_id",
 *                                  type="integer",
 *                                  example=1
 *                              ),
 *                              @OA\Property(
 *                                  property="created_at",
 *                                  type="string",
 *                                  example="2024-04-19T08:12:42.000000Z"
 *                              ),
 *                              @OA\Property(
 *                                 property="comments",
 *                                 type="array",
 *                                 @OA\Items(
 *                                     @OA\Property(
 *                                         property="id",
 *                                         type="integer",
 *                                         example=1
 *                                     ),
 *                                     @OA\Property(
 *                                          property="content",
 *                                          type="string",
 *                                          example="Quia excepturi architecto similique delectus est animi exercitationem."
 *                                     ),
 *                                     @OA\Property(
 *                                         property="user_id",
 *                                         type="integer",
 *                                         example=1
 *                                     ),
 *                                     @OA\Property(
 *                                          property="post_id",
 *                                          type="integer",
 *                                          example=1
 *                                     ),
 *                                     @OA\Property(
 *                                         property="created_at",
 *                                         type="string",
 *                                         example="2024-04-19T08:12:42.000000Z"
 *                                     ),
 *                                 )
 *                              ),
 *                          ),
 *                      )
 *              )
 *        )
 *    )
 *  ),
 *
 * @OA\Put(
 *        path="/api/posts/{post}",
 *        summary="Обновление поста",
 *        tags={"Post"},
 *
 *        @OA\Parameter(
 *           description="ID поста",
 *           in="path",
 *           name="post",
 *           required=true,
 *           example=1
 *        ),
 *
 *        @OA\RequestBody(
 *          @OA\MediaType(
 *              mediaType="application/json",
 *              @OA\Schema(
 *                  @OA\Property(
 *                      property="title",
 *                      type="string",
 *                      example="Velit magnam sint quasi labore doloribus."
 *                  ),
 *                  @OA\Property(
 *                      property="content",
 *                      type="string",
 *                      example="Id consequatur ea accusamus dolorum quas hic. Maxime molestias numquam culpa nemo explicabo quidem eos. Nobis maiores cumque omnis."
 *                  ),
 *                  @OA\Property(
 *                      property="user_id",
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
 *        path="/api/posts/{post}",
 *        summary="Удаление поста",
 *        tags={"Post"},
 *
 *        @OA\Parameter(
 *           description="ID поста",
 *           in="path",
 *           name="post",
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
 *                          example="Пост удален"
 *                       ),
 *                   )
 *              )
 *         )
 *     )
 *   ),
 */
class PostController extends Controller
{
}
