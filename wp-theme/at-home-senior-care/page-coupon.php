<?php
/*
Template Name: Popup Print
*/
?>

<?php get_header(); ?>
<style>
  html, body { background:#fff !important; }
header {display:none;visibility:hidden;}
  @media print
{    
    .no-print, .no-print *
    {
        display: none !important;
    }
}
</style>

			<div style="width:300px;">
			<p class="text-center"><a href="javascript:if(window.print)window.print()"><button style="margin-bottom:10px;" class="no-print" >Print This</button></a></p>
			<div class="coupon">
              <h4 class="text-center">Take us up on our offer to you...</h4>
              <h1 class="text-center"><strong>3 Hour<br /> Free Trial<br /> Companion <br />Care</strong></h1>
              </div>
              </div>