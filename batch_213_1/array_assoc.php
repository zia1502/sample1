<?php 

  include('header.php');

?>


<main class="container">

    <div class="row">
        <div class="col-md-12">

            <style>
                .student_info{
                    padding: 10px;
                    margin: 5px;
                    float: left;
                    border: 1px solid black;
                }
            </style>

            <?php
            
                // associative array: 


                $single_student_info   =
                    [
                        'id'        =>  'ST0001',
                        'name'      =>  'Tanveer',
                        'email'     =>  'tanveer@gmail.com',
                        'contact'   =>  '0123456'
                    ];

                $student_info   =   (object)[
                    (object)[
                        'id'        =>  'ST0001',
                        'name'      =>  'Tanveer',
                        'email'     =>  'tanveer@gmail.com',
                        'contact'   =>  '0123456',
                        'address'   =>  [
                            'present_addr'  =>  'Tanveer ABC',
                            'permanent_addr'=>  'Tanveer PABC',
                        ]
                    ],
                    (object)[
                        'id'        =>  'ST0002',
                        'name'      =>  'Wazed',
                        'email'     =>  'Ahsun@gmail.com',
                        'contact'   =>  '0123456',
                        'address'   =>  [
                            'present_addr'  =>  'Wazed ABC',
                            'permanent_addr'=>  'Wazed PABC',
                        ]
                    ],
                    (object)[
                        'id'        =>  'ST0003',
                        'name'      =>  'Ahsun',
                        'email'     =>  'Ahsun@gmail.com',
                        'contact'   =>  '0123456',
                        'address'   =>  [
                            'present_addr'  =>  'Ahsun ABC',
                            'permanent_addr'=>  'Ahsun PABC',
                        ]
                    ]
                ];
                
                
                //echo $student_info[2]['name'];
                /*

                
                echo "Student ID: ".$student_info['id']."<br>";
                echo "Student Name: ".$student_info['name']."<br>";
                echo "Student Email: ".$student_info['email']."<br>";
                echo "Student Contact: ".$student_info['contact']."<br>";
            */

            foreach($student_info as $k=>$v){
                echo '<div class="student_info">';
                echo "Student ID: ".$v->id."<br>";
                echo "Student Name: ".$v->name."<br>";
                echo "Student Email: ".$v->email."<br>";
                echo "Student Contact: ".$v->contact."<br>";
                echo "Student Present Address: ".$v->address['present_addr']."<br>";
                echo "Student Present Address: ".$v->address['permanent_addr']."<br>";
                echo '</div>';
            }


            ?>


        </div>
    </div>

</main>


<?php 

  include('footer.php');

?>