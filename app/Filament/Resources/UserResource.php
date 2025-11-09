<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Models\User;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Forms\Components\{TextInput, FileUpload, Select, Grid};
use Filament\Tables\Columns\{TextColumn};
use Illuminate\Support\Facades\Auth;
use Filament\Tables\Actions\{EditAction, DeleteAction, ViewAction, DeleteBulkAction, BulkActionGroup};


class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationGroup = 'Manajemen Pengguna';
    protected static ?string $modelLabel = 'Pengguna';
    protected static ?string $pluralLabel = 'Pengguna';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Grid::make(2)->schema([
                TextInput::make('name')
                    ->label('Nama Lengkap')
                    ->required()
                    ->maxLength(100),

                TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->unique(ignoreRecord: true)
                    ->required(),
            ]),

            Grid::make(2)->schema([
                TextInput::make('password')
                    ->label('Kata Sandi')
                    ->password()
                    ->revealable()
                    ->dehydrated(fn($state) => filled($state))
                    ->required(fn(string $context): bool => $context === 'create')
                    ->helperText('Kosongkan jika tidak ingin mengubah password.'),

                Select::make('role')
                    ->label('Peran Pengguna')
                    ->options([
                        'superadmin' => 'Super Admin',
                        'admin' => 'Admin',
                        'editor' => 'Editor',
                    ])
                    ->default('superadmin')
                    ->relationship('roles', 'name')
                    ->required(),
            ]),

            FileUpload::make('avatar')
                ->label('Foto Profil')
                ->directory('avatars')
                ->image()
                ->maxSize(2048)
                ->imageEditor()
                ->nullable(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nama')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('email')
                    ->label('Email')
                    ->searchable(),

                TextColumn::make('role')
                    ->badge()
                    ->label('Peran')
                    ->colors([
                        'primary' => 'superadmin',
                        'success' => 'admin',
                        'warning' => 'editor',
                    ])
                    ->formatStateUsing(fn($state) => ucfirst($state)),

                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d M Y, H:i')
                    ->sortable(),
            ])
            ->actions([
                ViewAction::make(),
                EditAction::make()->label('Edit'),
                DeleteAction::make()->label('Hapus'),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make()->label('Hapus Terpilih'),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }

    public static function canAccess(): bool
    {
        $user = Auth::user();
        /** @var \App\Models\User|\Illuminate\Contracts\Auth\Authenticatable|null $user */
        return $user->hasRole('superadmin');
    }
}
