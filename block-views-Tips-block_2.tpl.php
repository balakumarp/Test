<?php
// $Id: block.tpl.php,v 1.3 2007/08/07 08:39:36 goba Exp $
?>
<div id="block-<?php print $block->module .'-'. $block->delta; ?>" class="clear-block block block-<?php print $block->module ?>">
<div class="large-12 columns testimonial testimonial-fix">
<div class="dental-tips less-margin">
<div class="small-7 columns">
<?php if (!empty($block->subject)): ?>
  <h2><?php print $block->subject ?></h2>
<?php endif;?>

  <div class="content"><?php print $block->content; ?>
   </div>
  </div>
  <div class="small-5 columns less-space-fix "><img style="float:right;width:100%;" src="themes/alaska/img/dental-tips-bg-img.png"></div>
  </div>
  </div>
</div>

