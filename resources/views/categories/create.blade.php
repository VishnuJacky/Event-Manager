@include('partials.header')
    
<h1>Add Category</h1>
            <form class="" action="{{URL::to('/categories/store')}}" method="post">
                    <div>
                    <label for="">Name</label>
                    <input type="text" name="name" value="" placeholder="Enter Name"> 
     
                    <label for="">Image</label>
                    <input name="filename" type="file" value=""  placeholder="">                 

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    </div>
                    <button type="submit" name="button">Submit</button>
            </form>
