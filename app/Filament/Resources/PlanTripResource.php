<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PlanTripResource\Pages;
use App\Models\PlanTrip;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;
use Filament\Tables\Columns\{TextColumn, ImageColumn};
use Filament\Forms\Components\{TextInput, FileUpload, Select, TextArea};
use Filament\Tables\Actions\{EditAction, DeleteAction, ViewAction, DeleteBulkAction};
use Illuminate\Support\Facades\Auth;

class PlanTripResource extends Resource
{
    protected static ?string $model = PlanTrip::class;

    protected static ?string $navigationIcon = 'heroicon-o-map';
    protected static ?string $navigationGroup = 'Konten';
    protected static ?string $navigationLabel = 'Plan Trip';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Select::make('user_id')
                ->relationship('user', 'name')
                ->label('Dibuat oleh')
                ->required(),
            TextInput::make('title')
                ->label('Judul')
                ->required()
                ->maxLength(200),
            TextInput::make('excerpt')
                ->label('Ringkasan')
                ->maxLength(255),
            FileUpload::make('image')
                ->label('Gambar')
                ->image()
                ->directory('plan-trips'),
            Textarea::make('description')
                ->label('Deskripsi')
                ->rows(5)
                ->columnSpanFull(),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Gambar')
                    ->disk('public')
                    ->square(),
                TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('user.name')
                    ->label('Dibuat oleh')
                    ->sortable(),
                TextColumn::make('excerpt')
                    ->label('Ringkasan')
                    ->limit(40),
                TextColumn::make('created_at')
                    ->label('Tanggal Dibuat')
                    ->dateTime('d M Y H:i'),
            ])
            ->filters([])
            ->actions([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make()
                    ->label('Hapus')
                    ->visible(function () {
                        /** @var \App\Models\User|\Illuminate\Contracts\Auth\Authenticatable|null $user */
                        $user = Auth::user();
                        if (!$user) {
                            return false;
                        }
                        return $user->hasRole('admin') || $user->hasRole('superadmin');
                    })
                    ->modalHeading('Hapus Plan Trip?')
                    ->modalDescription(fn($record) => "Yakin ingin menghapus Plan Trip berjudul '{$record->title}'?")
                    ->modalSubmitActionLabel('Ya, Hapus')
                    ->modalCancelActionLabel('Batal'),
            ])
            ->bulkActions([
                DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPlanTrips::route('/'),
            'create' => Pages\CreatePlanTrip::route('/create'),
            'edit' => Pages\EditPlanTrip::route('/{record}/edit'),
        ];
    }
}
