## P3 Peer Review

+ Reviewer's name: Stephen Dudeney
+ Reviwee's name: Jared S
+ URL to Reviewee's P3 Github Repo URL: *<https://github.com/jessupjs/p3>*

*Answer the following questions in regards to the student's project you are reviewing. REMOVE THE INSTRUCTIONS FOR EACH PROMPT when complete. We should only see YOUR ANSWERS.*

## 1. Interface
Address as many of the following points as applicable:

The interface is very impressive. The design of the background is vibrant and eye catching, the instructions are clear and the form is user friendly. Between the description on the right side of the screen and the text moving swiftly past the background as the user scrolls down, the user quickly understands what the interface is designed to demonstrate. The form itself is straightforward, with clear instructions that lead the user to start experimenting with the formatting of the screen. The program gives the user enough control that through experimentation, they begin to understand how changing values affects the formatting. There is a lot of technical information displayed in the interface which is useful when the user tries to understand and evaluate the code.
 
## 2. Functional testing

The user tried the following:
+ Submitting the form with no data: the fields turned red
+ Submitting the form with partial data: blank field turned red
+ Submitting the form with a decimal: program functioned, as long as the number was within the parameter values. If the decimal number was too long a error message popped up indicating the next closest acceptable number. 
+ Submitting the form with a negative number: data disappeared, the field turned red
+ Submitting letters and/or symbols: The program did not allow, apart from the decimal point. Repeated decimal points elicited a pop up error message requesting a number be entered in form.  
+ Submitting with a large number: values outside parameters disappeared, and the field turned red.
+ The form automatically removed zeros from the front and back of the number
+ The Fallback route returned the user to the index page, which was a nice touch.

## 3. Code: Routes

The route file did not include did not include code that should be happening in the Controller.

## 4. Code: Views
Skim through the View files in `/resources/views` and address as many of the following points as applicable:

Template inheritance is used and there are no separation of concern issues. Nothing was done in PHP that could have been done in Blade. There were no Blade techniques that the user was not familiar with. 

## 5. Code: General
Address as many of the following points as applicable:

+ Do you notice any inconsistencies between the code and the course notes on [code style](https://github.com/susanBuck/dwa15-fall2018/blob/master/misc/code-style.md)?
+ Are there any best practices discussed in course material that you feel were not addressed in the code?
+ Are there aspects of the code that you feel were not self-evident and would benefit from comments?
+ Are there any parts of the code that you found interesting/would not have thought to do yourself?
+ Are there any parts of the code that you don't understand?

## 6. Misc
Do you have any additional comments not covered in the above questions?