<?
  class Refresh{
    private $CI;
      public function __construct(){
          $this->CI =& get_instance();
      }

    public function rp(){
        $this->CI->load->model('supervisor');
        $ids = $this->CI->supervisor->getSingleId();
        $district = $this->CI->supervisor->getDistrict();
        $data['id'] = $this->randomId($ids);
        $data['district'] = $district;
        $data['all'] = $this->allDistrict();
        $this->CI->load->view('add',$data);
    }

    public function allDistrict(){
        $str = '';
        $this->CI->load->model('supervisor');
        $value = $this->CI->supervisor->getDistrict();
        foreach($value as $val):
            $str.=$val->districtId . ') '. $val->districtName.'<br>';
        endforeach;
        return $str;
    }
    public function randomId($ids){
        $count = $this->countId($ids);
        $arr = $this->makeArray($ids);
        $random = rand(1,10);
        for($i=0;$i<$count;$i++){
            if($count == 10){
                return null;
                break;
            }
            else if($random == $arr[$i]){
                $random = rand(1,10);
                $i=-1;
             }
        }
        return $random;
    }
    public function countId($ids){
        $count = 0;
        foreach($ids as $id):
            $count ++;
        endforeach;
        return $count;
    }
    public function makeArray($ids){
        $varArray = array();
        foreach($ids as $id):
            $old = $id->supervisorId;
            array_push($varArray,$old);
         endforeach;
         return $varArray;
    }

  }
?>
