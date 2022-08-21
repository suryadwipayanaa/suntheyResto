$(window).on('load',function(){
    $('.admin #menu').click(function(){
        $('.admin .menu').addClass('active');
        $('.admin .gambarr').removeClass('active');
    })
})



$(window).on('load',function(){
    $('.admin #gambarr').click(function(){
        $('.admin .gambarr').addClass('active');
        $('.admin .menu').removeClass('active');
    })
})