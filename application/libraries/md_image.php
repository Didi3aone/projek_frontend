<?php if ( ! defined('BASEPATH')) exit('no direct scripting allowed');

/**
* MD Image - manipulation class
*
* Crop to ratio and resize images
*
* @package        CodeIgniter
* @category    Libraries
* @version        1.0  -  24/06/2009
* @author        Mihai Dimofti (http://sumi-edesign.ro)
*/

class Md_image
{
    
    /**
    * Constructor
    */
    
    function Md_image()
    {
        $this->ci =& get_instance();
        $this->ci->load->library('image_lib');
    }
    
    /*******************************************************************************
    *    Usage:    1. copy in libraries folder
    *            
    *            2. load libray in your controller or model
    *                $this->load->library('md_image');
    *            
    *            3. use it to get a new image:
    *                $new_img = $this->md_image->crop_to_ratio(-- see above args --);
    *            
    *            4. check if $new_img isset
    *                now you have $new_img['width'] & $new_img['height'] to use
    *                for further manipulation in your script
    *
    *            5. optionally you can use second function to resize and copy
    *                $this->md_image->resize_image($source, 600, 450, $path)
    *
    *        Note: for above usage example I used default ratio of 4:3 
    *                therefore target image uses 600px x 450px which is 4:3
    *                both functions return FALSE if something goes wrong
    *
    *******************************************************************************/
    
    /**
     * Get source image and crop to desired ratio
     * 
     * @access public
     * @param string    $source    : source image (must be path relative to base_url)
     * @param numeric    $width : source image width in px
     * @param numeric    $height : source image height in px
     * @param numeric    $x : long side ratio element - defaults to 4 (as in 4:3)
     * @param numeric    $y : short side ratio element - defaults to 3 (as in 4:3)
     * @param string    $dest : destination (path relative to base_url)  - if not set source will be replaced
     * @return
     */
    
    function crop_to_ratio($source, $width, $height, $x = 4, $y = 3, $dest = FALSE)
    {
    
    // uncomment this line if you need to specify library
    //    $config['image_library'] = 'gd2'; 
    
        $config['source_image']    = $source;
        $config['maintain_ratio'] = FALSE;
        if($dest)
        {
            $config['new_image'] = $dest;
        }
        
        $result = array();
        
        if($width < $height) // check if source is portrait
        {
            $long = $height;
            $short = $width;
            $xa = 'y';
            $ya = 'x';
            $long_side = 'height';
            $short_side = 'width';
        }
        else // source is square or landscape
        {
            $long = $width;
            $short = $height;
            $xa = 'x';
            $ya = 'y';
            $long_side = 'width';
            $short_side = 'height';
        }
        
        
        if($long != (($short * $x) / $y))
        {
            // get crop axis
            if(($long / $short) > ($x / $y)) // cut from long axis
            {
                $new_long = ($short * $x) / $y;
                $dif = $long - $new_long;
                $config[$xa.'_axis'] = $dif / 2;
                $config[$ya.'_axis'] = 0;
                $config[$long_side] = $new_long + ($dif / 2);
                $config[$short_side] = $short;
                $result[$long_side] = $new_long;
                $result[$short_side] = $short;
            }
            else // cut from short axis
            {
                $new_short = ($long * $y) / $x;
                $dif = $short - $new_short;
                $config[$ya.'_axis'] = $dif / 2;
                $config[$xa.'_axis'] = 0;
                $config[$long_side] = $long;
                $config[$short_side] = $new_short + ($dif / 2);
                $result[$long_side] = $long;
                $result[$short_side] = $new_short;
            }
        }
        else // this builds return in case source is allready in desired ratio
        {
            $result['width'] = $width;
            $result['height'] = $height;
            return $result;
        }
        
        $this->ci->image_lib->initialize($config);
        if( ! $this->ci->image_lib->crop())
        {
            $this->ci->image_lib->clear();
            return FALSE;
        }
        else
        {
            $this->ci->image_lib->clear();
            return $result;
        }
        
    }
    
    /**
     * Get source image and resize to desired dimensions
     * 
     * @access public
     * @param string    $source    : source image (must be path relative to base_url)
     * @param numeric    $width : target image width in px
     * @param numeric    $height : target image height in px
     * @param string    $dest : destination (path relative to base_url)  - if not set source will be replaced
     * @return
     */
    
    function resize_image($source, $width, $height, $dest = FALSE)
    {
        $config['source_image']    = $source;
        if($dest)
        {
            $config['new_image'] = $dest;
        }
        
        $config['width'] = $width;
        $config['height'] = $height;
        
        $this->ci->image_lib->initialize($config);
        if( ! $this->ci->image_lib->resize())
        {
            $this->ci->image_lib->clear();
            return FALSE;
        }
        else
        {
            $this->ci->image_lib->clear();
            return TRUE;
        }
    }
}
