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


  // add listener to dropdown
  var theDropdown = document.getElementById('ineedbutton')
  theDropdown.addEventListener('shown.bs.dropdown', function () {
    $('body').addClass('ineedshow');
  });

  theDropdown.addEventListener('hidden.bs.dropdown', function () {
    $('body').removeClass('ineedshow');
  });

  // quick search
  $('#quicksearch').quicksearch('.all_lessons .intro', {
    'onAfter': function(e){
      if ($(this).val().length > 0)
      {
        $('#ineedbutton').dropdown('hide');
        $('body').addClass('ineedshow_search');
        $('body').removeClass('ineedshow');
      }
    }
  });


  

  

  //List.js search
  /*

  var listoptions = {
    'searchClass' : 'js_quicksearch',
    'listClass'   : 'js_quicksearch_items'
  };

  var lessonList = new List('js_quicksearch_parent', listoptions);
  */

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