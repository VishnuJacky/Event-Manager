

@include('partials.header')
@include('partials.body')
@include('partials.footer')

    <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group mr-2">
       <a href="/categories/create" class="btn btn-primary"><span data-feather="plus"></span> Create</a>
    </div>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-vcenter table-hover table-striped">
            <thead>
            <tr>
                <th>Name</th>
                <th>Image</th>
     
                <th class="text-center">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->filename }}</td>
                    
                    <td class="text-center">
                        <div class="btn-group btn-group-sm">
                        <a class="btn btn-primary btn-lg" href="/categories/{{$category->id}}" role="button">Show</a>
                        <a class="btn btn-warning btn-lg" href="/categories/{{$category->id}}/edit" role="button">Edit</a>
                        <a class="btn btn-danger" href="/categories/{{$category->id}}" role="button">Delete</a>    
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

   