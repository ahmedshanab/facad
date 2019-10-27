<?php 

interface Student {

	public function view();
}


class ItStudent implements Student{
	
	public function view(){
		echo "itStudent";
	}
	abstract function regCourse(){

	}
}


class ArtStudent implements Student {


    public function view() {
       echo "ART Student";
    }

}

 class EdeStudent implements Student {


    public function view() {
       echo"Education Student"; 
    }

}

public class EngStudent  implements Student{


    public function view() {
        echo"Eng Student";
        
        }

}


class StudentMaker {
	private Student $itStudent; 
	private Student $artStudnet;
    private Student $eduStudnet;
    private Student $engStudnet;

    private static StudentMaker $aMaker;

     public function __construct(){ 
    	$itStudnet = new ItStudent();
        $artStudnet = new ArtStudent();
        $engStudnet = new EngStudent();
        $eduStudnet = new EdeStudent();

    } 

    public function static  getaMaker(){
    	if($aMaker == null)
    		$aMaker = new StudentMaker();
    	return $aMaker; 
    }
    public function  viewIT(){
    	$this->itStudent->view();
    }
     public function viewART(){
        $this->artStudnet->view();
    }
    public function viewEng(){
        $this->engStudnet->view();
    }
    public function viewEdu(){
        $this->eduStudnet->view();
    }




}

StudentMaker $aMaker = StudentMaker->getaMaker();
        aMaker->viewART();
        aMaker->viewIT();
