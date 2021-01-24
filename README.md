# captcha - PHP
This captcha code is very simple and easy to use. it's made two random numbers and asks the user to calculate the sum or subtraction.
# Methods:
1. makecaptcha()

2. checkcaptcha(string)
# Description

makecaptcha():
This method generates captcha and return string that the user will see. Also, you can store strcode string into session, DB etc.
If want use checkcaptcha method you should store 'strcode' in $_SESSION['stcode'].
                                          
   
checkcaptcha(string):
          
This method validates user input and return binary value. For using this method you should store 'strcode' into $_SESSION['stcode'] or
you can change the name of the variable.

![picture alt](https://raw.githubusercontent.com/rezajafari2a/captcha/master/Capture.PNG "کپچا فارسی")
