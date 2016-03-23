<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Member;

class MemberEditRequest extends Request
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
        $member = Member::find($this->route('member'));

        return [
        'first_name' => 'required|alpha',
        'last_name' => 'required|alpha',
        'email' => 'required',
        'phone' => 'numeric',
        'birthday' => 'required',
        'gender' => 'required',
        'address' => 'required',
        'document' => 'required|numeric|unique:members,document, ' .$member->id,
        'date_of_admission' => 'required'
        ];
    }
}
