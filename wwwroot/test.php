<?php

    $pid = pcntl_fork();
    if($pid == -1){
        echo "child".PHP_EOL;
    } elseif($pid){
        $ppid = posix_getpid();
        echo "parnet--".$ppid.PHP_EOL;
    } else {
        $pid = posix_getpid();
        $ppid = posix_getppid();
        echo "parnet--{$ppid}child--".$pid.PHP_EOL;
    }


//等待子进程结束
while(pcntl_waitpid(0, $status) != -1){
    echo "child over".PHP_EOL;
}

//所有子进程结束
echo "parnet over".PHP_EOL;