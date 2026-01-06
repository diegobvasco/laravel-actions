<?php

declare(strict_types=1);

namespace DiegoVasconcelos\Actions\Commands;

use Illuminate\Console\Concerns\CreatesMatchingTest;
use Illuminate\Console\GeneratorCommand;

class MakeActionCommand extends GeneratorCommand
{
    use CreatesMatchingTest;

    protected $name = 'make:action';

    protected $description = 'Create a new action class';

    protected $type = 'Action';

    protected string $stubBasePath = 'actions';

    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace.'\Actions';
    }

    protected function getStub(): string
    {
        return $this->resolveStubPath('/stubs/action.stub');
    }

    protected function resolveStubPath($stub): string
    {
        return file_exists($customPath = $this->laravel->basePath(trim($stub, '/')))
            ? $customPath
            : __DIR__.'/stubs/..'.$stub;
    }
}
