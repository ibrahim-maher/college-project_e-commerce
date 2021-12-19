$(document).ready(function() {
    alter("ssssssssss");
});


var price = document.getElementById('price');

var dis = document.getElementById('dis');

var showme = document.getElementById('price_after');
$
$(dis).on("blur", function() {
    price_after.val(price.val() - ((dis.val() / price.val()) * 100));
    alter(price_after.val());
});
alter(price_after.val());