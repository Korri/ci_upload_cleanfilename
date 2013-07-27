<?php
/**
 * Allows to clean uploaded file name
 * @author Korri
 * Class MY_Upload
 */
class MY_Upload extends CI_Upload {
    /**
     * Clean filename ? Default is true, because it should, and I assume that if
     * you added this class it's in order to use it.
     * @var bool
     */
    private $clean_name = TRUE;
    public function initialize($config = array())
    {
        if(isset($config['clean_name'])) {
            $this->clean_name = $config['clean_name'];
            unset($config['clean_name']);
        }
        parent::initialize($config);
    }

    public function set_filename($path, $filename)
    {
        if($this->clean_name) {
            //Load need helpers, just to be shure
            $CI = get_instance();
            $CI->load->helper('text');
            $CI->load->helper('url');
            
            $filename = str_replace($this->file_ext, '', $filename);
            $filename = url_title(convert_accented_characters($filename), '_');
            $filename .= $this->file_ext;
        }
        return parent::set_filename($path, $filename);
    }

}
