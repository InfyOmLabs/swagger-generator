/**
     * @OA\Get(
     *      path="/{{ $config->modelNames->dashedPlural }}/{id}",
     *      summary="get{{ $config->modelNames->name }}Item",
     *      tags={"{{ $config->modelNames->name }}"},
     *      description="Get {{ $config->modelNames->name }}",
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
     *                  ref="#/components/schemas/{{ $config->modelNames->name }}"
     *              ),
     *              @OA\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */