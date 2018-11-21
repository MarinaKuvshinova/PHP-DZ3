<div class="container">
<table class="table table-striped">
    <tr>
        <th scope="col">login</th>
        <th scope="col">password</th>
        <th scope="col">email</th>
    </tr>
    <?php
        $fp = fopen("users.txt","r");
        $arr=[];
        while(!feof($fp)) {
            $arr[] = fgets($fp);
        }
        fclose($fp);
        for($i=0; $i<count($arr); $i++)
        {
            $arr2=[];
            echo "<tr>";
            foreach (explode(":", $arr[$i]) as $item){
                echo "<td>$item</td>";
            }
            echo "</tr>";
        }
    ?>
</table>
</div>
