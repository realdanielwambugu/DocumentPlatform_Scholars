    AOS.init({
       easing: 'ease-in-out-sine'
    });

    $(document).on('click', '#switch_nav', function ()
    {
        if ($('#nav').is(":visible"))
        {
            $('#nav').fadeOut('slow');

            $(this).html('<i class="pr-4 fal fa-bars"></i>');
        }
        else
        {
            $('#nav').fadeIn('slow');

            $(this).html('<i class="pr-4 fal fa-times"></i>');
        }
    });



$(window).data('ajaxready', true).scroll(function(e)
{
if ($(window).data('ajaxready') == false) return;


     if ((window.innerHeight + window.pageYOffset) >= (document.documentElement.scrollHeight)-5) {

          $('#loader_custom').show();

          $(window).data('ajaxready', false);

          if (document.getElementById('doc_type').value == 'pdf')
          {
              var route_name = 'pdfs';
          }
          else
          {
              var route_name = 'past-papers';
          }

          $.ajax({
              cache: false,
              type: 'POST',
              url: route_name,
              data: {id:$('.ListView__item:last').attr('id')},
              success: function(data)
              {
                  if (data)
                  {
                      $('#doc_list').append(data);

                      $('#loader_custom').hide();
                  }
                  else
                  {
                      $('#loader_custom').html('No More Files');
                  }

                  $(window).data('ajaxready', true);
              }
          });
}
});
