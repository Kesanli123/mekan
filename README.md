# mekan

Mekan modülünü eklemek için öncelikle,

Komut satırında modülümüzü ekleyeceğimiz yere (@vendor/kouosl/) altına geliyoruz. Ardından "git clone https://github.com/Kesanli123/mekan.git" komutunu çalıştırarak modülümüzü projemize indiriyoruz.

Portal dizinindeki "\frontend\config\main.php" dosyasına girerek şu satırları ekliyoruz;

'Mekan' => [ 'class' => 'kouosl\Mekan\Module'
],

Portal klasörünün içerisindeki composer.json dosyasında gerekli yerlere şu satırları ekliyoruz;

############################

"repositories": [ { .... { "type": "vcs", "url": "https://github.com/Kesanli123/mekan.git" } ],

"require": {

....   
"kouosl/Mekan": "dev-master"
},

############################

Ekledikten sonra sanal makinaya bağlanarak şu komutları çalıştırıyoruz;

cd /var/www/portal sudo chmod -R 777 vendor/kouosl/Mekan composer update

Son adım olarakda modülümüzde "migrations" klasöründeki .php uzantılı dosyayı kopyalayıyoruz ve portal dizininde "console/migrations/" altına yapıştırıyoruz(klasör yok ise kendimiz oluşturuyoruz). Ardından sanal makinamızda,

php yii migrate

Komutunu çalıştırıyoruz böylelikle veritabanımızı oluşturup örnek bir kayıt ekliyoruz.

Modül kurulumu tamamlanmıştır.

http://portal.kouosl/Mekan buradan modüle ulaşabilirsiniz.

Sadık Tunca - 141307035
