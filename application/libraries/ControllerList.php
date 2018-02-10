<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/***
 * File: (Codeigniterapp)/libraries/Controllerlist.php
 *
 * A simple library to list all your controllers with their methods.
 * This library will return an array with controllers and methods
 *
 * The library will scan the "modules/controller" directory and (in case of) one (1) subdirectory level deep
 * for controllers.
 *
 * Usage in one of your controllers:
 *
 * $this->load->library('controllerlist');
 * print_r($this->controllerlist->getControllers());
 *
 * @author Peter Prins, modified by benito.
 */
class ControllerList {

    /**
     * Codeigniter reference
     */
    private $CI;

    /**
     * Array that will hold the controller names and methods
     */
    private $aControllers;

    // Construct
    function __construct() {
        // Get Codeigniter instance
        $this->CI =& get_instance();

        // Get all controllers
        $this->setControllers();
    }

    /**
     * Return all controllers and their methods
     * @return array
     */
    public function getControllers() {
        return $this->aControllers;
    }

    /**
     * Set the array holding the controller name and methods
     */
    private function setControllerMethods($p_moduleName, $p_sControllerName, $p_aControllerMethods) {
        $this->aControllers[$p_moduleName][$p_sControllerName] = $p_aControllerMethods;
    }

    /**
     * Search and set controller and methods.
     */
    private function setControllers() {
        // Loop through the controller directory
        foreach(glob(APPPATH . 'modules/*') as $module) {

            // it's a module, loop inside it.
            if(is_dir($module)) {

                // Get name of directory
                $dirname = basename($module, EXT);

                // Loop through the insides.
                foreach(glob(APPPATH . 'modules/'.$dirname.'/controllers/*') as $controller) {

                    // Get name of directory
                    $controllername = basename($controller, EXT);

                    //if inside controller folder is another folder, loop through inside it.
                    if(is_dir($controller)) {

                        // Loop through the insides again.
                        foreach(glob(APPPATH . 'modules/'.$dirname.'/controllers/'.$controllername.'/*') as $subdircontroller) {
                            $this->loadControllerAndGetMethods($subdircontroller, $dirname);
                        }

                    } else {
                        //it's not a directory.
                        $this->loadControllerAndGetMethods($controller, $dirname);
                    }
                }
            }
        }
    }

    /**
     * process the controller (or if its a directory, do nothing).
     * get the methods.
     */
    private function loadControllerAndGetMethods($controller = null, $module = null)
    {
        if ($controller == null || $module == null || is_dir($controller)) {
            return null;
        }

        // Get name of directory
        $controllername = basename($controller, EXT);

        // Load the controller file in memory if it's not load already
        if(!class_exists($controllername)) {
            $this->CI->load->file($controller);
        }

        // Add the controllername to the array with its methods
        $aMethods = get_class_methods($controllername);

        $aUserMethods = array();
        foreach($aMethods as $method) {
            if($method != '__construct' && $method != 'get_instance' && $method != $controllername && $method != '__get') {
                $aUserMethods[] = $method;
            }
        }

        //set to array.
        $this->setControllerMethods($module, $controllername, $aUserMethods);
    }

}
