<?php

namespace Ss\Etc;

class ChgCodeInfo extends Db{

    private $table = "ss_chg_code";

    function IsCodeOK(){
        if($this->db->has($this->table,[
            "code" => $this->id
           // "status" => 0
        ])){
            return true;
        }else{
            return false;
        }
    }

    function GetCodeArray(){
        $datas =  $this->db->select($this->table,"*",[
            "code" => $this->id
        ]);
        return $datas['0'];
    }

    function GetMoney(){
        return $this->GetCodeArray()['money'];
    }
    
    function GetTime(){
        return $this->GetCodeArray()['time'];
    }
    
    function GetStatus(){
        return $this->GetCodeArray()['status'];
    }

    function UpdateStatus($user_id){
        $this->db->update($this->table, [
            "status" => 1,
            "user_id" => $user_id,
            "use_time" => time()
        ],[
            "code" => $this->id
        ]);
        return 1;
    }

    
    function Del(){
        $this->db->delete($this->table,[
            "code" => $this->id
        ]);
    }
}