<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Resources\Pages\ListRecords;
use Filament\Actions\CreateAction;

class ListUsers extends ListRecords
{
    protected static string $resource = UserResource::class;
    protected ?string $subheading = 'Daftar Pengguna';

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->label('Tambah Pengguna Baru')
                ->icon('heroicon-o-plus')
                ->color('primary')
                ->keybindings(['mod+n']),
        ];
    }

    public function getBreadcrumb(): ?string
    {
        return 'Daftar Pengguna';
    }
}
