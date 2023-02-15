<?php 

    $name = "alamin";
    $id = 123;
    $cgpa = 3.6;

    //$student = array(1, 'alamin', 3.5);
   // $student = [1, 'alamin', 3.5];
    //$student[0];
    // $students = [
    //                 [1, 'alamin', 3.4],
    //                 [2, 'xyz', 4],
    //                 [3, 'PQR', 2.5]
    //             ];
    // $students[2][2];
    $student = ['id'=>1, 'name'=>'alamin', 'cgpa'=>3.5];
    //$student['cgpa'];
    $students = [
                    's1'=>['id'=>1, 'name'=>'alamin', 'cgpa'=>3.5],
                    's2'=>['id'=>2, 'name'=>'xyz', 'cgpa'=>3.4],
                    's3'=>['id'=>3, 'name'=>'abc', 'cgpa'=>3],
                    's4'=>['id'=>3, 'name'=>'abc', 'cgpa'=>3],
                    's5'=>['id'=>3, 'name'=>'abc', 'cgpa'=>3],
                    's6'=>['id'=>3, 'name'=>'abc', 'cgpa'=>3],
                    's7'=>['id'=>3, 'name'=>'abc', 'cgpa'=>3]
                ];
    // $students['s1']['name'];

    // function sum($a=0, $b=0){
    //     return $a+$b;
    // }
    // sum();

    // for($i=0; $i<10; $i++){

    // }

    echo "<table border=1>
                <tr>
                    <td>ID</td>
                    <td>NAME</td>
                    <td>CGPA</td>
                </tr>";

    foreach($students as $s){
        echo    "<tr>
                    <td>{$s['id']}</td>
                    <td>{$s['name']}</td>
                    <td>{$s['cgpa']}</td>
                </tr>";
    }
    echo "</table>";
    
    // while(){

    // }

    // if(){

    // }else{
        
    // }

    //echo "Hello PHP";
    //print($name);
    //print_r($student);
?>

<h1>Test </h1>


<table border="1">
        <tr>
            <td>ID</td>
            <td>NAME</td>
            <td>CGPA</td>
        </tr>
        <?php foreach($students as $s){ ?>
        <tr>
            <td><?php echo $s['id']?></td>
            <td><?=$s['name']?></td>
            <td><?=$s['cgpa']?></td>
        </tr>

        <?php } ?>
</table>