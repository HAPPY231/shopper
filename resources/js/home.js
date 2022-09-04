var categories = [];
var subcategoriess = [];
$(function() {
    $('div.products-count a').click(function (event) {
        event.preventDefault();
        $('a.products-actual-count').text($(this).text());
        getProducts($(this).text());
    });

    $('a#filter-button').click(function (event) {
        event.preventDefault();
        getProducts($('a.products-actual-count').text());
    });


function getProducts(paginate){
        const form = $('form.sidebar-filter').serialize();
        $.ajax({
            method: "GET",
            url:"/",
            data: form + "&" + $.param({paginate:paginate})
        })
            .done(function (response){
                $('#products-wrapper').empty();
                var counter = 0;
                $.each(response.data, function(index,product){
                    counter++;
                    if(product.image_url=='default_image'){
                        var url = storagePath+'/'+'default_image.png';
                    }
                    else{
                        var url = storagePath+'/products/'+product.image_url+'.png';
                    }

                    const html = '<div class="col-2 col-md-2 col-lg-2 mb-3" style="width: 250px;">\n' +
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


                $('#counter1').html(response.categories_children);
            })
            .fail(function (response){
                alert("Fail"+response);
            });
}
})
