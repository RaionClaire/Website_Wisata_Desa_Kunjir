<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages\{ListArticles, CreateArticle, EditArticle};
use App\Models\Article;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Forms\Components\{TextInput, FileUpload, Hidden, MarkdownEditor, Select, DateTimePicker};
use Filament\Tables\Columns\{TextColumn, BadgeColumn};
use Filament\Tables\Actions\{EditAction, DeleteAction, BulkActionGroup, DeleteBulkAction};
use Illuminate\Support\Facades\Auth;

class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationGroup = 'Konten';
    protected static ?string $pluralLabel = 'Artikel';
    protected static ?string $modelLabel = 'Artikel';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Hidden::make('user_id')
                    ->default(fn() => Auth::id()),

                TextInput::make('title')
                    ->label('Judul Artikel')
                    ->maxLength(150)
                    ->required(),

                TextInput::make('author')
                    ->label('Penulis')
                    ->default(fn() => Auth::user()?->name)
                    ->maxLength(100)
                    ->nullable(),

                FileUpload::make('thumbnail_path')
                    ->label('Gambar Sampul / Thumbnail')
                    ->disk('public')
                    ->directory('articles/thumbnails')
                    ->image()
                    ->imageEditor()
                    ->nullable(),

                TextInput::make('video_url')
                    ->label('Link Video (Opsional)')
                    ->url()
                    ->placeholder('https://youtube.com/... atau link video lainnya')
                    ->nullable(),

                MarkdownEditor::make('content')
                    ->label('Konten Artikel')
                    ->required()
                    ->columnSpanFull(),

                Select::make('status')
                    ->label('Status')
                    ->options([
                        'draft' => 'Draft',
                        'published' => 'Published',
                    ])
                    ->default('draft')
                    ->required(),

                DateTimePicker::make('published_at')
                    ->label('Tanggal Publikasi')
                    ->visible(fn($get) => $get('status') === 'published')
                    ->nullable()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('author')
                    ->label('Penulis')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->colors([
                        'warning' => 'draft',
                        'success' => 'published',
                    ])
                    ->sortable(),

                TextColumn::make('views')
                    ->label('Tayangan')
                    ->sortable(),

                // TextColumn::make('published_at')
                //     ->label('Dipublikasikan')
                //     ->dateTime()
                //     ->sortable(),

                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime()
                    ->sortable(),
            ])
            ->actions([
                EditAction::make()->label('Edit'),
                DeleteAction::make()
                    ->label('Hapus')
                    ->modalHeading('Hapus Artikel?')
                    ->modalDescription(fn($record) => "Yakin ingin menghapus artikel berjudul '{$record->title}'?")
                    ->modalSubmitActionLabel('Ya, Hapus')
                    ->modalCancelActionLabel('Batal'),
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
            'index' => ListArticles::route('/'),
            'create' => CreateArticle::route('/create'),
            'edit' => EditArticle::route('/{record}/edit'),
        ];
    }
}
