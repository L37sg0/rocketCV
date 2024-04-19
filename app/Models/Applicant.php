<?php

namespace App\Models;

use App\Models\Enums\Gender;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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
    public const CASTS = [
        self::FIELD_GENDER => Gender::class,
        self::FIELD_BIRTH_DATE => 'datetime:Y-m-d'
    ];

    protected $table    = self::TABLE_NAME;
    protected $fillable = self::FILLABLE;
    protected $casts    = self::CASTS;

    public function educations()
    {
        return $this->hasMany(Education::class);
    }

    /**
     * @return BelongsToMany
     */
    public function skills()
    {
        return $this->belongsToMany(Skill::class, ApplicantSkill::TABLE_NAME);
    }

    /**
     * @return BelongsToMany
     */
    public function universities()
    {
        return $this->belongsToMany(
            University::class,
            Education::TABLE_NAME,
            Education::FIELD_UNV_ID,
            Education::FIELD_APPLICANT_ID
        );
    }
}
