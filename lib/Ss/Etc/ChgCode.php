<?php

namespace Ss\Etc;


class ChgCode extends Db {

    private $table = "ss_chg_code";

    function AddCode($money,$time,$tag){
        $code = Comm::get_random_char(32);
        $this->db->insert($this->table,[
            "add_time" => time(),
            "code" => $code,
            "money" => $money,
            "time" => $time,
            "tag" => $tag
        ]);
        return $code;
    }

    function AddManyCode($num,$money,$time,$tag){
        for($i=0;$i<$num;$i++){
            $this->AddCode($money,$time,$tag);
        }
    }

    function DelCode($code){
        $this->db->delete($this->table,[
            "code" => $code,
            "LIMIT" => 1
        ]);
    }
}