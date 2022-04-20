
new Swiper('.swiper',{
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
    },


    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        renderBullet: function (index, className) {
            return '<span class="' + className + '">' + '</span>';
          },
        dynamicBullets: true,
      },
    grabCursor: true,
  
});

$('.plus').click(function(){
    $(this).parent().find('.hidden').slideToggle(300);
    $(this).toggleClass('active');
})
document.querySelector("#icon").onclick = () => {
  document.querySelector("#icon").className = "fa-solid fa-star";
}