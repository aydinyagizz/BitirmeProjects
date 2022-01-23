-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 23 Oca 2022, 17:57:38
-- Sunucu sürümü: 10.4.21-MariaDB
-- PHP Sürümü: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kriptarium`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_kadi` varchar(500) NOT NULL,
  `admin_sifre` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_kadi`, `admin_sifre`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `site_id` int(11) NOT NULL,
  `site_logo` varchar(300) NOT NULL,
  `site_footer_logo` varchar(300) NOT NULL,
  `site_favicon` varchar(300) NOT NULL,
  `site_linkedin` varchar(300) NOT NULL,
  `site_instagram` varchar(300) NOT NULL,
  `site_twitter` varchar(300) NOT NULL,
  `site_facebook` varchar(300) NOT NULL,
  `site_youtube` varchar(300) NOT NULL,
  `site_mail` varchar(300) NOT NULL,
  `site_adres` varchar(255) NOT NULL,
  `site_tel` varchar(50) NOT NULL,
  `site_gsm` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`site_id`, `site_logo`, `site_footer_logo`, `site_favicon`, `site_linkedin`, `site_instagram`, `site_twitter`, `site_facebook`, `site_youtube`, `site_mail`, `site_adres`, `site_tel`, `site_gsm`) VALUES
(1, '1567197000_logo-2.png', 'logo-2.png', 'favicon.png', '', '', '', '', '', 'iletisim@kriptarium.com', '<p>Kriptarium Ar-Ge Yazılım Danışmanlık Savunma Sanayi ve Ticaret Ltd. Şti. &Ccedil;ayda&ccedil;ıra Mah. Hacı &Ouml;mer Bilginoğlu Cad. No:63/Z07 Fırat Teknokent Ek Binası ELAZIĞ</p>\r\n', '0 424 248 21 13', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(100) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `egitim`
--

CREATE TABLE `egitim` (
  `egitim_id` int(11) NOT NULL,
  `egitim_foto` varchar(500) NOT NULL,
  `egitim_title` varchar(500) NOT NULL,
  `egitim_icerik` text NOT NULL,
  `egitim_tarih` timestamp NOT NULL DEFAULT current_timestamp(),
  `egitim_kategori_id` int(11) NOT NULL,
  `egitim_kategori_alt_id` int(11) NOT NULL,
  `egitim_seolink` varchar(500) NOT NULL,
  `egitim_keyw` varchar(510) NOT NULL,
  `egitim_desc` varchar(510) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `egitim`
--

INSERT INTO `egitim` (`egitim_id`, `egitim_foto`, `egitim_title`, `egitim_icerik`, `egitim_tarih`, `egitim_kategori_id`, `egitim_kategori_alt_id`, `egitim_seolink`, `egitim_keyw`, `egitim_desc`, `created_at`, `updated_at`, `deleted_at`) VALUES
(58, '5cd5728b06b8b.jpg_1640396141_0d59cb50b24de45004f2.jpg', 'Eğitimm', '<p>Egitim İ&ccedil;erik</p>\r\n', '2021-12-25 01:35:41', 0, 0, 'Egitimm', '', '', '2021-12-25 04:35:41', '2021-12-25 04:35:41', NULL),
(59, '1000x450.png_1640397149_992b81c1981a6a683050.png', 'Eğitimm 2', '<p>asdasd</p>\r\n', '2021-12-25 01:52:29', 0, 0, 'Egitimm-2', '', '', '2021-12-25 04:52:29', '2021-12-25 04:52:29', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `hakkimizda_id` int(11) NOT NULL,
  `hakkimizda_misyon` varchar(1000) NOT NULL,
  `hakkimizda_amac` varchar(1000) NOT NULL,
  `hakkimizda_tarihce` varchar(1000) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`hakkimizda_id`, `hakkimizda_misyon`, `hakkimizda_amac`, `hakkimizda_tarihce`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, '<p>Kriptarium dijital d&uuml;nyadaki g&uuml;venliğiniz i&ccedil;in en uygun kriptolojik sistemlerin tasarımı, uygulanması, testi ve doğrulanması s&uuml;re&ccedil;lerinde kapsamlı destek sunmaktadır.​</p>\r\n\r\n<p>Sayısal varlığınızın mevcut saldırılara karşı ne kadar diren&ccedil;li ve g&uuml;rb&uuml;z olduğunun kontrol edebilmesi ve bu saldırıların başarısını azaltmak i&ccedil;in kullanılabilecek karşı &ouml;nerileri de geliştirebilmeyi hedeflemektedir.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '<p>Kriptarium g&uuml;venlik zayıflıklarını a&ccedil;ığa &ccedil;ıkarmak i&ccedil;in yaratıcı testleri kullanarak cip ve cihaz g&uuml;venliği i&ccedil;in bir fırsat sunmaya &ccedil;alışmaktadır. Kriptarium ile ger&ccedil;ekten nasıl daha g&uuml;venli olacağınızı bulacaksınız. Uzman ekibimiz en son saldırı tekniklerini kullanarak &uuml;r&uuml;nleriniz i&ccedil;in g&uuml;venli yazılım ve donanım &ccedil;&ouml;z&uuml;mleri sunmaktadır.</p>\r\n', '<p>2015 yılında Bilim Teknoloji ve Sanayi Bakanlığının desteği ile kurulan firmamız akademik bilgi birikiminin insanlığın yararına nasıl sunulabileceğinin en g&uuml;zel &ouml;rneklerinden biridir. Bu g&uuml;ne kadar 15&#39;den fazla ulusal ve uluslararası Ar-Ge projesi başarı ile tamamlanmıştır.</p>\r\n', '2021-12-25 23:33:48', '2021-12-26 00:27:36', '2021-12-25 21:33:43');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `motivasyon`
--

CREATE TABLE `motivasyon` (
  `motivasyon_id` int(11) NOT NULL,
  `motivasyon_title` varchar(255) NOT NULL,
  `motivasyon_content` varchar(500) NOT NULL,
  `motivasyon_author` varchar(255) NOT NULL,
  `motivasyon_job` varchar(250) NOT NULL,
  `motivasyon_created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `motivasyon_updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `motivasyon_deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `motivasyon`
