/**
     * @OA\Post(
     *      path="/{{ $config->modelNames->dashedPlural }}",
     *      summary="create{{ $config->modelNames->name }}",
     *      tags={"{{ $config->modelNames->name }}"},
     *      description="Create {{ $config->modelNames->name }}",
     *      @OA\RequestBody(
     *        required=true,
     *        @OA\JsonContent(ref="#/components/schemas/{{ $config->modelNames->name }}")
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