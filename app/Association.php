<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Association extends Model
{
    use SoftDeletes;
    
    protected $table = 'associations';


    protected $fillable = ['الإسم', 'تاريخ_التأسيس','الهاتف', 'العنوان','البريد_الإلكتروني', 'الوصف','الشعار', 'القانون_الأساسي','الرئيس', 'نائب_الرئيس','الكاتب_العام', 'نائب_الكاتب_العام','أمين_المال', 'أمين_المال','أمين_المال', 'نائب_أمين_المال','المستشار_الأول','المستشار_الثاني','user_id'];


    public function user() {
        return $this->belongsTo(User::class);
    }
}
