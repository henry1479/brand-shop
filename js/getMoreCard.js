
$('.products__button-test').click( function(e){
    e.preventDefault();
    let goods =$(".catalog-products__item").last().attr('data-id');
    $.ajax({
        type: 'post',
        url: './php/controlers/viewer.php',
        data: {goods: goods},
        success: function(data){
            console.log(data)
            let result = JSON.parse(data);
            $('.catalog-products__list').append(result.html);
        }
    });

})