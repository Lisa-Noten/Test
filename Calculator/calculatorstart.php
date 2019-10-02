<html>
<body>
    <?php
    $num1   = 0;
    $num2   = 0;
    $total  = 0;
    $option = "";
     $error  = "";

    if (isset($_GET['submit']))
        {

     $num1   = $_GET['num1'];
    $num2   = $_GET['num2'];
    $option = $_GET['choice'];
    if (is_numeric($num1) && is_numeric($num2))
        {


    if ($option == 'plus')
    {
    $total = $num1 + $num2;
    }
    if ($option == 'minus')
    {
    $total = $num1 - $num2;
    }
    if ($option == 'divide')
    {
    $total = $num1 / $num2;
    }
    if ($option == 'multiply')
    {
     $total = $num1 * $num2;
    }
    if ($option == 'power')
    {
     $total = pow($num1, $num2);
    }
    if ($option == 'square root')
    {
    $total = sqrt($num);
    }
    }
    else {
        $error = "Only numbers";
        echo $error; 
        echo $total; } }


    
    ?>

    

    <form method="get">
    <input type="text" name="num1">
    <select name="choice">
        <option value="plus">+</option>
        <option value="minus">-</option>
        <option value="divide">:</option>
        <option value="multiply">*</option>
        <option value="power">Power</option>
    </select>
    <input type="text" name="num2">
    <input type="submit" name="submit">
    </form>
</body>

</html>