$(document).ready(function () {

  $('.first-button').on('click', function () {

    $('.animated-icon1').toggleClass('open');
  });
  $('.second-button').on('click', function () {

    $('.animated-icon2').toggleClass('open');
  });
  $('.third-button').on('click', function () {

    $('.animated-icon3').toggleClass('open');
  });
});
$(function() {
  $('#dialog').dialog({autoOpen: false, modal: true})
  $('.popup').click(function() {
        $.get('www.mysite.com/php/ShowTheReviews.php',
              {Productnum: 'XXXXXX', MODEL: 'Product Name'},
              function(content) {
                    $('#dialog').html(content).dialog('open')
              }
        )
  })
})