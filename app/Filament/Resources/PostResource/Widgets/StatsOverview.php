<?php

namespace App\Filament\Resources\PostResource\Widgets;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('All Post', Post::all()->count())
                ->description('Your total post')
                ->color('success'),
            Stat::make('All Category', Category::all()->count())
                ->description('Your total category')
                ->color('success'),
            Stat::make('All Tag', Tag::all()->count())
                ->description('Your total tag')
                ->color('success'),
        ];
    }
}
