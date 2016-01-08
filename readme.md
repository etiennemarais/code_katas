# code_katas
This repo contains exercises and katas I use to stay in shape.

I will continue to keep adding katas that I have done to this repo, and hoppefully they will start changing from PHP to other languages as I continue to learn.

# Non Decreasing sub sequences Kata
  
## Problem Statement

Implement a function that, given a sequence of numbers such as:

    [ 3,6,61,6,7,9,1,7,7,2,7,7,2,388,3,72,7 ]

... will identify and return each contiguous sub-sequence of non-decreasing numbers. E.g. this example input should return this array-of-arrays (e.g. or list-of-lists)

    [ [3,6,61],[6,7,9],[1,7,7],[2,7,7],[2,388],[3,72],[7] ]
    
### Edge Cases

You will rarely get valid input from users, What do you do with invalid or emtpy values?
    
### Tests

Included in this package is PHPUnit and PHPSpec, you may choose any of the two.