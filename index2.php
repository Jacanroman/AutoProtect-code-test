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
        <h2 class="text-center">See in bold  the square values</h2>
		<hr />
        <div class="row">
            <div class="container h-100">
                <div class="row h-100 justify-content-center align-items-center">
                    <form class="col-3" method="post">
                        <div class="form-group">
                            <label for="header_no" class="col-sm-6 control-label">Header row:</label>
                            <div class="col-sm-12">
                                <input type="number" class="form-control" min="1" name="header_no" placeholder="ie 12" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="column_no" class="col-sm-6 control-label">Header column:</label>
                            <div class="col-sm-12">
                                <input type="number" class="form-control" min="1" name="column_no" placeholder="ie 12" required>
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
                // whether a variables are set on the form
                if(isset($_POST['header_no'], $_POST['column_no']) ){

                    if ($_POST['header_no'] > 12 || $_POST['column_no'] > 12) {
                
                        echo'<h2 class="text-center">The numbers cannot be more than 12 and you introduced the numbers:',$_POST['header_no'],' and ',$_POST['column_no'],'</h2>';
                    }else{
                    
                        //Start the table and we add styles with the class on Bootstrap
                        echo "<table class='table table-bordered border-primary'>";
                            

                            $rows = $_POST['header_no'];
                            $cols = $_POST['column_no'];
                        
                        //loop for the numbers in the rows
                        for ($r =1; $r <= $rows; $r++){
                        //start a table row for each row that we introduced
                        echo('<tr>');
                            //loop for the numbers in the columns
                            for ($c = 1; $c <= $cols; $c++)
                                //to add the bold I added a conditional if both numbers are the same
                                if ($r === $c){
                                //add a table col for each number.
                                echo('<td class="text-center fw-bold">'.$c*$r.'</td>'); 
                                }else{
                                //if both numbers aren't the same I added the class to center the text
                                echo( '<td class="text-center" >' .$c*$r.'</td>');
                                } 
                            echo('</tr>');
                        }
                    
                        echo("</table>");
                    }
                }
            ?>
        </div>





    </div>
    
</body>
</html>