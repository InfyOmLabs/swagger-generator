 *      @OA\Property(
 *          property="{{ $fieldName }}",
 *          description="{{ $description }}",
 *          readOnly={{ $readOnly }},
 *          nullable={{ $nullable }},
 *          type="{{ $type }}",
@if($format)
 *          format="{{ $format }}"
@endif
 *      )