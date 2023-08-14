<?php

mkdir("abc"); // create dir
rmdir("abc"); // remove dir

@chmod("file.txt", 677); // change file permission

@unlink("test.txt");

// @ - to suppress the warning message
