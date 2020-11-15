## Code review

Please review the sample code, as if it was submitted as a PR by a junior team member.
You are the owner of the component this functionality belongs to and are responsible for the results.

- Would it be safe to go into production?
	[Mubashar Ali] No, with given sample code. 
		It's not good practice to declare classes and create instances in a same file. Use separate files just for defining classes.
		There is no separation of concerns. Everything is put in one function.	
		No Encapsulation of the data.
		No Error Handling
		No documentation.
		No coding standards.		
		
- Does it follow best practices?
	[Mubashar Ali] No, It doesn't. 
	
- How could we verify that it's always working as intended?
	[Mubashar Ali] By writing and executing the Test Cases, we ensure that it's working as intented.

## Refactoring

Refactor the code to meet best practices and modern coding standards.
	[Mubashar Ali] Please refer to the entry point (index.php). 
	*Note:* Switch block can be further refactored if the 'case' is dynamic by using array.
