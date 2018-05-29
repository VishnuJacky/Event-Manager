@include('partials.header')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
<h1>Add Event</h1>


            <form class="" action="{{URL::to('/programs/store')}}" method="post">
             
                    <div>
                    <label for="">Name</label>
                    <input type="text" name="name" value="" placeholder="Enter Name">
                    <label for="">Place</label>
                    <input type="text" name="place" value="" placeholder="Enter Place">
                    <label for="">Description</label>
                    <input type="text" name="description" value="" placeholder="Enter Description">
                    <label for="">Date</label>
                    <input type="text" id="" name="date" placeholder="yyyy/mm/dd"> 
                    
                    <div> 
                        <label for="">Image</label>
                        <input name="filename" type="file" value="" placeholder="">
                    </div>
                    
                    <label for="">Date Time</label>
                    <input type="text" name="date_time" value="" placeholder="yyyy/mm/dd hh:mm:ss:ssss"> 
                    <label for="">Start Time</label>
                    <input type="text" name="start_time" value="" placeholder="hh:mm:ss:ssss">
                    <label for="">End Time</label> 
                    <input type="text" name="end_time" value="" placeholder="hh:mm:ss:ssss">
                    </div> 
                                     

                     <input type="hidden" name="_token" value="{{csrf_token()}}">

                     <button type="submit" name="button">Submit</button>
                
                
            
            </form>
