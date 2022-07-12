<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;

class CustomApiValidationFailedResponseRequest extends FormRequest
{
//    /**
//     * @param Validator $validator
//     * @return void
//     */
//    protected function failedValidation(Validator $validator)
//    {
//        $errors = (new ValidationException($validator))->errors();
//
//        $wrap = wrap_api_response_v1([
//            $errors,
//            JsonResponse::HTTP_UNPROCESSABLE_ENTITY,
//            'Validation Exception',
//        ]);
//
//        return response()->api_custom_response($wrap);
//    }


    /**
     * Handle a failed validation attempt.
     *
     * @param \Illuminate\Contracts\Validation\Validator $validator
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->api_custom_response(false, $validator->getMessageBag(), 421, 'Validation data error'));
    }
}
