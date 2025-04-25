<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Models\Project;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                TextInput::make('title')
                    ->label('Project Title')
                    ->required()
                    ->live() // For reactive behavior
                    ->afterStateUpdated(
                        fn($state, callable $set) =>
                        $set('slug', Str::slug($state)) // Auto-generate slug from name
                    ),

                TextInput::make('slug')
                    ->required()
                    ->unique('projects', 'slug', fn ($record) => $record ? $record->id : null),

                TextInput::make('short_description')->required()->columnSpan(2),
                RichEditor::make('description')->required()->columnSpan(2),
                FileUpload::make('image')
                    ->required()
                    ->columnSpanFull(),
                Select::make('status')
                    ->options([
                        'active' => 'Active',
                        'inactive' => 'Inactive',
                    ]),

                TextInput::make('created_by')
                    ->hidden()
                    ->default(Auth::id())
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
                ImageColumn::make('image'),
                TextColumn::make('status')
                    ->badge()
                    ->colors([
                        'active' => 'success',
                        'inactive' => 'danger',
                    ])
                    ->formatStateUsing(fn($state) => ucfirst($state)),

                TextColumn::make('created_by')
                    ->label('Created By')
                    ->formatStateUsing(fn($state): string => Auth::user()->id == $state ? 'You' : $state)

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
