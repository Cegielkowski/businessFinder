$("#go-button").click(function() {
    let searchContent = $("#search-content").val();
    switch (searchContent == '') {
        case true:
            toastr.warning('O campo de pesquisa é obrigatório');
            break;
        case false:
            $.ajax({
                type: 'get',
                data: searchContent,
                url: '/company/searchCompany',
                success: function(dados) {
                    console.log(dados);
                }
            });
            break;
        default:
            toastr.error('Something went worng. Please reload the page');
            break;
    }


});