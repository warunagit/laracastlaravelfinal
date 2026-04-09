<?php

use App\Models\Employer;
use App\Models\Job;

it('is belongs to an employer', function () {
    //AAA concept to be used
    //Arrange
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);
    //Act
    $act = $job->employer->is($employer);
    //Assert
    expect($act)->toBeTrue();
});

it('can have tags', function () {
    $job = Job::factory()->create();
    $job->tag('Frontend');
    expect($job->tags)->toHaveCount(1);
});
