$(function() {
    $('div.products-count a').click(function (event) {
        event.preventDefault();
        $('a.products-actual-count').text($(this).text());
        getProducts($(this).text(), $('a.products-sort-by').attr('href'));
    });

    $('div.products-sort a').click(function (event) {
        event.preventDefault();
        let sort_by = $('a.products-sort-by');
        sort_by.attr('href',$(this).attr('href'));
        sort_by.text($(this).text());
        getProducts($('a.products-actual-count').text(), sort_by.attr('href'));
    });

    $('a#filter-button').click(function (event) {
        event.preventDefault();
        getProducts($('a.products-actual-count').text(), $('a.products-sort-by').attr('href'));
    });



function getProducts(paginate,order_by){
        const form = $('form.sidebar-filter').serialize();
        const search = $('#search_by_name').val();
        $.ajax({
            method: "GET",
            url:"/",
            data: form + "&" + $.param({paginate:paginate}) + "&" + $.param({search_by:search}) + "&" + $.param({order_by:order_by})
        })
            .done(function (response){
                $('#products-wrapper').empty();
                var counter = 0;
                let data = response.data;
                if(data.length==0){
                    $('#products-wrapper').append("<h2>Teraz nie możemy znaleźć produktów z użytymi filtrami </h2>");
                }else{
                    $.each(response.data, function(index,product){
                        counter++;
                        if(product.image_url=='default_image'){
                            var url = storagePath+'/'+'default_image.png';
                        }
                        else{
                            var url = storagePath+'/products/'+product.image_url+'.png';
                        }

                        const html = '<div class="col-2 col-md-2 col-lg-2 mb-3 " style="width: 250px;">\n' +
                            '<a href="product/'+product.id+'" class=" font-weight-bold text-dark text-uppercase small text-decoration-none">\n' +
                            '<div class="card h-100 border-0">\n' +
                            '<div class="card-img-top">\n' +
                            '<img src="'+url+'" class="img-fluid mx-auto d-block" alt="'+product.name+'">'+
                            '</div>\n' +
                            '<div class="card-body text-center">\n' +
                            '<h4 class="card-title">\n' +
                            product.name +
                            '</h4>\n' +
                            '<h5 class="card-price small text-warning">\n' +
                            '<i>'+product.price+'PLN</i>\n' +
                            '</h5>\n' +
                            '</div>\n' +
                            '</div>\n' +
                            '</a>\n' +
                            '</div>';
                        $('#products-wrapper').append(html);
                    })
                    $('#counter').html(counter);

                }


            })
            .fail(function (response){
                alert("Fail"+response);
            });
}
})
