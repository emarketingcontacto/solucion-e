<?php

namespace App\Filament\Resources\Negocios;

use App\Filament\Resources\Negocios\Pages\CreateNegocio;
use App\Filament\Resources\Negocios\Pages\EditNegocio;
use App\Filament\Resources\Negocios\Pages\ListNegocios;
use App\Filament\Resources\Negocios\Schemas\NegocioForm;
use App\Filament\Resources\Negocios\Tables\NegociosTable;
use App\Models\Negocio;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class NegocioResource extends Resource
{
    protected static ?string $model = Negocio::class;
    protected static ?string $recordTitleAttribute = 'nombre';
    // nombre lateral
    protected static ?string $navigationLabel = 'Negocio';
    // nombre dentro de la seccion
    protected static ?string $pluralLabel = 'Configuración';
    // nombre para registro individual
    protected static ?string $modelLabel = 'Configuración del Negocio';


    protected static string|BackedEnum|null $navigationIcon = Heroicon::Cog6Tooth;

    public static function form(Schema $schema): Schema
    {
        return NegocioForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return NegociosTable::configure($table);
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
            'index' => ListNegocios::route('/'),
            'create' => CreateNegocio::route('/create'),
            'edit' => EditNegocio::route('/{record}/edit'),
        ];
    }

}
