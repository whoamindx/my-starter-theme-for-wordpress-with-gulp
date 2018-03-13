<?php
	function paginacao($pages = '', $range = 4){
		 $showitems = ($range * 2)+1;  
		 global $paged;
		 if(empty($paged)) $paged = 1;
		 if($pages == ''){
			 global $wp_query;
			 $pages = $wp_query->max_num_pages;
			 if(!$pages){
				 $pages = 1;
			 }
		 }   
		 if(1 != $pages){
			 if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."' class='current'>&laquo;</a>";
			 if($paged > 6 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>1</a> <span class='current'>...</span>";
			 for ($i=1; $i <= $pages; $i++){
				 if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
					 echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
				 }
			 }
			 if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<span class='current'>...</span> <a href='".get_pagenum_link($pages)."'>$pages</a>";
			 if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."' class='current'>&raquo;</a>";
			 echo "</div>\n";
		 } 
	}