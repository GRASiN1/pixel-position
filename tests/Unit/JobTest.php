<?php

use App\Models\Employer;
use App\Models\Job;

it('belongs to an employer', function () {
    // AAA
    // Arrange - create the world to test
    $employer = Employer::factory()->create();
    $job = Job::factory()->create(['employer_id' => $employer->id]);

    // Act - perform action to be tested

    // Assert - expected result of the action

    expect($job->employer->is($employer))->toBeTrue();
});


it('can have tags', function () {
    $job = Job::factory()->create();
    $job->tag('frontend');
    expect($job->tags)->toHaveCount(1);
});
