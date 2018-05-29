@include('partials.header')

<h1>Add Program</h1>
            <form action="{{action('ProgramsController@update', $program->id)}}" method="post">
            {{ csrf_field() }}    
            <input name="_method" type="hidden" value="PUT">

                    <div>
                    <label for="">Name</label>
                    <input type="text" name="name" value="{{$program->name}}" placeholder="Enter Name"> 
                    <label for="">Place</label>
                    <input type="text" name="place" value="{{$program->place}}" placeholder="Enter Place">
                    <label for="">Description</label>
                    <input type="text" name="description" value="{{$program->description}}" placeholder="Enter Description">
                    <label for="">Date</label>
                    <input type="text" name="date" value="{{$program->date}}" placeholder="Enter Date"> 
                    
                    <div> 
                        <label for="">Image</label>
                        <input name="filename" type="file" value="{{$program->filename}}" class="form-control" placeholder="">
                    </div>
                    
                    <label for="">Date Time</label>
                    <input type="text" name="date_time" value="{{$program->date_time}}" placeholder="Enter Date_Time"> 
                    <label for="">Start Time</label>
                    <input type="text" name="start_time" value="{{$program->start_time}}" placeholder="Enter Start_Time">
                    <label for="">End Time</label> 
                    <input type="text" name="end_time" value="{{$program->end_time}}" placeholder="Enter End_Time">
                    </div>
                    <button type="submit" name="button">Submit</button>        
            </form>
