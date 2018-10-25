
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <style>
table {
    
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 70%;
    position: 400;
    left: 500px;
    top: 100px; 
}

table td,  th {
    border: 1px solid #ddd;
    padding: 10px;
}

table tr:nth-child(even){background-color: #ccc;}

table tr:hover {background-color: #ddd;}

table th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
    </style>
    </head>
    <body>
 
    
    <?php

        class student{
                public $name;
                public $surname;
                

                function __construct($name,$surname)  {
                    $this->name=$name;
                    $this->surname=$surname;

                }
                
                function GetName(){
                    return $this->name;
                }
                function SetName(){
                    $this->name=$name;
                }

                function GetSurname(){
                    return $this->surname;
                }
                function SetSurname(){
                    $this->surname=$surname;
                }

                public function printStudentData(){
                    echo $this->name."--".$this->surname."\n";
                 }
                

                /*
                public function printInfo(){
                    echo "<h1>".__CLASS__."</h1>";
                    echo "<p>". n12br($this=>__toString())."<p>";
                }/* */
            }
            

        
        $Student1=new Student("Nkolai","Ivanov");
        $Student2=new Student("Artur","Baglai");
        $Student3=new Student("Anna","Mazatshuk") ;
        $Student4=new Student("Bogdan","Nikolaev");
        /*
        echo $Student1->printStudentData(); echo "<br>";
        echo $Student2->printStudentData();echo "<br>";
        echo $Student3->printStudentData();echo "<br>";
        echo $Student4->printStudentData();echo "<br>";
        /** */
        class Subject{
            public $SubjectCode;
            public $subjectNameEst;
            public $subjectNameEng;
            public $subjectEAP;
            public $lecturer;    
            public $lecturersLanguageofInstruction;
            public $hindmeetod;
            public $students = array();
           
                function __construct($SubjectCode,$subjectNameEst,$subjectNameEng,$subjectEAP, $lecturer,$lecturersLanguageofInstruction ,$hindmeetod,$students)  {
                    $this->SubjectCode=$SubjectCode;
                    $this->subjectNameEst=$subjectNameEst;
                    $this->subjectNameEng=$subjectNameEng;
                    $this->subjectEAP=$subjectEAP;
                    $this->lecturer=$lecturer;
                    $this->lecturersLanguageofInstruction=$lecturersLanguageofInstruction;
                    $this->hindmeetod=$hindmeetod;
                    $this->students=$students;

                }  
                
                
                function GetSubjectCode(){
                    return $this->SubjectCode;
                }
                function SetSubjectCode(){
                    $this->SubjectCode=$SubjectCode;
                }

                function GetSubjectNameEst(){
                    return $this->subjectNameEst;
                }
                function SetSubjectNameEst(){
                    $this->subjectNameEst=$subjectNameEst;
                }

                function GetSubjectNameEng(){
                    return $this->subjectNameEng;
                }
                function SetSubjectNameEng(){
                    $this->subjectNameEng=$subjectNameEng;
                }

                function GetSubjectEAP(){
                    return $this->subjectEAP;
                }
                function SetSubjectEAP() {
                    $this->subjectEAP=$subjectEAP;

                }

                function Getlecturer(){
                    return $this->lecturer;
                }
                function Setlecturer(){
                    $this->lecturer=$lecturer;
                }
                function GetlecturersLanguageofInstruction(){
                    return $this->lecturersLanguageofInstruction;
                }
                function SetlecturersLanguageofInstruction(){
                    $this->lecturersLanguageofInstruction=$lecturersLanguageofInstruction;
                }

                function GetHindmeetod(){
                    return $this->hindmeetod;
                }
                function SetHindmeetod(){
                    $this->hindmeetod=$hindmeetod;
                }

                function Getstudents(){
                    return $this->students;
                }
                function Setstudents(){
                    $this->students=$students;
                }
               
      
        }
       
       $Subject1=new Subject("RAH0012","Multimeedia","Multimedia",5,"Natalja Maksmova","estonian","arvestus",[$Student1,$Student2]);
       $Subject2=new Subject("RAM0978","Matemaatika","Maths",5,"Monika Janis","russian","Eksam",[$Student3]);
       $Subject3=new Subject("RAR0123","muusika","Music",3,"Andrei Ivanov","inglise","hind",[$Student4,  $Student1,$Student2,$Student3]);
       
       
       if ($_REQUEST['id'] ==1){
        

        $subjCode= $Subject1->SubjectCode;
        $subjNameEst = $Subject1->subjectNameEst;
        $subjNameEng = $Subject1->subjectNameEng;
        $subjectEAP =  $Subject1->subjectEAP;
        $lecturer =  $Subject1->lecturer;
        $lecturersLanguageofInstruction = $Subject1->lecturersLanguageofInstruction;
        $hindmeetod= $Subject1->hindmeetod;
        $students=$Subject1->students;


       } else if ($_REQUEST['id']==2){
        
        

        $subjCode= $Subject2->SubjectCode;
        $subjNameEst = $Subject2->subjectNameEst;
        $subjNameEng = $Subject2->subjectNameEng;
        $subjectEAP =  $Subject2->subjectEAP;
        $lecturer =  $Subject2->lecturer;
        $lecturersLanguageofInstruction = $Subject2->lecturersLanguageofInstruction;
        $hindmeetod= $Subject2->hindmeetod;
        $students=$Subject2->students;
       } else if ($_REQUEST['id']==3) {
        
       

        $subjCode= $Subject3->SubjectCode;
        $subjNameEst = $Subject3->subjectNameEst;
        $subjNameEng = $Subject3->subjectNameEng;
        $subjectEAP =  $Subject3->subjectEAP;
        $lecturer =  $Subject3->lecturer;
        $lecturersLanguageofInstruction = $Subject3->lecturersLanguageofInstruction;
        $hindmeetod= $Subject3->hindmeetod;
        $students=$Subject3->students;
        
        
       }

    ?> 

                <table>
         
            <tr>
            <th>Aine kood</th>
            <th>Aine nimitus  Est</th> 
            <th>Aine nimitus Eng</th>
            <th>EAP</th>
            <th>Õppejõud</th>
            <th>keel</th>
            <th>hindmeetod</th>
            <th>tudengid</th>
        </tr>
        <?php foreach ($students as $stud): ?>
        <tr>
            <td><?=$subjCode?></td>
            <td><?=$subjNameEst?></td>
            <td><?=$subjNameEng?></td>
            <td><?=$subjectEAP?></td>
            <td><?=$lecturer?></td>
            <td><?=$lecturersLanguageofInstruction?></td>
            <td><?=$hindmeetod?></td>
            
            <td><?php echo $stud->GetName(); echo" ";echo $stud->GetSurname();?></td>

        </tr>
        <?php endforeach; ?>
        </table>
       
        
    
        </body>

</html>
