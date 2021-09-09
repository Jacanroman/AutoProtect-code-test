<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Multiplication Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<body>
    <div class="container ">
        <h2 class="text-center">Generate Multiplication table</h2>
		<hr />
        <div class="row">
            <div class="container h-100">
                <div class="row h-100 justify-content-center align-items-center">
                    <form class="col-3" method="post">
                        <div class="form-group">
                            <label for="upper" class="col-sm-6 control-label">Upper Limit:</label>
                            <div class="col-sm-12">
                                <input type="number" id="upper" class="form-control" min="1" name="upper" value=100 required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="upto" class="col-sm-6 control-label"></label>
                            <div class="col-sm-12">
                                <input type="submit" class="form-control btn btn-primary" value="Show Table" />
                            </div>
                        </div>
                    </form>   
                </div>
            </div>
		</div>
        <hr />
        <div>
            <?php
            
            // whether a variables is set from the form
            if(isset($_POST['upper']) ){

              // check if the value on the field is bigger than 1000 in that case we add a message of error
              if ($_POST['upper'] > 1000) {
                
                echo'<h2 class="text-center">The number cannot be more than 1000 and you introduced the number:',$_POST['upper'],'</h2>';
              }else{
            
                echo "<table class='table table-bordered border-primary'>";
                  
                  /*
                  I shared the number that you can introduce between 10 because is the
                  numbers of column. IE. if someone type 550; 550/10(number en 1 row) = 55 the rows that we need.
                  
                  */
                  $rows = ceil($_POST['upper']/10);
                  
                  // I have this variable in order to change the numbers that can be show in every row
                  // ie if we have 5 we will have row with the sice of 5 numbers
                  //in that case the exercise says that we need 10 numbers per row.
                  $cols = 10;


                  $n=1;
                  for($n1=1; $n1<=$rows; $n1++){
                  echo "<tr>";
                    for($n2=1; $n2<=$cols; $n2++){
                    
                      //check if the number is prime, in that case this number will be in bold. 
                      if(primo($n)){
                        echo'<td class="text-center fw-bold">', $n, '</td>';
                      }else{
                        echo '<td class="text-center" >', $n, '</td>';
                      }

                      $n= $n+1;
                      }
                  echo "</tr>";
                  }
                
                echo("</table>");
              }

            }


            //this is the function to check if a number is prime
            function primo($num)
            {
                if ($num == 2 || $num == 3 || $num == 5 || $num == 7) {
                    return True;
                } else {
                    // check if the number is even
                    if ($num % 2 != 0) {
                        // check only if the number is odd
                        for ($i = 3; $i <= sqrt($num); $i += 2) {
                            if ($num % $i == 0) {
                                return False;
                            }
                        }
                        return True;
                    }
                }
                return False;
            }

            ?>
        </div>





    </div>
    
</body>
</html>