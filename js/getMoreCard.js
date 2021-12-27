function getMoreCard() {
    // e.preventDefault();
    $.ajax({
        url: 'index.php',
        type: "GET",
        data: "number=3",
        success: function() {
            alert("I am here" + window.location.href);
        }
      });
}
