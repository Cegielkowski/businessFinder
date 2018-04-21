@include('companies.header')

        <h1>Showing {{ $company->title }}</h1>

            <div class="jumbotron text-center">
                <h2>{{ $company->title }}</h2>
                <p>
                    <strong>Email:</strong> {{ $company->email }}<br>
                    <strong>Adress:</strong> {{ $company->adress }}<br>
                    <strong>Phone number:</strong> {{ $company->phone_number }}<br>
                    <strong>Zip code:</strong> {{ $company->zip_code }}<br>
                    <strong>City:</strong> {{ $company->city }}<br>
                    <strong>State:</strong> {{ $company->state }}<br>
                    <strong>Description:</strong> {{ $company->description }}<br>
                    <strong>Category:</strong> {{ $company->category }}<br>
                    <strong>Adress:</strong> {{ $company->adress }}<br>
                  </p>
            </div>

@include('footer')