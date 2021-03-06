<?php

    // 오름차순으로 버블 정렬하기
    $num= array(15,3,4,50,55,12,67,27,83,26);
    $count= 10;     // 배열의 원소 개수

    echo "정렬 전: ";
    for($i=0; $i<10; $i++){
        echo $num[$i]." ";
    }

    echo "<br>";

    for($i= $count-2; $i>=0; $i--){
        for($k=0; $k<=$i; $k++){
            if ($num[$k]>$num[$k+1]){ // 인접한 두 수 비교
                $tmp= $num[$k];       // 앞의 데이터를 $tmp에 잠시 대피
                $num[$k]=$num[$k+1];  // 뒤의 데이터를 앞의 배열 원소에 저장
                $num[$k+1]=$tmp;       // $tmp를 뒤의 배열 원소에 저장
            }
        }
    }

    echo "버블 정렬(오름차순) 후: ";
    for ($i=0; $i<10; $i++){ // 버블 정렬 후 배열의 원소 출력
        echo $num[$i]." ";
    }

?>