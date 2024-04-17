<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;


    public const TABLE_NAME = "skills";

    public const FIELD_ID = "id";

    public const FIELD_NAME = "name";

    public const FIELD_CREATED_AT = "created_at";
    public const FIELD_UPDATED_AT = "updated_at";

    public const FILLABLE = [self::FIELD_NAME];
    public const CASTS = [];

    protected $table = self::TABLE_NAME;
    protected $fillable = self::FILLABLE;
    protected $casts = self::CASTS;

    public function applicants()
    {
        return $this->belongsToMany(Applicant::class);
    }
}
