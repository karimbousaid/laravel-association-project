<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Validator;


class AssociationRequest extends FormRequest
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
            
            "الإسم" => 'required|max:32',
            "تاريخ_التأسيس" => 'required|date',
            "الهاتف" => 'required|min:10|numeric',
            "العنوان"=> 'required',
            "البريد_الإلكتروني" => 'required|email',
            "الوصف" => 'required|max:185',
            "الشعار" => 'required|mimes:jpeg,png',
            "القانون_الأساسي" => 'required|mimetypes:application/pdf|max:10000',
            "الرئيس" => 'required',
            "نائب_الرئيس"=> 'required',
            "الكاتب_العام" => 'required',
            "نائب_الكاتب_العام" => 'required',
            "أمين_المال" => 'required',
            "نائب_أمين_المال" =>'required',
            "المستشار_الأول" => 'required',
            "المستشار_الثاني" => 'required',

        ];
    }
}
