<?php

namespace App\Filament\Resources\PlanTripResource\Pages;

use App\Filament\Resources\PlanTripResource;
use Filament\Resources\Pages\ListRecords;
use Filament\Actions\CreateAction;

class ListPlanTrips extends ListRecords
{
    protected static string $resource = PlanTripResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->label('Buat Plan Trip Baru')
                ->icon('heroicon-o-plus')
                ->color('primary')
                ->keyBindings(['mod+n'])
        ];
    }
}
