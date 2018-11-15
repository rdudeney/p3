## P3 Peer Review

+ Reviewer's name: Stephen Dudeney
+ Reviwee's name: Jared S
+ URL to Reviewee's P3 Github Repo URL: *<https://github.com/jessupjs/p3>*


## 1. Interface

The interface is very impressive. The design of the background is vibrant and eye catching, the instructions are clear and the form is user friendly. Between the description on the right side of the screen and the text moving swiftly past the background as the user scrolls down, the user can understand what the interface is designed to demonstrate. The form is straightforward, with clear instructions that lead the user to start experimenting with the formatting of the interface. The program gives the user enough control that through experimentation, they can understand how changing values affects the formatting. There is a lot of technical information displayed in the interface which is useful when the user is trying to understand and evaluate the code.

It took this user a while to understand how to control the graphic effects. A more detailed description of the Parallax effect would have been helpful, outlining, for example, that the effect is driven by the inverse relationship between the Z-position of the background and it's Scale. The description refers to "manipulating the perspective", but the user would have benefited from a more detailed explanation.

It may have been useful as well to give the user control over other aspects of the interface. For example, the z values and top position are calculated by the program, not inputted by the user. If user could have made the top position the same for all the backgrounds, then observed as each passed the other as the interface scrolled down, this may have illustrated Parallax scrolling more effectively. 

## 2. Functional testing

The user tried the following:
+ Submitting the form with no data: the fields turned red
+ Submitting the form with partial data: blank field turned red
+ Submitting the form with a decimal: program functioned, as long as the number was within the parameter values. If the decimal number was too long a error message popped up indicating the next closest acceptable number. 
+ Submitting the form with a negative number: data disappeared, the field turned red
+ Submitting letters and/or symbols: The program did not allow, apart from the decimal point. Repeated decimal points elicited a pop up error message requesting a number be entered in form.  
+ Submitting with a large number: values outside parameters disappeared, and the field turned red.
+ The form automatically removed zeros from the front and back of the number
+ The Fallback route returned the user to the index page, which is a nice touch.
+ Reverting to the default formatting if incorrect information is entered into the fields is also a nice touch. 

## 3. Code: Routes

The route file does not include code that should be happening in the Controller.

## 4. Code: Views

Template inheritance is used and there are no separation of concern issues. Nothing is done in PHP that could have been done in Blade. There are no Blade techniques that the user is not familiar with. 

## 5. Code: General

There are no inconsistencies between the code and the course notes generally. The code is well organized. 

This user did not immediately understand what was going on with the code. More detailed comments and at least one set of more descriptive variable names would have assisted this user in understanding the code. The user was able to understand the inverse relationship between the Z-position and the Scale by observing the data displayed on the interface. This was useful. This user would have benefited from more explanation.


## 6. Misc
The programmer clearly has great understanding of Parallax scrolling, and great skill in creating a useful demonstration interface. 