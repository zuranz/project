<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\MoonShine\Pages\Category\CategoryIndexPage;
use App\MoonShine\Pages\Category\CategoryFormPage;
use App\MoonShine\Pages\Category\CategoryDetailPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Laravel\Pages\Page;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Text;

/**
 * @extends ModelResource<Category, CategoryIndexPage, CategoryFormPage, CategoryDetailPage>
 */
class CategoryResource extends ModelResource
{
    protected string $model = Category::class;

    protected string $title = 'Categories';

    /**
     * @return list<Page>
     */
    protected function pages(): array
    {
        return [
            CategoryIndexPage::class,
            CategoryFormPage::class,
            CategoryDetailPage::class,
        ];
    }

    /**
     * @param Category $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [];
    }

        protected function indexFields(): iterable
    {
        return [
            ID::make('Крутой ID', 'id'),
            Text::make('Название', 'name'),
        ];
    }



    protected function formFields(): iterable
    {
        return [
            Box::make([
                ID::make('Крутой ID', 'id'),
                Text::make('Название', 'name'),
            ]),
        ];
    }



    protected function detailFields(): iterable
    {
        return [
            Text::make('Название', 'name'),
        ];

    }
}
