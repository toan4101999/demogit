    <?php
    class Person{
    public $age;
        public function __construct($initialAge)
        {
            if($initialAge>0){
         $this->age=$initialAge;
            }else{
                $this->age=0;
                echo "Age is not valid, setting age to 0.."."\n";
            }   
        }
        public function amlOld(){
            if($this->age<13){
                echo "You are young.."."\n";
            }elseif($this->age>=13 && $this->age<18){
                echo "You are a teenager.."."\n";
            }else{
                echo "You are old.."."\n";
            }
        }
       
        public  function yearPasses(){
            return $this->age++;
  
      }
    }
echo "hello world conflick";
 $Person1=new Person(-1);
 $Person1->amlOld();
 $Person1->yearPasses();   
    ?>
