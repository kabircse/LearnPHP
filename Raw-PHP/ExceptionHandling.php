<?php
/*
    try: try lead the exception occurring code
    catch: catch section executed if try block code occurred an exception
    throw: throw used for manually triggering for an exception.
*/

try {
    print "this is our try block n";
    //throw new Exception();
} catch (Exception $e) {
    print "something went wrong, caught yah!";
} finally {
    print "this part is always executed n";
}