jQuery(document).ready(function($) {

let currentPage = 1;
$('#load-more').on('click', function(e) {
  console.log("click")
  e.preventDefault();
  currentPage++; // Do currentPage + 1, because we want to load the next page

  $.post({
    type: 'POST',
    url: frontendajax.ajaxurl,
    dataType: 'html',
    data: {
      action: 'load_more_posts',
      paged: currentPage,
    },
    success: function (res) {
      console.log(res);
      $('.archive_loop').append(res);
    }
  });
});
});
