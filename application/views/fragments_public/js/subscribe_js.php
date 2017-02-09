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