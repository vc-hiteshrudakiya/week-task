<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'       => 'required|string|min:2',
            'age'        => 'required|integer|min:16',
            'salary'     => 'required|numeric|min:0',
            'experience' => 'required|integer|min:0',
             // 'terms'         => 'accepted',
            'role'          => 'required|in:user,admin',
            'terms'         => 'accepted_if:role,user',
            'start_date'    => 'required|date|after:today',      
            'finish_date'   => 'required|date|after:start_date',
            'password'   => 'required|string|min:8|confirmed',
            'roles'      => ['required','array', Rule::contains(['user','admin'])],
            'department' => 'present_if:role,user|string',
        ];
    }
    public function messages(): array
    {
        return [
            'name.required'       => 'Please enter employee name.',
            'age.required'        => 'Please enter employee age.',
            'age.min'             => 'Employee must be at least 18 years old.',
            'salary.required'     => 'Please enter salary.',
            'salary.min'          => 'Salary cannot be negative.',
            'experience.required' => 'Please enter experience.',
            'username_slug.unique'=> 'An employee with this name already exists.',
            'terms.accepted'      => 'You must accept the terms & conditions.',
            'role.required'     => 'Please select a role.',
            'role.in'           => 'Role must be either user or admin.',
            'start_date.required'  => 'Please select start date.',
            'start_date.after'     => 'Start date must be after today.',
            'finish_date.required' => 'Please select finish date.',
            'finish_date.after'    => 'Finish date must be after start date.',
            'password.required'       => 'Please enter a password.',
            'password.confirmed'      => 'Password confirmation does not match.',
            'roles.required'          => 'Please select roles.',
            'roles.array'             => 'Roles must be an array.',
            'roles.contains'          => 'Roles must contain both user and admin.',
            'experience.lt'           => 'Experience must be less than age.',
            'department.present_if'   => 'Department must be present if role is user.',
       
        ];

    }
    public function attributes(): array
    {
        return [
            'name'          => 'employee name',
            'age'           => 'employee age',
            'salary'        => 'salary',
            'experience'    => 'years of experience',
            'username_slug' => 'employee username',
        ];
    }
}
