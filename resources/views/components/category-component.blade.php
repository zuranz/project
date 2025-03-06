<div class="categories">
    <header>
        <h3 class="side-title-head">Categories</h3>
    </header>
    <ul>
        @foreach ($categories as $category)

            <li><a href="/category/{{$category->id}}">{{$category->name}}({{$category->articles_count}})</a></li>
        @endforeach

    </ul>
</div>
