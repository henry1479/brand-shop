function addToCart(id) {
    
    $.ajax({
        type: 'POST',
        url: './php/controlers/basket.php',
        data: "id="+id,
        success: function() {
            alert("The item in the cart ");
        }
    });
}