$("#go-button").click(function() {
    let searchContent = $("#search-content").val();
    switch (searchContent == '') {
        case true:
            toastr.warning('the search field can not be empty ');
            break;
        case false:
            $.ajax({
                type: 'get',
                url: 'company/searchCompany/' + searchContent,
                success: function(data) {
                    let result = JSON.parse(data);
                    if (result.status) {
                        $("#table").html(result.table);
                    } else {
                        toastr.warning('Nothing found!');
                    }
                }
            });
            break;
        default:
            toastr.error('Something went worng. Please reload the page');
            break;
    }

});