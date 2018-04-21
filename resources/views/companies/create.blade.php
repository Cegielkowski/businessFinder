@include('companies.header')

        <h1>Create a Company</h1>

        <!-- if there are creation errors, they will show here -->
        {{ HTML::ul($errors->all()) }}

        {{ Form::open(array('url' => 'company')) }}

            @include('companies.fields')

            {{ Form::submit('Create the Company!', array('class' => 'btn btn-primary')) }}

        {{ Form::close() }}

@include('footer')