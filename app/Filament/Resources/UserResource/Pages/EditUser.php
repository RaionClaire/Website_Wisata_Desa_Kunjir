<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions\Action;
use Filament\Resources\Pages\EditRecord;
use Filament\Actions\DeleteAction;
use Illuminate\Contracts\Support\Htmlable;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make()
                ->label('Hapus Pengguna'),
        ];
    }

    public function getSubheading(): string|Htmlable|null
    {
        return 'Perbarui pengguna untuk' . $this->record->name;
    }

    protected function getSaveFormAction(): Action
    {
        return Action::make('save')
            ->label('Simpan Perubahan')
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
        return 'Pengguna Berhasil Diperbarui';
    }

    public function getBreadcrumb(): string
    {
        return 'Edit Pengguna';
    }

    protected function getRedirectUrl(): string
    {
        return static::getResource()::getUrl('index');
    }
}
