const header_block = document.querySelector('.header-block');

function ChangeBorderBottom(){
    if(document.documentElement.scrollTop > 0 && !document.querySelector(".darkmode-toggle--white")){
        header_block.setAttribute('style', 'border-bottom: 1px solid #CDCACA; position: fixed;');
    }else{
        header_block.setAttribute('style', 'position: static; border: 0');
    }
}

window.addEventListener('scroll', ChangeBorderBottom);

$('#search-form-text').focus(() => {
    $('#search-form-text').attr('placeholder', '');
});

$('#search-form-text').blur(() => {
    $('#search-form-text').attr('placeholder', 'Поиск');
});
