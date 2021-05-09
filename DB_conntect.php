<?php 


class DBcontrroler{
    public function DB(){
        return  mysqli_connect('localhost','root','','dropdown');
    }
    public function runQuery($query){
        
        $result = mysqli_query($this->DB(),$query);
        while($content = mysqli_fetch_assoc($result)){
            $resultset[] = $content;
        }
        if(!empty($resultset))
            return $resultset;
        
    }


    public function nurRows($jquery){
        $result = mysqli_query($this->DB(),$query);
       $content_count = mysqli_num_rows($result);
            return $content_count;
        
    }


}

?>