@include('companies.header')

<h1>All the Companies</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Title</td>
            <td>Adress</td>
            <td>Zip code</td>
            <td>City</td>
            <td>Category</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($company as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->title }}</td>
            <td>{{ $value->adress }}</td>
            <td>{{ $value->zip_code }}</td>
            <td>{{ $value->city }}</td>
            <td>{{ $value->category }}</td>
            

            <!-- we will also add show, edit, and delete buttons -->
            <td>
                {{ Form::open(array('url' => 'company/' . $value->id)) }}
                    
                    <!-- show the company (uses the show method found at GET /company/{id} -->
                    <a class="btn btn-small btn-success" href="{{ URL::to('company/' . $value->id) }}">Show</a>

                    <!-- edit this company (uses the edit method found at GET /company/{id}/edit -->
                    <a class="btn btn-small btn-info" href="{{ URL::to('company/' . $value->id . '/edit') }}">Edit</a>

                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
                    {{ Form::close() }}

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

@include('footer')