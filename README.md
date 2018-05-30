# mekan

Mekan modülünü eklemek için öncelikle,

Portal klasörünün içerisindeki composer.json dosyasında gerekli yerlere şu satırları ekliyoruz;

############################

"repositories": [ { .... { "type": "vcs", "url": "https://github.com/Kesanli123/mekan.git" } ],

"require": {

....   
"kouosl/Mekan": "dev-master"
},

############################

Ekledikten sonra sanal makinaya bağlanarak şu komutları çalıştırıyoruz;

cd /var/www/portal 
composer update
php yii migrate--migrationPath=@vendor/kouosl/mekan/migrations

Komutunu çalıştırıyoruz böylelikle veritabanımızı oluşturup örnek bir kayıt ekliyoruz.

Portal dizinindeki "\frontend\config\main.php" dosyasına girerek şu satırları ekliyoruz;

'Mekan' => [ 'class' => 'kouosl\Mekan\Module'
],


Modül kurulumu tamamlanmıştır.

http://portal.kouosl/Mekan buradan modüle ulaşabilirsiniz.

Sadık Tunca - 141307035