--

INSERT INTO `motivasyon` (`motivasyon_id`, `motivasyon_title`, `motivasyon_content`, `motivasyon_author`, `motivasyon_job`, `motivasyon_created_at`, `motivasyon_updated_at`, `motivasyon_deleted_at`) VALUES
(1, 'title', 'motivasyon icerik', 'yazar', 'meslek', '2021-12-24 21:51:27', '2021-12-24 21:51:27', '2021-12-24 19:50:46'),
(2, '', 'motivasyon icerik', 'Yazı Yazarı', 'Yazı Mesleği', '2021-12-24 22:16:37', '2021-12-27 10:49:35', NULL),
(3, 'title', 'motivasyon icerik', 'yazar', 'meslek', '2021-12-24 21:51:27', '2021-12-24 21:51:27', '2021-12-24 19:50:46'),
(4, '', 'motivasyon icerik', 'Yazı Yazarı', 'Yazı Mesleği', '2021-12-24 22:16:37', '2021-12-27 10:49:30', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ozkaynak`
--

CREATE TABLE `ozkaynak` (
  `ozkaynak_id` int(11) NOT NULL,
  `ozkaynak_adres` varchar(500) NOT NULL,
  `ozkaynak_mail` varchar(250) NOT NULL,
  `ozkaynak_icerik` varchar(1000) NOT NULL,
  `ozkaynak_tel` varchar(50) NOT NULL,
  `ozkaynak_fax` varchar(50) NOT NULL,
  `ozkaynak_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `ozkaynak`
--

INSERT INTO `ozkaynak` (`ozkaynak_id`, `ozkaynak_adres`, `ozkaynak_mail`, `ozkaynak_icerik`, `ozkaynak_tel`, `ozkaynak_fax`, `ozkaynak_foto`) VALUES
(1, '<p>sadasdsa</p>\r\n', 'sadasdsadasd', '<p>asdasda</p>\r\n', '123', '', 'ozkaynak.png_1640572363_b913d34cd064a6f2f0b8.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `urun_id` int(11) NOT NULL,
  `urun_foto` varchar(500) NOT NULL,
  `urun_title` varchar(255) NOT NULL,
  `urun_icerik` varchar(1000) NOT NULL,
  `urun_icon` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`urun_id`, `urun_foto`, `urun_title`, `urun_icerik`, `urun_icon`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, '1.jpg_1640562441_a98820bf5ef67c700313.jpg', 'Kriptoloji Çözüm Önerileri', '<p>Bilgi g&uuml;venliği yazılım ve donanımlarının tedarik&ccedil;isi değil bunları kurum k&uuml;lt&uuml;r&uuml;n&uuml;z haline getirecek ve dijital varlıklarınızın g&uuml;venliğinizi u&ccedil;tan uca sağlamaya talibiz</p>\r\n', 'ti-pencil-alt', '2021-12-27 02:47:21', '2021-12-27 02:47:21', NULL),
(5, '2.jpg_1640562495_487ee2c9e51cabdd47bc.jpg', 'Güvenli Veri Depolama Çözümleri', '<p>Smart Secure Storage (SSS) &uuml;r&uuml;n&uuml;m&uuml;z ile hem depolama maliyetlerinizi d&uuml;ş&uuml;recek zeki &ccedil;&ouml;z&uuml;m &ouml;nerileri sunuyoruz hemde KVKK ile tam uyumlu hale getiriyoruz</p>\r\n', 'ti-harddrives', '2021-12-27 02:48:15', '2021-12-27 02:48:15', NULL),
(6, '3.jpg_1640562534_1bd1645e4eecf95a0beb.jpg', 'Ar-Ge Faaliyetleri', '<p>Daha g&uuml;zel yarınlar i&ccedil;in bizimle geleceği değiştirmeye var mısınız?</p>\r\n', 'ti-vector', '2021-12-27 02:48:54', '2021-12-27 02:48:54', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yazilar`
--

CREATE TABLE `yazilar` (
  `yazi_id` int(11) NOT NULL,
  `yazi_foto` varchar(500) NOT NULL,
  `yazi_title` varchar(500) NOT NULL,
  `yazi_icerik` text NOT NULL,
  `yazi_tarih` timestamp NOT NULL DEFAULT current_timestamp(),
  `yazi_kategori_id` int(11) NOT NULL,
  `yazi_kategori_alt_id` int(11) NOT NULL,
  `yazi_okunma` varchar(500) NOT NULL DEFAULT '0',
  `yazi_seolink` varchar(500) NOT NULL,
  `yazi_keyw` varchar(510) NOT NULL,
  `yazi_desc` varchar(510) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `yazilar`
--

INSERT INTO `yazilar` (`yazi_id`, `yazi_foto`, `yazi_title`, `yazi_icerik`, `yazi_tarih`, `yazi_kategori_id`, `yazi_kategori_alt_id`, `yazi_okunma`, `yazi_seolink`, `yazi_keyw`, `yazi_desc`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '132944394_personel.JPG', 'Twitter Hesabı Nasıl Dondurulur?', '<p style=\"text-align:justify\"><span style=\"font-family:Calibri,sans-serif; font-size:20px\">Milyonlarca kişilik kullanıcı kitlesine sahip olan Twitter, d&uuml;nyanın &ouml;nde gelen sosyal medya platformları arasında. Bu platformla ilgili en &ccedil;ok merak edilen konulardan birisi de hesap dondurma işleminin nasıl yapıldığı.</span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:24px\"><span style=\"font-family:Calibri,sans-serif\"><strong>Twitter Hesabı Dondurma</strong></span></span></h2>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:20px\"><span style=\"font-family:Calibri,sans-serif\">G&uuml;n&uuml;m&uuml;z&uuml;n en pop&uuml;ler sosyal medya platformlarından birisi olan Twitter&rsquo;da, en b&uuml;y&uuml;k merak konularından bir tanesi de <strong>Twitter hesabını dondurmak</strong>tır. Dondurma işlemi genelde hesabını ge&ccedil;ici bir s&uuml;reliğine kapatmak isteyen kullanıcıların başvurduğu bir y&ouml;ntem. Bu şekilde hesabınızı kapatabilir, daha sonra a&ccedil;mak istediğinizde yine kullanıcı adı ve şifrenizle giriş yaparak her şeyi bıraktığınız gibi bulabilirsiniz. Hesabınızı dondurduğunuzda i&ccedil;indeki t&uuml;m bilgilerin saklanacağını ancak hesabınızı a&ccedil;madığınız s&uuml;rece bu bilgilere siz dahil kimsenin erişemeyeceğini bilmenizde fayda var. Bu nedenle dondurma işlemini yapmadan &ouml;nce eğer hesabınızda ihtiya&ccedil; duyabileceğiniz fotoğraflar, bilgiler vs. varsa işlemi yapmadan &ouml;nce bunları kaydetmenizi &ouml;neririz. </span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:24px\"><span style=\"font-family:Calibri,sans-serif\"><strong>Hesap Dondurma İşlemi</strong></span></span></h2>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:20px\"><span style=\"font-family:Calibri,sans-serif\"><strong>Twitter hesabınızı dondurmak</strong> i&ccedil;in olduk&ccedil;a kolay belli başlı adımları takip etmeniz gerekmekte. İlk olarak Twitter hesabınıza kullanıcı adı ve şifrenizle giriş yapın. Giriş yaptıktan sonra ana sayfanın sol yanında bulunan &ldquo;Daha fazla&rdquo; butonuna tıklayın. Butona tıkladıktan sonra karşınıza &ccedil;ıkacak men&uuml;den &ldquo;Ayarlar ve Gizlilik&rdquo; butonuna tıklayın. Bu işlemin ardından a&ccedil;ılacak ayarlar men&uuml;s&uuml;nde &ldquo;Hesap&rdquo; butonuna tıklayın ve sayfayı aşağı kaydırın. Sayfanın en altında g&ouml;receğiniz &ldquo;Devre dışı bırak&rdquo; butonuna tıklayın. &ldquo;Devre dışı bırak&rdquo; butonuna basmanızla birlikte hesap dondurma işleminizi başarıyla tamamlamış olacaksınız.</span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:22px\"><span style=\"font-family:Calibri,sans-serif\"><strong>Twitter Hesabını Dondurmadan &Ouml;nce Dikkat Edilmesi Gerekenler</strong></span></span></h2>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:20px\"><span style=\"font-family:Calibri,sans-serif\">Hesap dondurma işlemine başlamadan &ouml;nce dikkat etmeniz bazı konular var. <strong>Twitter hesabını dondur</strong>duğunuzda insanlar size Twitter &uuml;zerinden ulaşım sağlayamaz. Bu y&uuml;zden hesabınızı dondurmadan &ouml;nce bunun bilgisini iletişim kurduğunuz kişilere vermenizde fayda var. Bunun yanında daha &ouml;nce de s&ouml;ylemiş olduğumuz gibi fotoğraf yedekleme var. Eğer Twitter hesabınızı dondurmuş ve yakın zamanda tekrar a&ccedil;mak istemiyorsanız hesabınızda ihtiyacınız olabileceğini d&uuml;ş&uuml;nd&uuml;ğ&uuml;n&uuml;z fotoğraf ve videoları yedeklemenizi &ouml;neririz. Bunun sebebi Twiiter hesabınızı dondurduğunuz zaman paylaşmış olduğunuz fotoğraf ve videolara erişemiyor oluşunuz. Yedekleme yapmadığınız takdirde gerekli fotoğraflara erişebilmek i&ccedil;in dondurduğunuz hesabı tekrar a&ccedil;manız gerekebilir.</span></span></p>\r\n', '2020-12-21 18:58:59', 0, 0, '0', 'twitter-hesabi-nasil-dondurulur', 'twitter dondurma', 'Twitter hesabınızı dondurmak için oldukça kolay belli başlı adımları takip etmeniz gerekmekte. İlk olarak Twitter hesabınıza kullanıcı adı ve şifrenizle giriş yapın. Giriş yaptıktan sonra ana sayfanın sol yanında bulunan...', '2021-11-23 17:08:59', '2021-11-25 12:23:20', NULL),
(2, '132944394_personel.JPG', 'Twitter Hesabı Nasıl Silinir?', '<p style=\"text-align:justify\"><span style=\"font-size:20px\"><span style=\"font-family:Calibri,sans-serif\">Twitter, g&uuml;n&uuml;m&uuml;zde milyonlarca kişinin kullanmakta olduğu olduk&ccedil;a pop&uuml;ler bir sosyal medya platformu. Her g&uuml;n y&uuml;zlerce yeni hesap a&ccedil;ılırken aynı zamanda bir o kadar da hesap silinmekte.</span></span></p>\r\n\r\n<h2 style=\"text-align:justify\">&nbsp;</h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:22px\"><span style=\"font-family:Calibri,sans-serif\"><strong>Bilgisayarda Twitter Hesabı Silme</strong></span></span></h2>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:20px\"><span style=\"font-family:Calibri,sans-serif\">Eğer sahip olduğunuz <strong>Twitter hesabını silmek</strong> istiyorsanız bunu kolaylıkla yapabilirsiniz. Bu işlemi bir bilgisayarda yapacaksanız izlemeniz gereken bazı adımlar var. İlk olarak internet tarayıcınızdan Twitter internet sitesine girin. Ardından profil simgenizin yanındaki a&ccedil;ılır men&uuml;den &ldquo;Ayarlar ve Gizlilik&rdquo; se&ccedil;eneğine tıklayın. A&ccedil;ılacak sayfada &ouml;nce &ldquo;Hesap&rdquo; sekmesine ardından da sayfanın en altında bulunan &ldquo;Hesabımı devre dışı bırak&rdquo; se&ccedil;eneğine tıklayın. Hesabınızı devre dışı bırakmaya ilişkin bilgileri okuduktan sonra &ldquo;Kullanıcı adını devre dışı bırak&rdquo; se&ccedil;eneğine dokunun. Sistem sizden kullanıcı adı ve şifrenizi istediğinde gerekli bilgilerinizi girin ve &ldquo;Hesabı devre dışı bırak&rdquo; butonuna tıklayarak işleminizi tamamlayın.</span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<h3 style=\"text-align:justify\"><span style=\"font-size:22px\"><span style=\"font-family:Calibri,sans-serif\"><strong>Telefonda Twitter Hesabı Silme</strong></span></span></h3>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:20px\"><span style=\"font-family:Calibri,sans-serif\">Eğer kullandığınız <strong>Twitter hesabını silme</strong> işlemini telefonunuz &uuml;zerinden ger&ccedil;ekleştirmek istiyorsanız işiniz yine olduk&ccedil;a kolay. Bunun i&ccedil;in ilk olarak telefonunuza y&uuml;klediğiniz Google Chrome internet tarayıcısını a&ccedil;ıp Twitter internet sitesine girmelisiniz. Kullanıcı adı ve şifrenizle giriş yaptıktan sonra ekranın sağ &uuml;st k&ouml;şesinde bulunan 3 nokta işaretine tıklayıp &ldquo;Masa&uuml;st&uuml; Sitesi İste&rdquo; se&ccedil;eneğine dokunun. Bu sayede Twitter&rsquo;ın bilgisayar g&ouml;r&uuml;n&uuml;m&uuml;ne erişim sağlamış olacaksınız. Profilinize tıklayıp ayarlar men&uuml;s&uuml;n&uuml; a&ccedil;ın. Ayarlar men&uuml;s&uuml;n&uuml;n en altında yer alan &ldquo;hesabımı devre dışı bırak&rdquo; se&ccedil;eneğine dokunun. Devre dışı bırakma işlemine ilişkin bilgileri okuyun ve ardından &ldquo;Devre dışı bırak&rdquo; se&ccedil;eneğine dokunun. Sistem sizden kullanıcı adınızı ve şifrenizi istediğinde gerekli bilgileri girdikten sonra &ldquo;Devre dışı bırak&rdquo; ve ardından tekrar &ldquo;Evet, devre dışı bırak&rdquo; se&ccedil;eneklerine dokunarak işleminizi tamamlayın.</span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<h3 style=\"text-align:justify\"><span style=\"font-size:22px\"><span style=\"font-family:Calibri,sans-serif\"><strong>Hesap Silme Hakkında Bilmeniz Gerekenler</strong></span></span></h3>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:20px\"><span style=\"font-family:Calibri,sans-serif\">Kullanıcı adınızı veya e-postanızı başka bir hesapta kullanmaya devam etmek istiyorsanız, bu hesabı devre dışı bırakmadan &ouml;nce kullanıcı adı ve e postanızı değiştirip onaylamalısınız.</span></span></li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:20px\"><span style=\"font-family:Calibri,sans-serif\">Hesabınıza kayıtlı kullanıcı adını veya e postayı değiştirmek i&ccedil;in hesabınızı devre dışı bırakmanız gerekmemektedir. Ayarlar men&uuml;s&uuml;nden bu işlemleri kolaylıkla yapabilirsiniz.</span></span></li>\r\n</ul>\r\n\r\n<p style=\"margin-left:48px; text-align:justify\">&nbsp;</p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:20px\"><span style=\"font-family:Calibri,sans-serif\">Yanlışlıkla silme gibi durumlara karşın, <strong>Twitter hesabını devre dışı bırakma</strong> işlemini yapmanızın ardından gelecek 30 g&uuml;n boyunca Twitter hesabınızı yeniden etkinleştirme şansınız vardır.</span></span></li>\r\n</ul>\r\n\r\n<p style=\"margin-left:24px\">&nbsp;</p>\r\n', '2020-12-22 14:27:10', 0, 0, '0', 'twitter-hesabi-nasil-silinir', 'twitter hesap silme', 'Eğer sahip olduğunuz Twitter hesabını silmek istiyorsanız bunu kolaylıkla yapabilirsiniz.Twitter internet sitesine girin. Ardından profil simgenizin yanındaki açılır menüden “Ayarlar ve Gizlilik” seçeneğine tıklayın. Açılacak sayfada...', '2021-11-23 17:08:59', '2021-11-25 12:23:29', NULL),
(3, '702002695_claudio-schwarz-purzlbaum-FMJAYeRwtDY-unsplash.jpg', 'Twitter Hesabı Nasıl Kapatılır?', '<p style=\"text-align:justify\"><span style=\"font-size:20px\"><span style=\"font-family:Calibri,sans-serif\">G&uuml;n&uuml;m&uuml;z&uuml;n en &ccedil;ok kullanıcıya hitap eden sosyal medya platformlarından biri olan Twitter hakkında en &ccedil;ok sorulan sorulardan birisi de Twitter hesabının nasıl kapatıldığı.</span></span></p>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:24px\"><span style=\"font-family:Calibri,sans-serif\"><strong>Twitter Hesabını Kalıcı Olarak Kapatma</strong></span></span></h2>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:20px\"><span style=\"font-family:Calibri,sans-serif\"><strong>Twitter hesabını kapatmak</strong> i&ccedil;in iki se&ccedil;eneğiniz var. Bunlardan birisi hesabı kalıcı olarak kapatmak diğeri ise ge&ccedil;ici bir s&uuml;reliğine hesabınızı dondurmak.&nbsp; Eğer hesabınızı kalıcı olarak kapatmak istiyorsanız yapmanız gereken ilk şey internet tarayıcınızdan twitter&rsquo;ın internet sitesine girip kullanıcı adınız ve parolanızla giriş yapmak. Ardından profil simgenizin yanında bulunan a&ccedil;ılır men&uuml;den &ldquo;ayarlar ve gizlilik&rdquo; butonuna tıklamalısınız. Karşınıza &ccedil;ıkacak sayfada &ouml;nce &ldquo;hesap&rdquo; butonuna, ardından da a&ccedil;ılan sayfanın en altında bulunan &ldquo;hesabımı devre dışı bırak&rdquo; butonlarına sırasıyla tıklayın. Devre dışı bırakma işlemiyle ilgili bilgileri okuduktan sonra &ldquo;kullanıcı adını serbest bırak&rdquo; butonuna tıklayın. Sistem sizden kullanıcı adınızı ve parolanızı istediğinde gerekli bilgileri girin ve son olarak &ldquo;hesabı devre dışı bırak&rdquo; butonuna tıklayarak <strong>Twitter hesabı silme</strong> işleminizi sonlandırın. B&ouml;ylece hesabınızı tamamen silmiş olacaksınız. Bu y&uuml;zden hesapta bulunan işe yarar fotoğraf, video gibi &ouml;gelerinizi yedeklemeyi ihmal etmeyin. Bunun yanında eğer kalıcı olarak kapattığınız hesabın kullanıcı adını veya e postasını farklı bir Twitter hesabınızda kullanmayı d&uuml;ş&uuml;n&uuml;yorsanız hesabı kapatmadan &ouml;nce farklı hesapta kullanmak istediğiniz kullanıcı adı veya e posta adresini değiştirip onaylamalısınız. </span></span></p>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:24px\"><span style=\"font-family:Calibri,sans-serif\"><strong>Twitter Hesabını Ge&ccedil;ici Olarak Kapatma</strong></span></span></h2>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:20px\"><span style=\"font-family:Calibri,sans-serif\">Twitter hesabınızı silmek istemiyor ancak kısa bir ara vermenin iyi geleceğini d&uuml;ş&uuml;n&uuml;yorsanız <strong>Twitter hesabınızı ge&ccedil;ici olarak kapatma</strong> yoluna başvurabilirsiniz. Hesabınızı kısa s&uuml;re kapatmak yani dondurmak i&ccedil;in ilk olarak internet tarayıcınızdan Twitter&rsquo;ın internet sitesine girip Twitter hesabınıza giriş yapmalısınız. Hesabınıza giriş yaptığınızda a&ccedil;ılacak ana sayfanın sol tarafında bulunan &ldquo;Daha Fazla&rdquo; butonuna tıklayın. Bu butona tıkladığınızda karşınıza &ccedil;ıkacak men&uuml;de &ouml;nce &ldquo;Ayarlar ve Gizlilik&rdquo; butonuna ardından da a&ccedil;ılacak ayarlar men&uuml;s&uuml;ndeki &ldquo;Hesap&rdquo; butonuna tıklayın. A&ccedil;ılan sayfanın en altına indiğinizde &ldquo;Devre dışı bırak&rdquo; butonunu g&ouml;receksiniz. Bu butona tıklayın. Bu şekilde hesabınızı dondurmuş olacaksınız.Hesabınızı dondurduğunuzda siz dahil kimsenin hesabınıza erişim sağlayamayacağından dolayı eğer gerekli olabilecek fotoğraf, videolarınız varsa bunları yedeklemenizde fayda var.</span></span></p>\r\n', '2020-12-23 13:51:44', 0, 0, '0', 'twitter-hesabi-nasil-kapatilir', 'twitter hesap kapatma', 'Twitter hesabını kapatmak için iki seçeneğiniz var. Bunlardan birisi hesabı kalıcı olarak kapatmak diğeri ise geçici bir süreliğine hesabınızı dondurmak.  Eğer hesabınızı kalıcı olarak kapatmak istiyorsanız yapmanız gereken', '2021-11-23 17:08:59', '2021-11-23 17:08:59', NULL),
(6, '738471664_pexels-pixabay-267350.jpg', 'Twitterda En Çok Takipçiye Sahip Olan Türk Hesaplar', '<p><span style=\"font-size:20px\"><span style=\"font-family:Calibri,sans-serif\">D&uuml;nya &uuml;zerinde olduğu gibi T&uuml;rkiye&rsquo;de en &ccedil;ok kullanılan sosyal medyalardan biri olan twitterda t&uuml;rk &uuml;nl&uuml;ler&#39;de bir hayli takip&ccedil;i kitlesine sahip. T&uuml;m d&uuml;nyada 390 Mn kayıtlı kullanıcısı olan bu platform, T&uuml;kiyede&nbsp;de olduk&ccedil;a kullanılıyor.</span></span></p>\r\n\r\n<p><span style=\"font-size:20px\"><span style=\"font-family:Calibri,sans-serif\">&Uuml;lkemizde yaşanan &ccedil;oğu olay i&ccedil;in g&ouml;sterilen tepkiler bu platformdan yapıldığı zaman ciddi derecede etkili oluyor ve genellikle twitter kullanıcılarının amacı g&uuml;ndem toplumsal sorunlar olarak belirlenmiştir. </span></span></p>\r\n\r\n<p><span style=\"font-size:20px\"><span style=\"font-family:Calibri,sans-serif\">Bu y&uuml;zden sadece eğlence paylaşımları değil toplumsal olayların da tartışıldığı bir sosyal medya durumunda.</span></span></p>\r\n\r\n<p><span style=\"font-size:20px\"><span style=\"font-family:Calibri,sans-serif\">T&uuml;rkiyede de Twitter&rsquo;da T&uuml;rk &uuml;nl&uuml;ler arasında ilk sırada 14.7Mn&nbsp;takip&ccedil;isi olan Cem Yılmaz var. Cem Yılmazdan sonra ise 7Mn&nbsp;takip&ccedil;isiyle C&uuml;neyt &Ouml;zdemir geliyor. Bu ilk 2 nin ardında n gelen &uuml;nl&uuml;lerle oluşturuğumuz sıralamaya beraber g&ouml;z atalım.</span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li><span style=\"font-size:20px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"background-color:white\"><span style=\"color:#333333\">Cem Yılmaz 14.7 Mn takip&ccedil;i</span></span></span></span></li>\r\n	<li><span style=\"font-size:20px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"background-color:white\"><span style=\"color:#333333\">C&uuml;neyt &Ouml;zdemir 7 Mn takip&ccedil;i</span></span></span></span></li>\r\n	<li><span style=\"font-size:20px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"background-color:white\"><span style=\"color:#333333\">Demet Akalın 6.7 Mn takip&ccedil;i</span></span></span></span></li>\r\n	<li><span style=\"font-size:20px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"background-color:white\"><span style=\"color:#333333\">Ata Demirer 6.7 Mn takip&ccedil;i</span></span></span></span></li>\r\n	<li><span style=\"font-size:20px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"background-color:white\"><span style=\"color:#333333\">Sıla Gen&ccedil;oğlu 5.6 Mn takip&ccedil;i</span></span></span></span></li>\r\n</ol>\r\n', '2020-12-24 19:10:33', 0, 0, '0', 'twitterda-en-cok-takipciye-sahip-olan-turk-hesaplar', 'Twitterda En Çok Takipçiye Sahip Olan Türk Hesaplar', 'Türkiye’de Twitter’da Türk ünlüler arasında ilk sırada 14.7 Mn takipçisi olan Cem Yılmaz var. Cem Yılmazdan sonra ise 7 Mn takipçisiyle Cüneyt Özdemir geliyor.', '2021-11-23 17:08:59', '2021-11-23 17:08:59', NULL),
(7, '2063205576_pexels-solen-feyissa-5744251.jpg', 'Twitter Hesap Alımı Sırasında Dikkat Edilmesi Gerekenler', '<p><span style=\"font-size:20px\"><span style=\"font-family:Calibri,sans-serif\">Sosyal medyanın en pop&uuml;ler uygulamalarından birisi olarak tercih edilen <strong>Twitter</strong>, her ge&ccedil;en g&uuml;n kullanıcı sayısında y&uuml;kselmeye devam ederek en pop&uuml;ler &nbsp;sosyal medyalar arasında ilk 4 e girmiş bulunmaktır. Bu mecra i&ccedil;erisinde var olmak isteyenlerin sıklıkla yaşadığı problemler takip&ccedil;i, beğeni, retweet gibi etkileşim gerektiren unsurları y&uuml;kseltme istekleri profesyonel kişi ya da platformlar i&ccedil;erisinde &ccedil;&ouml;z&uuml;me kavuşturmak istemektedir. &Ouml;zellikle <strong>ticari ama&ccedil;la a&ccedil;ılan</strong> <strong>twitter hesapları</strong>, belirli bir kitleye sahip olana&nbsp;kadar aktif bir izlenim yaratmak adına takip&ccedil;i(bot) alımları yapmaktadır.</span></span></p>\r\n\r\n<h2><span style=\"font-size:24px\"><span style=\"font-family:Calibri,sans-serif\"><strong>Twitter Hesabı&nbsp;Alınırken&nbsp;Dikkat Edilecek Unsurlar</strong></span></span></h2>\r\n\r\n<p><span style=\"font-size:20px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"background-color:#f5f5ff\">Alacağınız twitter ilk mail olduğundan emin olmanız gerekir.Aynı zamanda <strong>alacağınız twitter hesabının</strong> ilk sahibi daha &ouml;nceden başkasına satmış ve satın alan kişi değiştirip hesabı size satabilir. O sebepten &ouml;t&uuml;r&uuml; alacağınız <strong>twitter hesabının ilk e-maili</strong> olup olmadığını sorun daha &ouml;ncesinde sorun alıcağınız hesabın g&uuml;venilir kişiden veya kuruluşlardan ilk mail adresiyle beraber alınmasını &ouml;neririz. Yoksa hesabın ilk sahibi hesabınızı elinizden geri alabilir. &nbsp;Hesabın &Ccedil;alınma durumlarında ilk mail sizdeyse, şifre sıfırlama talebiniz 48 saat i&ccedil;erisinde gelmektedir. İlk mail kısmı halledildikten sonra kesinlikle ikinci &ouml;nemli unsur şifrenizdir. Aldığınız hesabın <strong>şifresini değiştirmeniz gerekmektedir</strong>, ve sonrasında<strong> tweetler beğeniler yapılmış ise kontrol edilmesi</strong> olası bir ihlal s&ouml;z konusu olmamalıdır. <strong>Hesabın daha &ouml;nce politika ihlali yapılmamış ve kısıtlama getirilmemiş olması</strong> burda en &ouml;nemli unsurdur. Son adım olarak dilerseniz şifreniz gibi kullanıcı adınız(@ ile başlayan kısım)&nbsp;veya adınızıda değiştirebilir ve hesabı kendinize g&ouml;re optimize edebilirsiniz.Yazımızın sonuna geldik satın aldığınız Twitter hesabınızda b&uuml;t&uuml;n kontrolleri yaptıktan sonra hesabınız artık tweet atmaya hazırdır g&uuml;venle hesabınızı kullanabilirsiniz.</span></span></span></p>\r\n', '2020-12-25 16:59:24', 0, 0, '0', 'twitter-hesap-alimi-sirasinda-dikkat-edilmesi-gerekenler', 'twitter hesap al', 'Alacağınız twitter ilk mail olduğundan emin olmanız gerekir.Aynı zamanda alacağınız hesabın ilk sahibi daha önceden başkasına satmış ve satın alan kişi değiştirip hesabı size satabilir.', '2021-11-23 17:08:59', '2021-11-23 17:08:59', NULL),
(30, 'Screenshot_1.png_1640131229_779d93f52398fc5902cd.png', 'Twitter Sınırlandırılmış Hesap Nedir?', '<p><span style=\"font-size:20px\">Kilitlenmiş veya başka bir sebepten dolayı sınırlandırılmış Twitter hesabı hakkında istediğiniz b&uuml;t&uuml;n bilgileri bu makalede bulabilirsiniz.</span><br />\r\n<strong><span style=\"font-size:24px\">Sınırlandırılmış veya Kilitli Hesap</span></strong><br />\r\n<span style=\"font-size:20px\"><strong>Twitter kuralları</strong>nı ihlal etmiş veya hizmet şartlarına uyum sağlamamışsa hesabınız kilitlenebilir ya da ge&ccedil;ici bir şekilde sınırlandırılmış olabilir. Twittera giriş yaptığınızda ya da uygulamayı a&ccedil;mak istediğinizde hesabınızın bazı &ouml;zellikleri sınırlandırıldığına dair mesaj g&ouml;r&uuml;rseniz, talimatlara uyarak yeniden kullanıma getirebilirsiniz.&nbsp;</span><br />\r\n<span style=\"font-size:24px\"><strong>Hesabınız, G&uuml;venlik Nedeniyle Kilitlenmiştir.</strong></span><br />\r\n<span style=\"font-size:20px\"><strong>Twittera giriş yap</strong>tığınızda hesabınız g&uuml;venlik nedeniyle kilitlendiğini g&ouml;steren mesaj varsa veya ş&uuml;pheli bir davranış yaşandığında hesabınızın başkası tarafından ele ge&ccedil;irildiği anlamına gelir. Anında şifrenizi değiştirerek twitter hesabınızın g&uuml;venliliğini hal edebilirsiniz. Hesabınızla ilişkili e-posta adresi bulunmaktaysa, kuralları oraya g&ouml;nderebilirsiniz. Orda da yoksa spam ya da sosyal posta kısmını kontrol ederek bulabilirsiniz. Hesabınızın kilidiyle ilgili daha &ccedil;ok bilgi &ouml;ğrenmek istiyorsanız destek ekibini arayarak iletişime ge&ccedil;ebilirsiniz. &nbsp;</span><br />\r\n<strong><span style=\"font-size:24px\">Hesabınız Kilitlendi ve Ge&ccedil;erli Hesap Sahibinin Siz Olduğunu Nasıl Doğrulamamız gerekiyor.</span></strong><br />\r\n<span style=\"font-size:20px\">Hesabınız kuralları ihlal edecek davranışlar sergiliyorsa, Hesabını kilitleyerek ve ge&ccedil;erli hesabın sahibi siz olduğunuzu nasıl doğrulanması gerekir gibi sorunları mesaj onayıyla &ouml;ğrenebiliriz. Twitter kilidini a&ccedil;ma:<br />\r\n&Ouml;nce hesabınızın giriş tuşuna basın.<br />\r\n&ldquo;Hesabınız kilitlenmiştir&rdquo; kısmını bulunuz<br />\r\nBaşla kelimesine dokunun.<strong>eski tarihli twitter hesapları</strong><br />\r\nTelefon numaranızı yazarak giriniz. Bu numarayla twitter hesabınızla ilişkili olacağını unutmayınız.<br />\r\nOnay kodu belirleyecek bir k&uuml;&ccedil;&uuml;k mesajla g&ouml;nderip ya da sizi arayarak bu kodu iletebiliriz. Kodunuz size ulaşması biraz zaman alabilir.<br />\r\nOnaylama kodu geldikten sonra onaylama kodunu yazarak twitter hesabında g&ouml;nder tuşuna basarak hesabınızı a&ccedil;mış olursunuz. Daha fazla &ouml;ğrenme ihtiyacı bulursanız l&uuml;tfen destek ekibini arayarak iletişime ge&ccedil;ebilirsiniz.</span><br />\r\n<span style=\"font-size:24px\"><strong>Hesabınızın Bazı &Ouml;zellikleri Ge&ccedil;ici Olarak Sınırlandırıldı.</strong></span><br />\r\n<span style=\"font-size:20px\">Hesabınızın bazı &ouml;zellikleri ge&ccedil;ici olarak, Twitter kural ihlali ya da başka kişilerin &ouml;zg&uuml;rce kendini ifade imkanı sınırlayan davranışlar bulunursa, hesabınızın birka&ccedil; &ouml;zellikleri belli bir s&uuml;reliğine sınırlanabiliyor. Mesela bu sınırlama beğeniler veya Retweetler gibi şeyleri sadece takip&ccedil;ilerin g&ouml;rebilecektir. Taciz i&ccedil;erikli erişim sınırlaması yapılabilir. Bu şekilde daha g&uuml;venli &nbsp;veya g&uuml;&ccedil;l&uuml; bir twittera ait bir topluluk oluşturabiliriz. <strong>Twitter hesabını nasıl sınırlandırabiliriz</strong>. &nbsp;Koşullarına dikkat ediniz.<br />\r\nTaciz İ&ccedil;eren Davranışlarda Hesap Askısı<br />\r\nHesap kullanımı esnasında hesabınızın kilitli olduğunu belirten mesaj g&ouml;renler bunu taciz i&ccedil;erikli mesajların &ccedil;okluğu nedeniyle yaşıyor olabilir. Taciz durumları hesabınıza y&ouml;nelik gelen ve sizin kontrol&uuml;n&uuml;z dışındaki mesajları kapsamaktadır. Bu mesajları sistemsel a&ccedil;ıdan fark eden twitter spam nitelikteki durumlara karşı hesabınızı askıya alabilir.&nbsp;<br />\r\nYurt dışında hesabınızın ele ge&ccedil;irilmiş olduğu durumunu yaşayabilirsiniz. Alakasız &uuml;lkelerden giriş yapılarak hesabınıza başka bir kişi giriş yapmış olabilir. Mesajlar ve rahatsız edici etiketlemeler dışında hesabınıza farklı bir yerden giriş olması da askı nedeni olabiliyor.<br />\r\nTweet atmanız engellendiğinde bu durumun hesap kullanıcıları a&ccedil;ısından bazı zararları olacaktır. &Ouml;zellikle kurumsal ve ticari ama&ccedil;la kurulan hesaplarda aksama g&ouml;r&uuml;lebilir. Yani kurumsal a&ccedil;ıdan takip&ccedil;ilerinize karşı marka değerini s&uuml;rd&uuml;ren &ccedil;alışmalar yapmalısınız. Yardım alacağınız konularda mutlaka işlem merkezi iletişimini kullanabilirsiniz.&nbsp;<br />\r\nKilitlenen hesabınızda yeniden ilerlemek bireysel hesaplarda kurumsal oluşumlarda da &ouml;nemlidir. &Ouml;rneğin &uuml;nl&uuml; birinin hesabı askıya alınırsa etkileşim sekteye uğrar ve yine marka a&ccedil;ısından aksama olabilir.</span><br />\r\n<strong><span style=\"font-size:24px\">Hesap Sınırlandırmada İtiraz Durumu&nbsp;</span></strong><br />\r\n<span style=\"font-size:20px\">Hesap kullanımı yaparken Twitter hesap sınırlandırma sorunu ile karşılaşanlar i&ccedil;in itiraz durumu &ouml;nemlidir. İtiraz edilen hallerde mutlaka hesabı yeniden kullanıma a&ccedil;mak m&uuml;mk&uuml;nd&uuml;r. Askı durumlarına karşı itiraz hakkınızı kullanmalı ve kilitli hesapta var olan hesaba girerek itiraz yapın.&nbsp;<br />\r\nTwitter yardım destek merkezinden de hesaplara dair iletişimle alakalı detayları g&ouml;rebilirsiniz. Tabi ge&ccedil;erli mail ve telefon numaranızın da baştan var olmasına ek &ouml;nem vermelisiniz.</span><br />\r\n&nbsp;</p>\r\n', '2021-01-16 16:03:22', 0, 0, '0', 'twitter-sinirlandirilmis-hesap-nedir', 'twitter,sinirlandirilmis,hesap,nedir', 'Kilitlenmiş veya başka bir sebepten dolayı sınırlandırılmış Twitter hesabı hakkında istediğiniz bütün bilgileri bu makalede bulabilirsiniz.', '2021-11-23 17:08:59', '2021-12-27 10:52:59', NULL),
(56, 'Screenshot_1.png_1640131229_779d93f52398fc5902cd.png', 'duyuru ekliyorum 4', '', '2021-12-22 00:00:29', 0, 0, '0', 'duyuru-ekliyorum-4', '', '', '2021-12-22 03:00:29', '2021-12-25 04:59:54', NULL),
(57, 'Screenshot_1.png_1640131229_779d93f52398fc5902cd.png', 'duyuru ekliyorum 6', '<p>dasads</p>\r\n', '2021-12-22 00:33:23', 0, 0, '0', 'duyuru-ekliyorum-6', '', '', '2021-12-22 03:33:23', '2021-12-25 00:07:27', NULL);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`site_id`);

--
-- Tablo için indeksler `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Tablo için indeksler `egitim`
--
ALTER TABLE `egitim`
  ADD PRIMARY KEY (`egitim_id`);

--
-- Tablo için indeksler `hakkimizda`
--
ALTER TABLE `hakkimizda`
  ADD PRIMARY KEY (`hakkimizda_id`);

--
-- Tablo için indeksler `motivasyon`
--
ALTER TABLE `motivasyon`
  ADD PRIMARY KEY (`motivasyon_id`);

--
-- Tablo için indeksler `ozkaynak`
--
ALTER TABLE `ozkaynak`
  ADD PRIMARY KEY (`ozkaynak_id`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`urun_id`);

--
-- Tablo için indeksler `yazilar`
--
ALTER TABLE `yazilar`
  ADD PRIMARY KEY (`yazi_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `ayarlar`
--
ALTER TABLE `ayarlar`
  MODIFY `site_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `egitim`
--
ALTER TABLE `egitim`
  MODIFY `egitim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- Tablo için AUTO_INCREMENT değeri `hakkimizda`
--
ALTER TABLE `hakkimizda`
  MODIFY `hakkimizda_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `motivasyon`
--
ALTER TABLE `motivasyon`
  MODIFY `motivasyon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `ozkaynak`
--
ALTER TABLE `ozkaynak`
  MODIFY `ozkaynak_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `urun_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `yazilar`
--
ALTER TABLE `yazilar`
  MODIFY `yazi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
