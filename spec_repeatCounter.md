spec title
###Repeat Counter



1. Input two strings and return an integer. 
	- input: "foo", "bar" 
	- output: 0

2. Input two strings, input one and two match, the returned integer is incremented to one.
	- input: "foo", "foo"
	- output: 1

3. Input two strings, input two has multiple words but only one match, the returned integer is incremented to one.
	- input: "foo", "foo bar"
	- output: 1

4. Input two strings, input two has multiple words and multiple matches, the returned integer is incremented to the same number of matches.
	- input: "foo", "foo bar foo"
	- output: 2

5. Input two strings, partial word matches do not increment to the returned integer
	- input: "foo", "foobar"
	- output: 0