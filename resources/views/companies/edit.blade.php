@include('header')
@guest
    @include('denied')
@else
            <h1>Edit {{ $company->title }}</h1>

            <!-- if there are creation errors, they will show here -->
            {{ HTML::ul($errors->all()) }}

            {{ Form::model($company, array('route' => array('company.update', $company->id), 'method' => 'PUT')) }}

                @include('companies.fields')

                {{ Form::submit('Edit the Company!', array('class' => 'btn btn-primary')) }}

            {{ Form::close() }}
@endguest
@include('footer')