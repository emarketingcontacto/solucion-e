<?php

namespace App\Filament\Resources\Proyectos\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;

class ProyectosTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('cliente_nombre')
                ->searchable()
                ->label('Cliente'),
                // TextColumn::make('url')
                // ->label('Link'),
                TextColumn::make('slug')
                ->label('Slug')
                ->searchable(),
                IconColumn::make('publicado')
                    ->boolean()
                    ->sortable(),
                IconColumn::make('destacado')
                    ->boolean()
                    ->sortable()
            ])
            ->filters([
                Filter::make('destacados')
                ->query(fn ($query) => $query->where('destacado', true))
                ->label('Solo Destacados'),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
