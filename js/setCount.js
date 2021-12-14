function setCount(id,event) {
    let count = event.target.value;
    $.ajax({
        type: 'POST',
        url: './php/controlers/basket.php',
        data: `good_id=${id}&count=${count}`,
        success: console.log(count)
    });
}