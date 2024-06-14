<?php

namespace App\Nova;

use App\Models\Category;
use Illuminate\Support\Facades\Log;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Language extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Language>
     */
    public static $model = \App\Models\Language::class;

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

            Text::make('Country (long)', 'full_name')
                ->sortable()
                ->filterable(),

            Text::make('Country (short)', 'short_name')
                ->sortable(),

            Image::make('Logo', 'logo')
                ->rules('image', 'extensions:jpg,png,jpeg')
                ->disk('local')
                ->path('images/countries'),

            HasMany::make('Footer Pages', 'footer_page_translations', resource: FooterPageTranslation::class),

            HasMany::make('Contact Pages', 'contact_page_translations', resource: ContactPageTranslation::class),

            HasMany::make('Categories', 'category_translations', resource: CategoryTranslation::class),
            
            HasMany::make('About Pages', 'about_page_translations', resource: AboutPageTranslation::class),
            
            HasMany::make('Header Pages', 'header_page_translations', resource: HeaderPageTranslation::class),

            HasMany::make('Resume Pages', 'resume_page_translations', resource: ResumePageTranslation::class),

            HasMany::make('Home Pages', 'home_page_translations', resource: HomePageTranslation::class),

            HasMany::make('Translated Educations', 'translated_educations', resource: EducationTranslation::class),

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
