@include('partials.header')

<h1>Add Category</h1>
            <form action="{{action('CategoriesController@update', $category->id)}}" method="post">
            {{ csrf_field() }}    
            <input name="_method" type="hidden" value="PUT">

                    <div>
                    <label for="">Name</label>
                    <input type="text" name="name" value="{{$category->name}}" placeholder="Enter Name"> 
     
                    <label for="">Image</label>
                    <input name="filename" type="file" value="{{$category->filename}}"  placeholder="">  
                    </div>
                    <button type="submit" name="button">Submit</button>       
            </form>
