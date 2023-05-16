<?php

namespace App\Http\Requests;

use App\Models\User;
use GuzzleHttp\Psr7\Response;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Http\FormRequest;

class VoteFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {

        return

        Gate::denyIf(fn (User $voter) => $voter->SSN == '')
                                ? redirect()->back(): true;

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [

            'candidate' => 'required'

        ];
    }
}
