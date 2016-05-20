# recaptcha
## Sample demo of Google reCAPTHA

This code was made to help you understand how Google reCAPTCHA works.

For start, you need register your site at this [link](https://www.google.com/recaptcha/admin#createsite).

1. Then get the Site Key, and change the line 14 in index.html.

> <div class="g-recaptcha" data-sitekey="~~{{ YOUR SITE KEY }}~~"></div><br>

2. And then put your Secret Key changind the value of $secret_key variavle in actoion.php file, this variable is located at line 13.

> $secret_key = "~~{{ YOUR SECRET KEY }}~~";

3. That's it, try it.

If you need more information, please check links bellow:

- [Official site](https://developers.google.com/recaptcha)
- [Official docs](https://developers.google.com/recaptcha/docs/start)