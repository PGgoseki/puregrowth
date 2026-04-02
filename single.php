<?php
if (in_category('member')) {
  get_template_part('single-member' , false);
}else {
  get_template_part('single-default' , 'normal');
}
?>
