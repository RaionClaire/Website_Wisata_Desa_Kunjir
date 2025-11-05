<?php

namespace App\Filament\Resources\ArticleResource\Pages;

use App\Filament\Resources\ArticleResource;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Js;

class CreateArticle extends CreateRecord
{
    protected static string $resource = ArticleResource::class;
    protected ?string $subheading = 'Tambah Artikel Baru';

    public function getTitle(): string
    {
        return 'Buat Artikel';
    }

    protected function getCreatedNotificationTitle(): ?string
    {
        return 'Artikel Berhasil Dibuat';
    }

    public function getBreadcrumb(): string
    {
        return 'Buat Artikel';
    }

    protected function getCreateFormAction(): Action
    {
        return Action::make('create')
            ->label('Simpan Artikel')
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
            ->label('Batal')
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
}
