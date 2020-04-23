<?php

namespace Silentz\Charge\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateSubscriptionRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required',
            'plan' => 'required',
            'payment_method' => 'required',
        ];
    }
}
