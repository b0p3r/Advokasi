<script type="text/javascript">
$(function(){
  
  // show/hide report filters and layers boxes on home page map
  $("a.toggle").toggle(
    function() { 
      $($(this).attr("href")).show();
      $(this).addClass("active-toggle");
    },
    function() { 
      $($(this).attr("href")).hide();
      $(this).removeClass("active-toggle");
    }
  );
  
});

</script>
<!-- main body -->
<div id="main" class="clearingfix">
	<div id="mainmiddle">

		<!-- content column -->
		<div id="content" class="clearingfix">
				<?php
				// Map and Timeline Blocks
				echo $div_map;
				echo $div_timeline;
				?>
			</div>
		</div>
		<!-- / content column -->

	</div>
</div>
<!-- / main body -->
