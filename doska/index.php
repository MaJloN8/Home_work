<html>
<head>
    <title>Doska</title>
	<style>
	.table {
   border: 2px solid black;
		}
		.table td {
   border: 2px solid black;
		}
	</style>
</head>
<body>
    <table class="table" >
	
        <?php 
		$aplhabet = array("A", "B", "C", "D", "E", "F", "G", "H","A", "B", "C", "D", "E", "F", "G", "H");
            $numbers = array("8", "8", "7", "7", "6", "6", "5", "5", "4", "4", "3", "3", "2", "2", "1", "1");
            $alpha = -1;
            $nums = -1;
			
            for($row=0;$row<10;$row++)
            {
                echo "<tr>";
                for($col=0;$col<10;$col++)
                {
                    if($row==0 or $row==9)
                    {
                        if($col==0 or $col==9){
                            echo "<td height=50px width=50px bgcolor=#AAA></td>"; //Крайний правый верхний и нижный квадрат
                        }
                        else{
                            $alpha++;
                            echo "<td height=50px width=50px bgcolor=#FFF align='center'>$aplhabet[$alpha]</td>"; //остальная верхняя строчка 
                        }
                    }
                    else{
                        if($col==0 or $col==9){
                            $nums++;
                            echo "<td height=50px width=50px bgcolor=#FFF align='center'>$numbers[$nums]</td>"; //боковые стороны
                        }
                        elseif($row%2 != 0) {
                            if($col%2 != 0){
                                echo "<td height=50px width=50px bgcolor=#b0a772></td>"; // 1,3,5,7 столбец
                            }
                            else{
                                echo "<td height=50px width=50px bgcolor=#2b2502></td>"; // 2,4,6,8 столбец
                            }
                        }
                        elseif($row%2 == 0){
                            if($col%2 == 0){
                                echo "<td height=50px width=50px bgcolor=#b0a772></td>"; //1,3,5,7 строка
                            }
                            else{
                                echo "<td height=50px width=50px bgcolor=#2b2502></td>"; // 2,4,6,8 строка
                            }
                        }
                    }
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>