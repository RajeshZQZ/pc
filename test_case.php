
<?php
echo 'test page';
echo 'hello kugouZ~!';
$age = 24;
$rand = rand(0,100);
echo 'rand=',$rand,' and age=24';
if ($rand > $age){
        echo "你输了~！";
}
        else{
        echo "你赢了~！";
        phpinfo();
}
?>