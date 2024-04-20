<?php

namespace App\Providers;

use App\Models\Applicant;
use App\Models\ApplicantInterface;
use App\Models\Education;
use App\Models\EducationInterface;
use App\Models\Skill;
use App\Models\SkillInterface;
use App\Models\University;
use App\Models\UniversityInterface;
use App\Repositories\ApplicantRepository;
use App\Repositories\ApplicantRepositoryInterface;
use App\Repositories\EducationRepository;
use App\Repositories\EducationRepositoryInterface;
use App\Repositories\SkillRepository;
use App\Repositories\SkillRepositoryInterface;
use App\Repositories\UniversityRepository;
use App\Repositories\UniversityRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public $bindings = [
        ApplicantInterface::class => Applicant::class,
        EducationInterface::class => Education::class,
        SkillInterface::class => Skill::class,
        UniversityInterface::class => University::class,

        ApplicantRepositoryInterface::class => ApplicantRepository::class,
        EducationRepositoryInterface::class => EducationRepository::class,
        SkillRepositoryInterface::class => SkillRepository::class,
        UniversityRepositoryInterface::class => UniversityRepository::class,
    ];

    /**
     * Register any application services.
     */
    public function register(): void
    {
//        foreach ($this->bindings as $abstract => $concrete) {
//            $this->app->bind($abstract, $concrete);
//        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
