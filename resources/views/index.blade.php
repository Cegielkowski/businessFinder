@include('header')


<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

    <thead>

    </thead>
    <tbody>
        <div id="content">
            <h1 id="search-text">Search for the company that you want</h1>
            <div class="row">
                <div class="col-md-12" id="search-field">
                    <div class="input-group">
                    <input type="text" class="form-control" id="search-content"placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" id="go-button" type="button">Go!</button>
                    </span>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-md-12" id="table"></div>
            </div>
        </div>
    </tbody>
</table>

@include('footer')