<?php

declare(strict_types=1);

use Illuminate\Support\Facades\File;

it('publishes action stub', function () {
    $publishedPath = base_path('stubs/action.stub');

    File::delete($publishedPath);

    $this->artisan('vendor:publish', [
        '--tag' => 'actions-stubs',
    ])->assertSuccessful();

    expect(File::exists($publishedPath))->toBeTrue();

    expect(File::get($publishedPath))
        ->toContain('{{ class }}')
        ->toContain('{{ namespace }}');
});
