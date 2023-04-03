# PHP ile Instagram Feed
PHP web sitenizde Instagram paylaşımlarınızı sitenize ekleyebilirsiniz.

---

Öncelikle Instagram'dan API anahtarlarını edinmeniz gerekiyor. API anahtarları, Instagram hesabınızı ve hesabınıza ait feed verilerine erişim sağlayacaktır.

Daha sonra, PHP'de Instagram feed'ini görüntülemek için birkaç yol vardır. İşte iki örnek:

1. Instagram Basic Display API kullanarak

Bu yöntem, Instagram'ın Basic Display API'sini kullanarak Instagram feed'inizi PHP'de göstermenizi sağlar.

Öncelikle, Instagram Developer Console'da bir uygulama oluşturmanız gerekiyor. Ardından, uygulamanız için erişim anahtarlarını alın.

2. Instagram oEmbed API kullanarak

Bu yöntemde, Instagram'ın oEmbed API'sini kullanarak Instagram feed'inizi PHP'de göstermeniz sağlanır.

Bu örneklerden herhangi biri, Instagram feed'inizi PHP'de görüntülemeniz için bir başlangıç noktası olabilir. Ancak, güvenlik ve doğru erişim anahtarlarının kullanımı gibi diğer faktörlere de dikkat etmeniz önemlidir.

---

Bonus.php için

Instagram paylaşımlarını PHP sitesinde göstermek için, Instagram API'sini kullanabilirsiniz. Aşağıdaki adımları takip ederek Instagram API'si üzerinden Instagram paylaşımlarını PHP sitesinde gösterebilirsiniz:

Instagram Developer sayfasına gidin ve bir hesap oluşturun.

Yeni bir proje oluşturun ve bir erişim anahtarı (access token) alın.

Instagram API'sini kullanarak istediğiniz kullanıcının paylaşımlarını çekin. API isteğinde kullanıcı adınızı ve erişim anahtarınızı kullanarak bu işlemi gerçekleştirebilirsiniz. 

Not: Instagram API'si 2020 yılında kapatıldı ve artık kullanılamıyor. Alternatif olarak, Instagram Basic Display API veya Instagram Graph API kullanabilirsiniz. Ancak, bu API'ler için de bir erişim anahtarı almanız gerekecek ve API'nin kullanımı için Instagram tarafından belirli kurallar ve sınırlamalar belirlenmiştir.