@include('partials.header')


    <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group mr-2">
       <a href="/programs/create" class="btn btn-primary"><span data-feather="plus"></span> Create</a>
    </div>
    </div>


    <div class="table-responsive">
        <table class="table table-bordered table-vcenter table-hover table-striped">
            <thead>
            <tr>
                <th>Name</th>
                <th>Place</th>
                <th>Description</th>
                <th>Date</th>
                <th>Image</th>
                <th>Date_Time</th>
                <th>Start Time</th>
                <th>End Time</th>
     
            <th class="text-center">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($programs as $program)
                <tr>
                    <td>{{ $program->name }}</td>
                    <td>{{ $program->place }}</td>
                    <td>{{ $program->description }}</td>
                    <td>{{ $program->date }}</td>
                    <td>{{ $program->filename }}</td>
                    <td>{{ $program->date_time }}</td>
                    <td>{{ $program->start_time }}</td>
                    <td>{{ $program->end_time }}</td>
                    <td class="text-center">
                    <div class="btn-group btn-group-sm">

                        <a class="btn btn-primary btn-lg" href="/programs/{{$program->id}}" role="button">Show</a>
                        <a class="btn btn-warning btn-lg" href="/programs/{{$program->id}}/edit" role="button">Edit</a>
                        <a class="btn btn-danger" href="/programs/{{$program->id}}" role="button">Delete</a>
                    </div>
                    </td>
                </tr>   
            @endforeach
            </tbody>
        </table>
    </div>
