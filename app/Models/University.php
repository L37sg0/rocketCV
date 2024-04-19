<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class University extends Model
{
    use HasFactory;

    public const TABLE_NAME = "universities";

    public const FIELD_ID = "id";

    public const FIELD_NAME = "name";

    public const FIELD_CREATED_AT = "created_at";
    public const FIELD_UPDATED_AT = "updated_at";

    public const FILLABLE = [self::FIELD_NAME];
    public const CASTS = [];

    protected $table = self::TABLE_NAME;
    protected $fillable = self::FILLABLE;
    protected $casts = self::CASTS;

    /**
     * @return BelongsToMany
     */
    public function applicants()
    {
        return $this->belongsToMany(
            Applicant::class,
            Education::TABLE_NAME,
            Education::FIELD_APPLICANT_ID,
            Education::FIELD_UNV_ID
        );
    }
}
