### Platform Requirement
- Mysql ~5.6
- PHP ~7.*
### Installation
```
git clone https://github.com/camilo-nguyen-goldenowl/YiiProject.git
cd YiiProject
composer install
```

### Start project
``` php yii serve --port PORT (ex: 80)```


### Migration Database
Before Migrating database we need to config connection to Database Server in file
``` RootProject/config/db.php ```
``` php yii migrate ```
