<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\JsonResponse;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;

class Request extends FormRequest
{
    /**
     * Handle a failed validation attempt.
     *
     * @param  \Illuminate\Contracts\Validation\Validator  $validator
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function failedValidation(Validator $validator): ValidationException
    {
        throw new ValidationException($validator, $this->formatErrors($validator));
    }

    /**
     * Format the errors from the given Validator instance.
     *
     * @param  \Illuminate\Contracts\Validation\Validator  $validator
     * @return \Illuminate\Http\JsonResponse
     */
    protected function formatErrors(Validator $validator): JsonResponse
    {
        return new JsonResponse(($validator->getMessageBag()->toArray()));
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [];
    }

    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation()
    {
        /**
         * Additional checking or filtering (This is triggered before the attributes is validated by validation rules)
         */
        $this->requestFilter();
    }


    /**
     *  Additional request filter or checking
     */
    protected function requestFilter()
    {
        // here is empty - please implement this function at the child request for any additional checking or filtering (this function is run before the request is being validated by validation rule)
    }
}
