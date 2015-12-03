$(funcion (){
    
    var $orders = $('#orders');
    
    $.ajax({
        type:'GET',
        url:'/api/orders',
        success: function(orders){
            $.each(orders, function(i, order){
            $orders.append('<li>Name: '+order.name +',drink:' + order.drink + '</li>');
            });
        }
    });
});