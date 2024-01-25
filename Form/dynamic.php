<?php
function insert($table_name,$data){
     $columns=$value[];
    foreach ($data as $key => $value) {
        $columns[] ="`$key`";
        $value[] ="'".addslashes{$val}."'";
    }
    $columns = implode(",",$columns);
    $value = implode(",",$value);
    echo "INSERT INTO {$table_name}({$columns} 
            VALUES({$values}))";

// function insert($table_name,$data){
//     $columns=$value[];
    
//    foreach ($data as $key => $value) {
//        $columns[] ="`$key`";
//        $value[] ="'".addslashes{$val}."'";
//    }
function update($t,$d=[],$where=[]){
    $columns=$where=[]

    foreach ($d as $field => $value) {
        $columns[]="`{$field}` = `{$value}`";
    }
    foreach ($where as $field => $value) {
        $wherefiel[]="`{$field}` = `{$value}`";
    }

    $columns = implode(",",$columns)
    echo "UPDATE {$table_name}  SET {$columns}  WHERE {$whereCon}  & ";
}
update("cvh",['pan'=>'ram','type'=>'typedata'],['id'=>1,'email'=>'@'])



}
insert("ABC",$_POST[group1]);

//addslases
?>