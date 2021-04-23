<form action="" method="post">
    <table>
        <tr>
            <td>Enter your First number: </td>
            <td><input type="number" name="num1"/></td>
        </tr>
         <tr>
            <td>Enter your second number: </td>
            <td><input type="number" name="num2"/></td>
        </tr>
         <tr>
           <td></td>
            <td><input type="submit" name="calculate" value="Calculation"/></td>
        </tr>
    </table>
</form>
<?php
if(isset($_POST["calculate"])){
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    echo $num1;
    echo "<br>";
    echo $num2;
    echo "<br>";
    if(empty($num1)or empty($num2)){
        echo "<span style='color:red'>Feild must be required.</span>";
    }
     $cal = new Calculation;
    $cal->add($num1, $num2);
     $cal->sub($num1, $num2);
     $cal->mul($num1, $num2);
     $cal->div($num1, $num2);
}
?>
<?php
class Calculation{
    function add($a, $b){
        echo "Summation = ".($a+$b)."<br>";
    }
    function sub($a, $b){
        echo "Substraction = ".($a-$b)."<br>";
    }
    function mul($a, $b){
        echo "Multiplication = ".($a*$b)."<br>";
    }
    function div($a, $b){
        echo "Division = ".($a/$b)."<br>";
    }
}
   
?>