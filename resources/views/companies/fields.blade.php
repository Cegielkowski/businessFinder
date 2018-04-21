    <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('phone_number', 'Phone number') }}
        {{ Form::number('phone_number', Input::old('phone_number'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('adress', 'Adress') }}
        {{ Form::text('adress', Input::old('adress'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('zip_code', 'Zip code') }}
        {{ Form::number('zip_code', Input::old('zip_code'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">

        {{ Form::label('city', 'City') }}
        {{ Form::text('city', Input::old('city'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('state', 'State') }}
        {{ Form::text('state', Input::old('state'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('description', 'Description') }}
        {{ Form::text('description', Input::old('description'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('category', 'Category') }}
        {{ Form::text('category', Input::old('category'), array('class' => 'form-control')) }}
    </div>
