<!DOCUTYPE html>
<html>
    <head>
    </head>
    <body>
      じゃんけんゲーム<br />
        好きな手をクリックしてね！<br />
    <?php
        
        $jankenArray = array("グー","チョキ","パー");
        $key = array_rand($jankenArray,1);

        if(isset($_POST['rock'])) {
            echo "自分："."グー"."　"."相手：".$jankenArray[$key];
            if($jankenArray[$key] =="グー"){
                echo "<br>";
                echo "結果：あいこ";                
            } else if ($jankenArray[$key] == "パー"){
                echo "<br>";
                echo "結果：まけ";
            } else{
                echo "<br>";
                echo "結果：かち";
            }
        } else if(isset($_POST['scissors'])) {
            echo "自分："."チョキ"."　"."相手：".$jankenArray[$key];
            if($jankenArray[$key]== "グー"){
                echo "<br>";
                echo "結果：かち";                
            } else if ($jankenArray[$key] == "パー"){
                echo "<br>";
                echo "結果：まけ";
            } else{
                echo "<br>";
                echo "結果：あいこ";
            }
        } else if(isset($_POST['paper'])){
            echo "自分："."パー"."　"."相手：".$jankenArray[$key];
            if($jankenArray[$key] == "グー"){
                echo "<br>";
                echo "結果：かち";                
            } else if ($jankenArray[$key] == "パー"){
                echo "<br>";
                echo "結果：あいこ";
            } else {
                echo "<br>";
                echo"結果：まけ";
            }
        } else{
            echo "";
        }
    ?>

  
        <form action = "janken.php" method="post">
            <input type ="submit" name ="rock" value ="グー"　/>
            <input type ="submit" name ="scissors" value ="チョキ"　/>
            <input type ="submit" name ="paper" value ="パー"　/>
        </form>

    </body>
</html>