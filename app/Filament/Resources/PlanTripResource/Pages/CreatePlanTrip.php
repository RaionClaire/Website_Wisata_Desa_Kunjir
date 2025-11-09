<?php

namespace App\Filament\Resources\PlanTripResource\Pages;

use App\Filament\Resources\PlanTripResource;
use Filament\Actions\Action;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Js;

class CreatePlanTrip extends CreateRecord
{
    protected static string $resource = PlanTripResource::class;
    protected ?string $subheading = 'Tambah Plan Trip Baru';

    public function getTitle(): string
    {
        return 'Buat Plan Trip';
    }

    protected function getCreatedNotificationTitle(): ?string
    {
        return 'Plan Trip Berhasil Dibuat';
    }

    public function getBreadcrumb(): string
    {
        return 'Buat Plan Trip';
    }

    protected function getCreateFormAction(): Action
    {
        return Action::make('create')
            ->label('Simpan Plan Trip')
            ->keyBindings(['mod+enter'])
            ->submit('create');
    }

    protected function getCreateAnotherFormAction(): Action
    {
        return Action::make('createAnother')
            ->label('Simpan dan Buat Lagi')
            ->keyBindings(['mod+shift+enter'])
            ->submit('createAnother');
    }

    protected function getCancelFormAction(): Action
    {
        return Action::make('cancel')
            ->label('batal')
            ->alpineClickHandler('document.referrer ? window.history.back() : (window.location.href = ' . Js::from($this->previousUrl ?? static::getResource()::getUrl()) . ')')
            ->color('gray');
    }

    protected function canViewAny(): bool
    {
        return true;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = Auth::id();
        return $data;
    }
}
