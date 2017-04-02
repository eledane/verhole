# Čti mě #

### Instalace ###

1. Naklonovat projekt
2. Composer install (je třeba mít php >= 5.5)
3. Bower install
4. npm install; (je třeba jen pro gulp)
5. Nastavit databázi (app/config/config.local.neon.template > config.local.neon a vyplnit údaje)
6. Nahrát dump prázdné databáze ze složky /sql
7. Nastavit virtual host
8. Hurey!

* Vytvoření dočasných složek `mkdir -p tmp/cache log`
* + jejich oprávnění `chmod -R 777 log tmp`

### Testování hledání ###

* `/search/?url={url-of-detail}` - dostupné jen v debug modu


### Pull na utdigit ###

1. ssh c19koupito-china@koupito-china.utdigit.com
2. heslo: KOFO VÍ (zeptat se jeho)
3. cd ../../web
4. git pull origin master
5. rm -rf temp/cache/*