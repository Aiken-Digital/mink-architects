
    </div>
  </div>
  </body>

  <script src='//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
  <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

  <script src='<?php echo get_template_directory_uri(); ?>/assets/js/jquery.screwdefaultbuttons.min.js'></script>

  <script>
    $(document).ready(function() {
      $('input:checkbox').screwDefaultButtons({ 
        image: 'url(<?php echo get_template_directory_uri(); ?>/assets/img/checkboxes.png)',
        width:   19,
        height:  15
      });

      var animDuration = 200;

      /* Projects Tab Navigation */
      $('#architecture-selector').click(function() {
        $('.tab-content:not(#architecture-tab)').hide(0);
        $('.tab-content:not(#architecture-tab)').removeClass('selected');
        $('.tab-selector:not(#architecture-selector)').removeClass('selected');

        $('#architecture-tab').show(0);
        $('#architecture-tab').addClass('selected');
        $('#architecture-selector').addClass('selected');
      });

      $('#interior-design-selector').click(function() {
        $('.tab-content:not(#interior-design-tab)').hide(0);
        $('.tab-content:not(#interior-design-tab)').removeClass('selected');
        $('.tab-selector:not(#interior-design-selector)').removeClass('selected');

        $('#interior-design-tab').show(0);
        $('#interior-design-tab').addClass('selected');
        $('#interior-design-selector').addClass('selected');
      });

      $('#master-planning-selector').click(function() {
        $('.tab-content:not(#master-planning-tab)').hide(0);
        $('.tab-content:not(#master-planning-tab)').removeClass('selected');
        $('.tab-selector:not(#master-planning-selector)').removeClass('selected');

        $('#master-planning-tab').show(0);
        $('#master-planning-tab').addClass('selected');
        $('#master-planning-selector').addClass('selected');
      });

      $('.filter-selector .heading').click(function() {
        if($(this).parent().hasClass('expanded')) {
        $(this).parent().filter(':not(:animated)').animate({
          height: 30 + 'px'
        }, 300, function() {
          $(this).removeClass('expanded');
          $('.expand', this).removeClass('expanded');
        });
        } else {
        $(this).parent().filter(':not(:animated)').animate({
          height: 105 + 'px'
        }, 300, function() {
          $(this).addClass('expanded');
          $('.expand', this).addClass('expanded');
        });
        }
      });
    });

    function move(id, spd) {
      var obj = document.getElementById(id);
      var max = -obj.offsetHeight + obj.parentNode.offsetHeight
      var top = parseInt(obj.style.top);

      if((spd > 0 && top <= 0) || (spd < 0 && top >= max)) {
        obj.style.top = top + spd + "px";
        move.to = setTimeout(function(){ move(id, spd); }, 20);
      } else {
        obj.style.top = (spd > 0 ? 0 : max) + "px";
      }
    }
  </script>
</html>