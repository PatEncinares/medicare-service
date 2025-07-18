<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomePageResource\Pages;
use App\Filament\Resources\HomePageResource\RelationManagers;
use App\Models\HomePage;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HomePageResource extends Resource
{
    protected static ?string $model = HomePage::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Fieldset::make('SEO Settings')
                ->schema([
                    Forms\Components\TextInput::make('meta_title')
                        ->label('Meta Title')
                        ->maxLength(255),
                    Forms\Components\TextInput::make('meta_description')
                        ->label('Meta Description')
                        ->maxLength(255),
                    Forms\Components\TextInput::make('robot')
                        ->label('Robots Meta Tag')
                        ->maxLength(255),
                ])
                ->columns(1),


                 Fieldset::make('Hero Content Settings')
                ->schema([
                    Forms\Components\TextInput::make('headline')
                        ->label('Headline')
                        ->maxLength(255),
                    Forms\Components\TextInput::make('sub-headline')
                        ->label('Sub-headline')
                        ->maxLength(255),
                    Forms\Components\Textarea::make('description')
                        ->label('Description')
                        ->maxLength(1000),
                    Forms\Components\TextInput::make('button1_text')
                        ->label('Button 1 Text')
                        ->maxLength(255),
                    Forms\Components\TextInput::make('button1_link')
                        ->label('Button 1 Link')
                        ->maxLength(255),
                    Forms\Components\TextInput::make('button2_text')
                        ->label('Button 2 Text')
                        ->maxLength(255),
                    Forms\Components\TextInput::make('button2_link')
                        ->label('Button 2 Link')
                        ->maxLength(255),
                    Forms\Components\FileUpload::make('hero-image')
                        ->label('Hero Image'),
                ])
                ->columns(1),

            ]);


           

           
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('meta_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('meta_description')
                    ->searchable(),
                Tables\Columns\TextColumn::make('robot')
                    ->searchable(),
                Tables\Columns\TextColumn::make('headline')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sub-headline')
                    ->searchable(),
                Tables\Columns\TextColumn::make('description')
                    ->searchable(),
                Tables\Columns\TextColumn::make('button1_text')
                    ->searchable(),
                Tables\Columns\TextColumn::make('button1_link')
                    ->searchable(),
                Tables\Columns\TextColumn::make('button2_text')
                    ->searchable(),
                Tables\Columns\TextColumn::make('button2_link')
                    ->searchable(),
                Tables\Columns\TextColumn::make('hero-image')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListHomePages::route('/'),
            'create' => Pages\CreateHomePage::route('/create'),
            'view' => Pages\ViewHomePage::route('/{record}'),
            'edit' => Pages\EditHomePage::route('/{record}/edit'),
        ];
    }
}
