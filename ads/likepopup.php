<script type="text/javascript">	
$( document ).ready(function() {
<?php
$likepopup = 10000 * 1000;
echo "setTimeout(likepopup, ".$likepopup.");";
?>


    function likepopup() {
        $('#totalOverBlack').show();
    };
	});
</script>

<div id="totalOverBlack">
	<div id="fblikeus">
		<div class="fblikeus-title">
			<span class="fblikeus-fbinc"></span>
			<span class="fblikeus-close"></span>
		</div>
		<div class="fblikeus-body">
			Please Help us to Like and stay update with us!<br/>
			<iframe src="https://www.facebook.com/plugins/like.php?href=<?php echo $fb_like;?>&amp;show_faces=false&amp; locale=en_US&amp; layout=button_count" scrolling="no" frameborder="0" style="height: 20px; width: 80px" allowTransparency="true"></iframe>
		</div>
	</div>
</div>