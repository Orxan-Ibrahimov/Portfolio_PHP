<?php

namespace App\Nova;

use App\Models\Category;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\URL;
use Laravel\Nova\Http\Requests\NovaRequest;

class Portfolio extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Portfolio>
     */
    public static $model = \App\Models\Portfolio::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),

            Text::make('Title', 'title')->sortable(),

            URL::make('Web site', 'project_url'),

            Textarea::make('Description', 'description'),

            Date::make('Project Date', 'project_date'),

            Image::make('Cover', 'cover')
                ->rules('image', 'extensions:jpg,png,jpeg')
                ->disk('local')
                ->path('images/projects/cover'),

            BelongsTo::make('Category', 'category', resource: PortfolioCategory::class) 
            -> display('title'),

            BelongsTo::make('Person', 'user', resource: User::class) 
            -> display('name'),

            HasMany::make('Galleries', 'galleries', resource: PortfolioGallery::class)

        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
