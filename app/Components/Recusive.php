<?php

namespace App\Components;

class Recusive{

    private $data;
    private $htmlOptions;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function selectRecusive($parentId = null, $id = 0, $text = ''){
        $data = $this->data->where('parent_id', $id)->get();
        foreach ($data as $item){
            if($parentId != null && $parentId == $item["id"]){
                $this->htmlOptions .= "<option selected value='".$item["id"]."'>".$text." ".$item["name"]."</option>";
            }else{
                $this->htmlOptions .= "<option value='".$item["id"]."'>".$text." ".$item["name"]."</option>";
            }
            $this->selectRecusive($parentId, $item['id'], $text.'--');
        }
        return $this->htmlOptions;
    }

}
