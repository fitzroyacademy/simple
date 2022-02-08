$(function() {


  $('body').scrollspy({ target: '#scrollspy' });

  // play the intros
  $(".intro .youtube").each(function() {
      $(this).on('click', function(){
        $(this).parent('.segment').addClass('video_playing');
      });
  });

  // colour the header

  if ($('.fat_hero h1').length > 0){
    $('.fat_head .fat_device svg path').css('fill', $('.fat_hero h1').css('color'));
  }



  $('.intro .tags .tag').on('click', function(e){
    if (window.location.pathname != '/') 
    {
      console.log("awayfromhoem");
      window.location = '/#' + $(this).text();
    }

  });



  // if we're on the home page
  if ($('#ineedbutton').length > 0){


    // add some flourish on the home page
    $('.intro h1 a').append('<i class="far fa-arrow-right"></i>');
    
    // The function that fills out the form automagically:
    var formMagic = function(tag){
      // console.log(tag);
      $('#ineedbutton').dropdown('hide');
      $('body').addClass('ineedshow_search');
      $('body').removeClass('ineedshow');
      $('#quicksearch').val(tag);
      $('#quicksearch').focus().keyup();
    }

    // add listener to dropdown
    var theDropdown = document.getElementById('ineedbutton')
    theDropdown.addEventListener('shown.bs.dropdown', function () {
      $('body').addClass('ineedshow');
    });

    theDropdown.addEventListener('hidden.bs.dropdown', function () {
      $('body').removeClass('ineedshow');
    });

    // click an item
    $('[data-ineedselect] li a').on('click', function(e){
      formMagic($(this).data('searchify'));
    });

    // quick search
    $('#quicksearch').on('click, focus', function(e){
      $('body').addClass('ineedshow_search');
    });

    // type in the search
    $('#quicksearch').quicksearch('.all_lessons .intro', {
      'onAfter': function(e){
        if (
          ($(this).val().length > 0)
        )
        {
          $('#ineedbutton').dropdown('hide');
          $('body').addClass('ineedshow_search');
          $('body').removeClass('ineedshow');

        }
        else
        {
          // $('body').removeClass('ineedshow_search');
          // $('#ineedtowork').text('I need to work on');
        }
      }
    });

    // hit escape
    $(document).keyup(function(e) {
      if (e.key === "Escape") { // escape key maps to keycode `27`
        $('#ineedbutton').focus();
        $('#quicksearch').val('');
        $('body').removeClass('ineedshow_search');
        $('.all_lessons .intro').attr('style', 'display:block;');
      }
    });

    $('#x').on('click', function(e){
      $('body').removeClass('ineedshow_search');
      $('.all_lessons .intro').attr('style', '');
    });    


    // set on load
    if (window.location.hash != '')
    {
      var string = decodeURIComponent(window.location.hash.substring(1));
      formMagic(string);
    }


  // done with home page
  }

  
  

  

});

// embed youtube with JS
// stealing from https://www.sitepoint.com/faster-youtube-embeds-javascript/
// modestbranding

$(function() {
    $(".youtube").each(function() {
        if ($(this).data('bg'))
        {
          $(this).css('background-image', 'url(/assets/images/' + $(this).data('bg') + ')');
        } else {
          // Based on the YouTube ID, we can easily find the thumbnail image
          // maxresdefault.jpg is the uploaded standard
          // 0.jpg 1, 2, 3 for the defaults.
          
          $(this).css('background-image', 'url(http://i.ytimg.com/vi/' + this.id + '/maxresdefault.jpg)');
        }
    
        // Overlay the Play icon to make it look like a video player
        $(this).append($('<i/>', {'class': 'fas fa-play-circle'}));
    
        $(document).delegate('#'+this.id, 'click', function() {
            // Create an iFrame with autoplay set to true
            var iframe_url = "https://www.youtube.com/embed/" + this.id + "?autoplay=1&autohide=1&modestbranding=1&showinfo=0&control=0";
            if ($(this).data('params')) iframe_url+='&'+$(this).data('params')      
            // The height and width of the iFrame should be the same as parent
            var iframe = $('<iframe/>', {'frameborder': '0', 'src': iframe_url, 'width': $(this).width(), 'height': $(this).height() })
    
            // Replace the YouTube thumbnail with YouTube HTML5 Player
            $(this).empty().append(iframe);
        });
    });
 });