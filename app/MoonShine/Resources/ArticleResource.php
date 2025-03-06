<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Article;
use App\MoonShine\Pages\Article\ArticleIndexPage;
use App\MoonShine\Pages\Article\ArticleFormPage;
use App\MoonShine\Pages\Article\ArticleDetailPage;

use MoonShine\Laravel\Fields\Relationships\BelongsTo;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Laravel\Pages\Page;
use MoonShine\Quill\Fields\Quill;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Text;

/**
 * @extends ModelResource<Article, ArticleIndexPage, ArticleFormPage, ArticleDetailPage>
 */
class ArticleResource extends ModelResource
{
    protected string $model = Article::class;

    protected string $title = 'Articles';

    /**
     * @return list<Page>
     */
    protected function pages(): array
    {
        return [
            ArticleIndexPage::class,
            ArticleFormPage::class,
            ArticleDetailPage::class,
        ];
    }

    /**
     * @param Article $item
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
            Text::make('Название', 'title'),
            Text::make('Краткое содержание', 'content'),
            Quill::make('Описание', 'description'),
            BelongsTo::make('Категория', 'category', 'name')->searchable(),
            Image::make('Картинка', 'image'),


        ];
    }



    protected function formFields(): iterable
    {
        return [
            Box::make([
                ID::make(),
                Text::make('Название', 'title'),
                Text::make('Краткое содержание', 'content'),
                Quill::make('Описание', 'description'),
                Image::make('image', 'image'),
                BelongsTo::make('Категория', 'category', 'name')->searchable(),
            ]),
        ];
    }



    protected function detailFields(): iterable
    {
        return [
            Text::make('Название', 'title'),
            BelongsTo::make('Категории', 'category', 'name')->searchable(),
            Text::make('Краткое содержание', 'content'),
            Text::make('Описание', 'description'),
            Image::make('Картинка', 'image'),

        ];

    }
}
