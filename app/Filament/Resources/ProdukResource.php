<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProdukResource\Pages;
use App\Filament\Resources\ProdukResource\RelationManagers;
use App\Models\Produk;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Select;

class ProdukResource extends Resource
{
    protected static ?string $model = Produk::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Card::make()
                ->schema([
                    TextInput::make('kode')->required()->unique(ignorable: fn($record) => $record),
                    TextInput::make('nama')->required(),
            Select::make('tipe')
            ->options([
                'Gaming' => 'Gaming',
                'Studi' => 'Studi',
            ])->required(),
            Select::make('jenis')
                ->options([
                    'Komputer' => 'Komputer',
                    'Laptop' => 'Laptop',
                    'Phone' => 'Phone',
                ])->required(),
                    TextInput::make('harga')->required()->numeric(),
                    TextInput::make('stok')->required()->numeric(),
                    FileUpload::make('image')->required(),
                ])
                ->columns(2),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kode')->sortable(),
                TextColumn::make('nama')->sortable()->searchable(),
                TextColumn::make('tipe')->sortable()->searchable(),
                TextColumn::make('jenis')->sortable()->searchable(),
                TextColumn::make('harga')->money('idr',true),
                TextColumn::make('stok'),
                ImageColumn::make('image')->circular(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListProduks::route('/'),
            'create' => Pages\CreateProduk::route('/create'),
            'edit' => Pages\EditProduk::route('/{record}/edit'),
        ];
    }
}