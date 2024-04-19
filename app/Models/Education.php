<?php

namespace App\Models;

use App\Models\Enums\Degree;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    public const TABLE_NAME = "educations";

    public const FIELD_ID = "id";

    public const FIELD_APPLICANT_ID = "applicant_id";
    public const FIELD_UNV_ID = 'unv_id';
    public const FIELD_DATE_FROM = "date_from";
    public const FIELD_DATE_TO = "date_to";
    public const FIELD_DEGREE = "degree";
    public const FIELD_SPECIALTY = "specialty";
    public const FIELD_ACCREDITATION_ASSESSMENT = "accreditation_assessment";

    public const FIELD_CREATED_AT = "created_at";
    public const FIELD_UPDATED_AT = "updated_at";

    public const FILLABLE = [
        self::FIELD_APPLICANT_ID,
        self::FIELD_UNV_ID,
        self::FIELD_DATE_FROM,
        self::FIELD_DATE_TO,
        self::FIELD_DEGREE,
        self::FIELD_SPECIALTY,
        self::FIELD_ACCREDITATION_ASSESSMENT,
    ];
    public const CASTS = [
        self::FIELD_DEGREE => Degree::class,
        self::FIELD_DATE_FROM => 'datetime:Y-m-d',
        self::FIELD_DATE_TO => 'datetime:Y-m-d'
    ];

    protected $table = self::TABLE_NAME;
    protected $fillable = self::FILLABLE;
    protected $casts = self::CASTS;

    public function applicant()
    {
        return $this->belongsTo(Applicant::class);
    }

    public function university()
    {
        return $this->belongsTo(University::class, self::FIELD_UNV_ID);
    }
}
