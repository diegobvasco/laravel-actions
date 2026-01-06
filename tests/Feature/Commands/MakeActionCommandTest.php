<?php

declare(strict_types=1);

afterEach(function () {
    File::deleteDirectory(app_path('Actions'));
    File::deleteDirectory(base_path('tests/Feature/Actions'));
});

it('creates action in nested path', function () {
    $this->artisan('make:action Path/NameAction')
        ->assertSuccessful();

    $path = [
        'action' => app_path('Actions/Path/NameAction.php'),
        'tests' => base_path('tests/Feature/Actions/Path/NameActionTest.php'),
    ];
    expect(File::exists($path['action']))->toBeTrue()
        ->and(File::exists($path['tests']))->toBeFalse();

    $contents = File::get($path['action']);

    expect($contents)
        ->toContain('class NameAction')
        ->toContain('namespace App\\Actions\\Path');
});

it('creates action test in nested path with pest', function () {
    $this->artisan('make:action Path/NameAction --pest')
        ->assertSuccessful();

    $path = base_path('tests/Feature/Actions/Path/NameActionTest.php');

    expect(File::exists($path))->toBeTrue();

    $contents = File::get($path);

    expect($contents)
        ->toContain('test(\'');
});

it('creates action test in nested path with test', function () {
    $this->artisan('make:action Path/NameAction --test')
        ->assertSuccessful();

    $path = base_path('tests/Feature/Actions/Path/NameActionTest.php');

    expect(File::exists($path))->toBeTrue();

    $contents = File::get($path);

    expect($contents)
        ->toContain('namespace Tests\\Feature\\Actions\\Path');
});
