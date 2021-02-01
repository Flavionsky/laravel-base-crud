<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'guest_full_name' => 'required|string|min:2',
            'guest_credit_card' => 'required|string|min:8',
            'room' => 'required|string|min:1',
            'from_date' => 'required|string|min:6',
            'to_date' => 'required|string|min:6',
            'more_details' => 'required|string'

        ];
    }
}
