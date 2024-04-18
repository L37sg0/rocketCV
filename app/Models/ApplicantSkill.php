<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicantSkill extends Model
{
    public const TABLE_NAME = 'applicant_skill';

    public const FIELD_APPLICANT_ID = 'applicant_id';
    public const FIELD_SKILL_ID = 'skill_id';

    protected $table = self::TABLE_NAME;
    public $timestamps = false;
}
