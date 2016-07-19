<?php
class ImageSorter{
    public $types = array(
                        1 => 'ships',
                        2 => 'planets',
                        3 => 'stations',
                        4 => 'races',
                        5 => 'logos',
                        6 => 'hangar',
                        7 => 'no_cat',
                        8 => 'delete',

                        10 => 'fanart',
                        11 => 'lamp',
                        12 => 'character',
                        13 => 'artwork',
                        14 => 'rl',
                        15 => 'spectrum_dispatch',


                        // Shiffe

                    );

    private $_absPath = '/var/www/vhtdocs/sccom.de/dev/starcitizen_wiki/sort/';
    public function moveImage($image_name, $type){
        //if (is_numeric($type) && isset($this->types[$type])){
            //$folder = $this->types[$type];
            $folder = strtolower(str_replace(' ', '_', $type));
            if (is_file($this->_absPath . 'images/' . $image_name)){
                if (!is_dir($this->_absPath . 'images/' . $folder)){
                    mkdir($this->_absPath . 'images/' . $folder);
                }

                rename($this->_absPath . 'images/' . $image_name, $this->_absPath . 'images/' . $folder . '/' . $image_name);
                if (is_file($this->_absPath . 'images/' . $folder . '/' . $image_name)){
                    return $this->_genStatusCode(true, 'moved', 1);
                }else{
                    return $this->_genStatusCode(false, 'file_not_moved', -1);
                }
            }else{
                return $this->_genStatusCode(false, 'file_not_found ' . 'images/' . $image_name, -1);
            }
        //}
    }

    private function _genStatusCode($success, $state, $code){
        return json_encode(array('success' => $success, 'state' => $state, 'code' => $code));
    }
}
