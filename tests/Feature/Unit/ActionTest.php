<?php

declare(strict_types=1);

use DiegoVasconcelos\Actions\Facades\Actions;

it('can be instantied', function (): void {
    Actions::spy();
    expect(true)->toBeTrue();
});
