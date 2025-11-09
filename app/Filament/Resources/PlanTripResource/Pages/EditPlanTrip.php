<?php

namespace App\Filament\Resources\PlanTripResource\Pages;

use App\Filament\Resources\PlanTripResource;
use Filament\Actions;
use Filament\Actions\Action;

use Filament\Resources\Pages\EditRecord;

class EditPlanTrip extends EditRecord
{
    protected static string $resource = PlanTripResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->label('Hapus Plan Trip')
        ];
    }

    protected function getSaveFormAction(): Action
    {
        return Action::make('save')
            ->label('Perbarui Plan Trip')
            ->keyBindings(['mod+enter'])
            ->submit('save');
    }

    protected function getCancelFormAction(): Action
    {
        return Action::make('cancel')
            ->label('Batal')
            ->alpineClickHandler('document.referrer ? window.history.back() : (window.location.href = ' . \Illuminate\Support\Js::from($this->previousUrl ?? static::getResource()::getUrl()) . ')')
            ->color('gray');
    }

    protected function getSavedNotificationTitle(): ?string
    {
        return 'Plan Trip Berhasil Diperbarui';
    }

    public function getBreadcrumb(): string
    {
        return 'Edit Plan Trip';
    }

    protected function getRedirectUrl(): ?string
    {
        return static::getResource()::getUrl('index');
    }
}
