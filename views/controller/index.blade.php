/**
     * @OA\Get(
     *      path="/{{ $config->modelNames->dashedPlural }}",
     *      summary="get{{ $config->modelNames->name }}List",
     *      tags={"{{ $config->modelNames->name }}"},
     *      description="Get all {{ $config->modelNames->plural }}",
     *      @OA\Response(
     *          response=200,
     *          description="successful operation",
     *          @OA\Schema(
     *              type="object",
     *              @OA\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @OA\Property(
     *                  property="data",
     *                  type="array",
     *                  @OA\Items(ref="#/definitions/{{ $config->modelNames->name }}")
     *              ),
     *              @OA\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */