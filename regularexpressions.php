PCRE : version of Regex(regular expression)

<?php
/*

/ regex here between forward slashes /

*/

#   preg_match(string $pattern, string $sub [, array &$matches]);
//$pattern -> regex
//$subject -> what you're trying to find
//return  int 1 found it
//        int 0 didn't find it
//        FALSE error


#   preg_match_all(string $pattern, string $subject [, array &$matches])
//returns int number of matches
//        FALSE error