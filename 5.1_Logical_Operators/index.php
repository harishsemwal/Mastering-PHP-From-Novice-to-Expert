<?php

# Logical Operator
# 1. and : and
# 2. or : or
# 3. && : and
# 4. || : or
# 5. ! : not


# 1. and
$a = 10;
$b = 20;
$c = 30;

if($a < $b and $b < $c){
    echo "True";

}else{

    echo "False";

}


# 2. or 
if($a < $b or $b > $c){
    echo "True";
}else{
    echo "False";
}

# 3. &&

if($a < $b && $b < $c){
    echo "True";
}else{
    echo "False";
}

# 4. ||
if($a < $b || $b > $c){
    echo "True";
}else{
    echo "False";
}

# 5. !  

if(!($a < $b)){
    echo "True";
}else{
    echo "False";
}


?>