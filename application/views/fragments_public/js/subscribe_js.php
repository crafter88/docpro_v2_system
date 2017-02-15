<script>
      $(window).scroll(function() {
      var height = $(window).scrollTop();
      if(height > 1)
      {
            $('#top-bar').removeClass('dark');
            $('#top-bar').addClass('white');
      }else{
            $('#top-bar').removeClass('white');
            $('#top-bar').addClass('dark');
      }

  });
</script>
<script>
$(document).ready(function(){
      var height = $(window).scrollTop();
      if(height > 1)
      {
            $('#top-bar').removeClass('dark');
            $('#top-bar').addClass('white');
      }else{
            $('#top-bar').removeClass('white');
            $('#top-bar').addClass('dark');
      }
      $('#top-menu li').removeClass('active');
      $('#top-bar .navbar-right li:nth-child(2)').addClass('active');
});
</script>
<script type="text/javascript">
      $(document).ready(function(){
            var sequence_element = document.getElementById('sequence');
            var option = {
                  keyNavigation: false,
                  fadeStepWhenSkipped: false,
                  swipeNavigation: false
            }
            var mysequence = sequence(sequence_element, option);
            $('#free-btn').click(function(){
                  mysequence.goTo('2');
            });
            $('.back').click(function(){
                  mysequence.goTo('1');
            });
      });
</script>
<script src="<?php echo base_url(); ?>libs/moderna/js/bootstrap.min.js"></script>
<script type="text/javascript">
      $(document).ready(function(){
            var restriction = Object.create(v_restriction);
            restriction.number();
            restriction.required();
            restriction.format();
            restriction.no_space();

            var validation = Object.create(v_validation);
            $('.v-submit').click(function(){
                  $(this).css('color', '#FFF');
                  $(this).attr('disabled', true);
                  $(this).html("<i class='fa fa-spinner fa-spin'></i> Loading");
                  var form = $(this).closest('form');
                  var required_input = validation.required_input(form);
                  var format_input = validation.format_input(form);
                  if(required_input || format_input){
                        $('.v-notice').css('display', 'block');
                        $(this).removeAttr('disabled');
                        $(this).html("Submit");
                  }else{
                        $('#l-submit').modal({
                              backdrop: false,
                              keyboard: false,
                              show: true,
                        });
                        form.submit();
                  }
            });
      });
</script>