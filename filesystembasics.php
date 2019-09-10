<?php

#   fopen(string $filename, string $mode, ...): resource
//It opens a file by creating a resource handler(stream->connection)
//If it doesn't exist, create it

#   $modes (second param)
//r : readonly
//r+ : read and write from beginning of file
//w : write after deleting all content
//a : append to the end of the file
//and so on.


#   fgets(resource $handler [,...])
//returns a single line from the file and moves pointer(position), returns just one line.
//you need to do fopen() first to do fgets()
//you pass resource you get from fopen() and pass it into fgets()


#   fread(resource $handler, int $length):string
//reads from the file until :
//                          -length reached
//                          -end of file
//                          -connection lost
// $length (second param) -> bytes


#   fwrite(resource $handler, string $whatToWrite)
//write to the file
//if it's "r" (readonly) mode, you cannot use this.


#   fclose(resource $handler):bool
//closes commits stuff you have written


#   file_get_contents() -> fopen(), fread(), fclose()
#   file_put_contents() -> fopen(), fwrite(), fclose()
#   file_exists() -> returns true or false
#   fileatime() -> last time file was edited
