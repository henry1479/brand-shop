<?php
// limit нужно совмещать с where
// работа с pdo
$stm1 = $db->prepare('SELECT * FROM `testing` WHERE fname=?');
// массив вместо маркера
$stm1->execute(array('ivan'));
while($row=$stm1->fetch())
{
    print_r($row);
}

$stm2 = $db->prepare("SELECT * FROM `testing` WHERE id=:id");
for($id=1; $id<4; $id++) 
{
    // подставляем актуальные значения
    // $stm2->bindValue(':id',$id);
    $stm2 -> execute(['id'=>$id]);


    while($row = $stm2 -> fetch())
    {
        print_r($row);
    }
}


?>