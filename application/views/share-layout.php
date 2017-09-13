
<div class="row social-plugin-container">

	<div id="facebook" class="share-button fb-share-button" data-href="<?php echo $url; ?>" data-layout="button" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Share</a></div>

	<!-- Place this tag where you want the share button to render. -->
	<div id="googlePlus" class="share-button g-plus" data-annotation="bubble" data-action="share" data-height="24" data-href="<?php echo $url; ?>"></div>

	<script type="IN/Share" data-url="<?php echo $url; ?>"></script>


	<a id="twitter" class="share-button twitter-share-button"
	  href="https://twitter.com/intent/tweet?text=<?php echo $title; ?>&url=<?php echo $url; ?>"
	  >
	Tweet</a>
	
</div>
