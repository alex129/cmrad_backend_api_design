<?php

namespace Src\Refuels\PumpPrice\Infrastructure\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Src\Refuels\Shared\Domain\Exceptions\RequestValidationException;
use Src\Refuels\Shared\Infrastructure\Helpers\StringHelper;

final class PumpPriceStoreRequest extends FormRequest
{
    use StringHelper;

    public function rules() :array
    {
        return [
            'terminal' => 'required',
            'product_id' => 'required',
            'price' => 'required'
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new RequestValidationException($this->formatErrorsRequest($validator->errors()->all()), 400);
    }
}
