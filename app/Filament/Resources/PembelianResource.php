<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PembelianResource\Pages;
use App\Filament\Resources\PembelianResource\RelationManagers;
use App\Models\Pembelian;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;


class PembelianResource extends Resource
{
    protected static ?string $model = Pembelian::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Card::make()
            ->schema([
            TextInput::make('kode_pembelian')->required()->unique(ignorable:fn(
            $record)=>$record),
            Select::make('produk_id')
            ->relationship('produk', 'nama')
            ->required(),
            TextInput::make('banyak')->required()->numeric(),
            TextInput::make('bayar')->required()->numeric(),
            Select::make('user_id')
            
            ->relationship('user', 'name')
            ->required(),
            Select::make('status')
            ->options([
            'Verifikasi' => 'Verifikasi',
            'Proses' => 'Proses',
            'Kirim' => 'Kirim',
            'Sampai' => 'Sampai',
            'Selesai' => 'Selesai',
            ])->required(),
            ])
            ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kode_pembelian')->sortable(),
                TextColumn::make('produk.nama')->sortable()->searchable(),
                TextColumn::make('banyak'),
                TextColumn::make('bayar')->money('idr',true),
                TextColumn::make('user.name')->sortable()->searchable(),
                TextColumn::make('status'),
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
            'index' => Pages\ListPembelians::route('/'),
            'create' => Pages\CreatePembelian::route('/create'),
            'edit' => Pages\EditPembelian::route('/{record}/edit'),
        ];
    }
}