/**
     * @OA\Delete(
     *      path="/{{ $config->modelNames->dashedPlural }}/{id}",
     *      summary="delete{{ $config->modelNames->name }}",
     *      tags={"{{ $config->modelNames->name }}"},
     *      description="Delete {{ $config->modelNames->name }}",
     *      @OA\Parameter(
     *          name="id",
     *          description="id of {{ $config->modelNames->name }}",
     *           @OA\Schema(
     *             type="integer"
     *          ),
     *          required=true,
     *          in="path"
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="successful operation",
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @OA\Property(
     *                  property="data",
     *                  type="string"
     *              ),
     *              @OA\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */