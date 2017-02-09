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
      var a1_top = parseFloat(document.getElementById('a1').getBoundingClientRect().top);
      if(height >= a1_top)
      {
		$('#a1 img').addClass('show');
      }
      var a2_top = parseFloat(document.getElementById('a2').getBoundingClientRect().top);
      if(height >= a2_top + 1000)
      {
		$('#a2 img').addClass('show');
      }
      var a3_top = parseFloat(document.getElementById('a3').getBoundingClientRect().top);
      if(height >= a3_top + 1000)
      {
		$('#a3 img').addClass('show');
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
            $('#top-bar .navbar-right li:nth-child(1)').addClass('active');
      });
</script>