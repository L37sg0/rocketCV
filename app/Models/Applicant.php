<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;


    public const TABLE_NAME = "applicants";

    public const FIELD_ID = "id";

    public const FIELD_FIRST_NAME = "first_name";
    public const FIELD_MID_NAME = "mid_name";
    public const FIELD_LAST_NAME = "last_name";
    public const FIELD_EMAIL = "email";
    public const FIELD_PHONE = "phone";
    public const FIELD_GENDER = "gender";
    public const FIELD_BIRTH_DATE = "birth_date";

    public const FIELD_CREATED_AT = "created_at";
    public const FIELD_UPDATED_AT = "updated_at";

    public const FILLABLE = [
        self::FIELD_FIRST_NAME,
        self::FIELD_MID_NAME,
        self::FIELD_LAST_NAME,
        self::FIELD_EMAIL,
        self::FIELD_PHONE,
        self::FIELD_GENDER,
        self::FIELD_BIRTH_DATE,
    ];
    public const CASTS = [];

    protected $table    = self::TABLE_NAME;
    protected $fillable = self::FILLABLE;
    protected $casts    = self::CASTS;

    public function educations()
    {
        return $this->hasMany(Education::class);
    }

    public function skills()
    {
        return $this->hasMany(Skill::class);
    }
}