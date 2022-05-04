<?php

namespace App\Nova;

use App\Models\Product;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;

class ProductResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = Product::class;

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
     * @param Request $request
     * @return array
     */
    public function fields(Request $request): array
    {
        return [
            ID::make(__('ID'), 'id')->sortable(),
            Slug::make(__('Slug'), 'slug'),
            Text::make(__('Product name'), 'name'),
            Text::make(__('picture'), 'picture'),
            Text::make(__('properties'), 'properties'),
            Text::make(__('short_description'), 'short_description'),
            Text::make(__('description'), 'description'),
            Text::make(__('price'), 'price'),
            Text::make(__('quantity'), 'quantity'),
            Text::make(__('discount_percent'), 'discount_percent'),
            Text::make(__('discount_amount'), 'discount_amount'),
            Text::make(__('type_id'), 'type_id'),
            Text::make(__('price_dollar'), 'price_dollar'),
            Text::make(__('price_euro'), 'price_euro'),
            Text::make(__('old_price'), 'old_price'),

        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param Request $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param Request $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param Request $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param Request $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
