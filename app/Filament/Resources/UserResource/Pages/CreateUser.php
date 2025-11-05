<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions\Action;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;
    protected static ?string $title = 'Tambah Pengguna Baru';

    public function getTitle(): string
    {
        return 'Tambah Pengguna';
    }

    protected function getCreatedNotificationTitle(): ?string
    {
        return 'Pengguna Berhasil Ditambahkan';
    }

    public function getBreadcrumb(): string
    {
        return 'Tambah Pengguna';
    }

    protected function getCreateFormAction(): Action
    {
        return Action::make('create')
            ->label('Simpan Pengguna')
            ->keyBindings(['mod+enter'])
            ->submit('create');
    }

    protected function getCreateAnotherFormAction(): Action
    {
        return Action::make('createAnother')
            ->label('Simpan dan Tambah Lagi')
            ->keyBindings(['mod+shift+enter'])
            ->submit('createAnother')
            ->action('createAnother')
            ->color('gray');
    }

    protected function getCancelFormAction(): Action
    {
        return Action::make('cancel')
            ->label('Batal')
            ->alpineClickHandler('document.referrer ? window.history.back() : (window.location.href = ' . \Illuminate\Support\Js::from($this->previousUrl ?? static::getResource()::getUrl()) . ')')
            ->color('gray');
    }

    protected function getRedirectUrl(): string
    {
        return  static::getResource()::getUrl('index');
    }
}
