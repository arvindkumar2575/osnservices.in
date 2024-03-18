<?php

if (!function_exists("fetchAssets")) {
    function fetchAssets($type=null, $data=array())
    {
        $string = '';
        if(!empty($data)){
            if($type=='css'){
                foreach ($data as $key => $value) {
                    $string.='<link data-id="<?=$key?>" href="<?=base_url($value)?>" rel="stylesheet" />';
                }
            } else if($type=='js'){
                foreach ($data as $key => $value) {
                    $string.='<script data-id="<?=$key?>" src="<?= base_url($value) ?>"></script>';
                }
            }
        }
        return $string;
    }
}
