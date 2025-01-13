<h2>IMPORTANT: Download the correct 7zip release for each chapter and don't click the source code zip as it gives you the github repo's code that I still regularly update/break</h2>
  
For 7zip you can install nanazip: https://apps.microsoft.com/detail/9n8g7tscl18r?hl=nl-NL&gl=NL
  
**PHP version:** 8.3
**Laravel Version:** 11
**Composer Version:** 2.8.1
**NPM Version:** 22
  
1. ```composer install```
2. ```npm install```
3. edit .ENV file if needed
4. turn on MySQL localhost
5. ```php artisan migrate:fresh --seed```
6. ```php artisan serve```
7. ```npm run dev```
8. visit http://127.0.0.1:8000/

**For people that don't know how to properly set-up a development environment:**
Laravel Migration Error: Syntax error or access violation: 1071 Specified key was too long; max key length is 767 bytes.
 Stack Source: https://devdojo.com/thinkverse/getting-started-with-tall-stack
