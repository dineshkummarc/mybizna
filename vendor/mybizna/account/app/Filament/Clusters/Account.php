<?php

namespace Modules\Account\Filament\Clusters;

use Filament\Clusters\Cluster;

class Account extends Cluster
{
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Account';

    protected static ?string $navigationLabel = 'Account Settings';

    protected static ?int $navigationSort = 0;

    protected static ?string $slug = '';

}
