# Collatz Problem

The following iterative sequence is defined for the set of positive integers:

n ? n/2 (n is even)
n ? 3n + 1 (n is odd)

Using the rule above and starting with 13, we generate the following sequence:

13 ? 40 ? 20 ? 10 ? 5 ? 16 ? 8 ? 4 ? 2 ? 1
It can be seen that this sequence (starting at 13 and finishing at 1) contains 10 terms. Although it has not been proved yet (Collatz Problem), it is thought that all starting numbers finish at 1.

Which starting number, under one million, produces the longest chain?
 
### Set up instructions
  1. Clone this project in your webserver's root directory

### User manual for command line execution 
	1. Open your terminal

	2. Go to your workspce using below command
	 ``` 
	     CD /path_to_your/clone_directory
 	 ```

	3. Execute the program
	 ``` 
	    php  CollatzProblem/CollatzProblem.php {{range}}
 	 ```
	Note :- replace {{range}} with 1000000 to get starting number which produce the longest chain under 1 million.

	4. Wait For a 60 to 70 seconds to get result

### User manual for browser execution 
	1. Open your browser

	2. Execute Below URL
	 ``` 
	     http://your_domain_name/CollatzProblem/CollatzProblem.php/{{range}}
 	 ```
	Note :- replace {{range}} with 1000000 to get starting number which produce the longest chain under 1 million.

	3. Wait For a 60 to 70 seconds to get result
