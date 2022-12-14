<html>  
    <head>  
    <title>Dynamic Drop Down List</title>  
    </head>  
    <BODY bgcolor ="blue">  
        <form id="form1" name="form1" method="post" action="<?php echo $PHP_SELF; ?>">  
            Employee List :  
            <select Emp Name='NEW'>  
            <option value="">--- Select ---</option>  
            <?  
                mysql_connect ("localhost","root","");  
                mysql_select_db ("crud_db");  
                $select="company";  
                if (isset ($select)&&$select!=""){  
                $select=$_POST ['NEW'];  
            }  
            ?>  
            <?  
                $list=mysql_query("select * from company order by id asc");  
            while($row_list=mysql_fetch_assoc($list)){  
                ?>  
                    <option value="<? echo $row_list['id']; ?>"<? if($row_list['id']==$select){ echo "selected"; } ?>>  
                                         <?echo $row_list['name'];?>  
                    </option>  
                <?  
                }  
                ?>  
            </select>  
            <input type="submit" name="Submit" value="Select" />  
        </form>  
    </body>  
</html>  