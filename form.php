<pre>
<?php
//フォームの値受け取り
    $name = $_POST["name"];
    $read = $_POST["read"];
    $gender = $_POST["gender"];
    $address = $_POST["address"];
    $address_confirm = $_POST["address_confirm"];
    $tel = $_POST["tel"];
    $kind = $_POST["kind"];
    $content = $_POST["content"];
    
    if($name == false){
        echo "名前が入力されていません\n";
    }
    if($gender == false){
        echo "性別を選択してください\n";
    }
    if($address == false){
        echo "メールアドレスが入力されていません\n";
    }
    if($address == $address_confirm){
        echo "確認用メールアドレスが間違っています\n";
    }
    if($content == false){
        echo "問い合わせ内容が記入されていません\n";
    }
    
    echo $name."様\n";
    echo $read."様\n";
    echo $gender."\n";
    echo $address."\n";
    echo $address_confirm."\n";
    echo $tel."\n";
    echo $kind."\n";
    echo $content."\n";
?>
</pre>