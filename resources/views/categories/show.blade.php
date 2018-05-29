@include('partials.header')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3">
        <h1 class="h2">{{ $category->name }}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                <a href="/categories" class="btn btn-outline-secondary"><span data-feather="arrow-left"></span> Back</a>
            </div>
        </div>
    </div>
    <form action="{{action('CategoriesController@destroy', $category->id)}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
    </form>

    

  

