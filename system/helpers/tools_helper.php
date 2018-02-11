<?php 	
/**
 * helper get load view
 * 
 * param  Array <$arr_view> {name_folder, name_file}
 */
 if ( !function_exists('get_view')  ) 
 {
 	function get_view( $arr_view = array() )
 	{
 		$CI =& get_instance();
 		if ( !is_array($arr_view) )
 		{
 			$arr_view = array($arr_view);
 		}
 		$CI->load->view( implode("/", $arr_view) );

 	}
 }
?>