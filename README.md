Rukiye Çadırcı
Teknoloji haber sitesine hoşgeldiniz!


Bir haber web uygulaması geliştiriyorsunuz. Sistem içerisinden dört farklı tipte kullanıcı barınmakta.
1. Admin/Yönetici
● Yönetimsel tüm aktiviteleri gerçekleştirebilir.
● Moderatör’ün sahip olduğu tüm yetkilere aynı zamanda sahiptir.
● Editör’ün sahip olduğu tüm yetkilere aynı zamanda sahiptir.
● Kullanıcı yetkilerinde düzenlemeler yapabilir, yetki rollerini yönetebilir.
● Uygulama içerisindeki aktiviteleri izleyebilir, kayıt(log) kontrollerini gerçekleştirebilir.
2. Moderatör
● Yönetici ve moderatör rolündekiler hariç diğer kullanıcılar için yetki kontrolleri
gerçekleştirebilir.
● Alt seviye tipteki kullanıcıların aktivitelerini izleyebilir.
● Hesap silme işlemlerini inceleyip bunlarla ilgili kontrolleri gerçekleştirebilir.
● Editörler için sorumlu oldukları kategorileri/tipleri değiştirebilir.
● Uygulama içerisinde oluşturulmuş yorumları yönetebilir.
● Haber yönetim işlemlerini yapabilir.
3. Editör
● Uygulama içerisinde kendisine belirtilmiş olan kategorilerde/tiplerde yeni haberler
oluşturabilir.
● Kendisi tarafından yazılmış, yayınlanmamış veya yakın zamanda (sabit veya moderatörün
değiştirebildiği bir aralık) yayınlanmış haberler için düzenleme işlemi gerçekleştirebilir.
4. Kullanıcı
● Herhangi bir haber için yorum oluşturabilir.
● Yorumlarını isterse anonim olarak göndermek isteyebilir.
● Hesabı ile ilgili silme isteğinde bulunabilir. (hesabı ve aktivitelerini uygulama üzerinden
kaldırmak için)
● Takip ettiği kategorileri/tipleri belirtebilir. Bu durumda kendisine özel oluşturulmuş bir akış
gösterilmesi bekleniyor.
● Uygulama içerisinde oluşturduğu yorumları inceleyebilir.
● Uygulama içerisinde okuduğu haberleri inceleyebilir.

Proje içerisindeki fonksiyonellikler:
1. Back-office / Yönetim Paneli (Yönetici ve moderatör kullanıcılar için)
2. Editor Interface (Editör kullanıcıları için)
3. RestAPI
a. Haber listesi (kategori/tip filtresi uygulanabilir)
b. Haber detayı
4. Loglama işlemleri (PSR-3).
5. Proje geneli güvenlik ve hata kontrolleri.
6. Uygulamanın geçici süreyle bakıma alınması. (maintenance) (bu durumda uygulama ile ilgili
işlemlere müsade edilmemesi ve kullanıcıya bilgi verilmesi gerekiyor)
7. Composer ile bağımlılık yönetimi. (proje içerisinde kullandığınız bağımlılıklar için geçerli, 3.
parti bir bağımlılığınız yoksa sadece ortam ile ilgili bağımlılıkları belirtebilirsiniz)
Bonus:
1. API dökümantasyonu için Open API (swagger) dökümanının hazırlanması.
2. Uygulamanın dağıtımı ve/veya geliştirmesi için kullanılacak Docker ortamının hazırlanması.
3. Aktivite izleme ilgili bir arayüzün gerçeklenmesi.
4. RestAPI için authentication mekanizmasının yapılması ve kullanıcı işlemlerinin sağlanması.

