-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2013 at 09:00 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventplanner`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(4, 'Bhoomika', 'bhva2124@gmail.com', 'vadher04'),
(8, 'urvashi', 'ushi@email.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `pid`, `name`, `detail`, `price`, `image`) VALUES
(6, 1, 5, 'Mehendi Function', '', 20000, 'pimage/1693151207wed6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `cimage` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cname`, `cimage`) VALUES
(1, 'Wedding Event', 'upload/1690019108wed2.jpg'),
(2, 'Corporate Event', 'upload/1689349187corporate6.jpg'),
(3, 'Birthday Event', 'upload/bi1.jpg'),
(4, 'Music Event', 'upload/m1.jpg'),
(5, 'Special Event', 'upload/1689349554sp1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `catpackages`
--

CREATE TABLE `catpackages` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `cdetails` varchar(2000) NOT NULL,
  `cprice` int(11) NOT NULL,
  `pimg` varchar(250) NOT NULL,
  `cdate` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catpackages`
--

INSERT INTO `catpackages` (`id`, `cid`, `pname`, `cdetails`, `cprice`, `pimg`, `cdate`) VALUES
(1, 1, 'Destination Wedding', 'Being one of the best destination wedding planners we assist you in shortlisting wedding locations, understand weather, the culture of families and plan accordingly to make the wedding a moment to rejoice for life. Ask your destination wedding planner now.', 50000, 'pimage/1693150909wed1.jpeg', '2023-08-27'),
(2, 1, 'Catering Service', 'We provide luxurious and extravagant fooding and hospitality services to our clients. With a strong team especially skilled for the event catering services, we cater to larger events like Weddings, Engagement parties, Birthday parties, Sangeet functions and corporate events. This type of Banquet includes Dining which is arranged on long tables with classic decorations where all our Guests can be made to sit comfortably and have a Grand Dining.', 20000, 'pimage/wed3.jpg', '2023-08-27'),
(3, 1, ' Ring Ceremony', 'Engagement ceremony or ring ceremony is an important pre-wedding ritual in Indian culture. As your wedding management partner, we ensure that you and your better half', 50000, 'pimage/1693151043wed4.jpg', '2023-08-27'),
(4, 1, 'Sangeet Sandhya', 'The night before the wedding, commonly known and celebrated as Sangeet Sandhya. As a complete marriage event planner, we make you free from the hustle-bustle of marriage and can arrange choreographers, dance groups, music bands, anchors, comedians and celebrities for the event.', 10000, 'pimage/1693151106wed5.jpg', '2023-08-27'),
(5, 1, 'Mehendi Function', 'We provide an all encompassing plan to conduct this ceremony keeping with the traditions and practices followed by our clients. From selecting and decorating the venue to going around the whole hog for shopping for clothes, jewellery, arranging professional folk artists for the song and dance accompanying such events, the food on offer etc are attended to in a detailed manner.', 20000, 'pimage/1693151207wed6.jpg', '2023-08-27'),
(6, 2, ' Conference & Seminars', 'We at FUSION manage all company event management programs especially Conferences and Seminars. You can expect all conference management from our team of event organizers.', 52000, 'pimage/1693151282co1.jpg', '2023-08-27'),
(7, 2, 'Product Launch', 'Our event management corporate planners assist businesses in organizing product launch events successfully. From planning to execution, we ensure everything we do is targeted to your end goal.', 60000, 'pimage/1693151356co2.jpg', '2023-08-27'),
(8, 2, 'Exhibitions', 'An exhibition is the one way to highlight the ideas/sculptor/selection of Items/art piece or other products. Every exhibition has its unique proposition &amp; theme, based on the concept of the exhibition. Indoor exhibition, Outdoor exhibition, Theme Pavilion, Dome exhibition. Aa a corporate event planner we help you.', 56000, 'pimage/1693151458co3.jpg', '2023-08-27'),
(9, 2, 'Dealer Meet', 'Our corporate event organisers assist you to hold Dealer meetings and other business meetings that require proper setup, right from booking a relevant place, to doing felicitation, etc.', 20000, 'pimage/1693151515co4.jpg', '2023-08-27'),
(10, 3, 'Birthday Decor', 'We decorate the event location with beauty and elegance. Our event organizers use their creativity on balloon accessories and paper decorative materials, and other items to light up the event hall in grand beauty.', 54685, 'pimage/1693151867bir.jpg', '2023-08-27'),
(11, 3, 'Fun Etables', 'You can add fun eatables in your birthday menu by letting us know. From Ras Malai and Dhokla to candies and flavored drinks we arrange everything you need.', 25045, 'pimage/1693151933b6.jpg', '2023-08-27'),
(12, 3, 'Kids zone', 'Kids Zone is a place that is full of liveliness, lots of activities, food, games, and amusement events. Kids are always eager to go out and have some fun be it theme parks or adventurous places.We design kids zone according to the taste of children like Jumping Castle, Trampoline, Bungee Jumping, Bull Riding, Toddlers Zone, Slider, Swings, Toy Train etc..', 25015, 'pimage/1693152028b4.jpg', '2023-08-27'),
(13, 3, 'Return Gifts', 'Now you can send return gifts to your family and friends who showed their love and blessings for your birthday boys and girls. We arrange relevant return gifts for the guests as per your choice.', 25400, 'pimage/1693152122b7.jpg', '2023-08-27'),
(14, 4, 'Live Music', 'Hiring a live band or musicians can bring energy and excitement to the celebration. They can perform a mix of popular songs, engage with the guests, and keep the dance floor lively. Consider the genre of music that suits your tastes and the preferences of your guests.', 10000, 'pimage/1693152543music2.jpg', '2023-08-27'),
(15, 4, 'Singers & Musicians', 'we have singers with the sweetest voice that can sing a variety of songs ranging from American to Indian. Choose from Soloists, Duets, or a full 8 piece Band with 2 singers to perform any song you want to make sure your party is perfect!An Indian sub-genre of rock exists that focuses on blending traditional Indian styles of music with rock music.', 205000, 'pimage/1693152610mu3.jpg', '2023-08-27'),
(16, 4, 'Dj & Bands', 'A skilled DJ can create a seamless flow of music, catering to different musical tastes and keeping the party going. They can mix tracks, take requests, and create a vibrant atmosphere on the dance floor. Make sure to communicate your preferred genres and specific songs in advance.', 50000, 'pimage/1693152669mu4.jpg', '2023-08-27'),
(17, 4, 'Dance Group', '<p>Our corporate event organisers assist you to hold Dealer meetings and other business meetings that require proper setup, right from booking a relevant place, to doing felicitation, etc.</p>', 760000, 'pimage/1693152719mu5.jpg', '2023-08-27'),
(18, 4, ' Celebrity Management', 'Our team of celebrity management deal with a celeb Promotional Events for a particular Film or Product launch, Store launch, Ribbon-Cutting Ceremony, Award Shows, campaigning, whole Endorsement, Celebrity Parties or Weddings where Celebrities are the Center of Attraction for their style and simplicity.', 50000, 'pimage/1693152775mu6.jpg', '2023-08-27'),
(19, 5, ' Baby Shower', 'Let your hearts be filled with love and welcome cutie into the world with plenty of smiles and love. Planning a baby shower with various amazing events like games, food, and theme decoration. We at FUSION take this responsibility so that you can enjoy the day and receive lots of love, wishes, and gifts.', 64000, 'pimage/1693152859sp4.jpeg', '2023-08-27'),
(20, 5, 'Anniversary Party', 'The new year is a great occasion to welcome the upcoming year with new motives, goals, and vision to have a better future. We at FUSION ensure you get the right celebration for the new year eve with lots of dance, food, drinks and event activities.', 50000, 'pimage/1693152913sp5.jpg', '2023-08-27'),
(21, 5, 'New Year Party', 'Kids Zone is a place that is full of liveliness, lots of activities, food, games, and amusement events. Kids are always eager to go out and have some fun be it theme parks or adventurous places.We design kids zone according to the taste of children like Jumping Castle, Trampoline, Bungee Jumping, Bull Riding, Toddlers Zone, Slider, Swings, Toy Train etc..', 524000, 'pimage/1693153006spe2.jpg', '2023-08-27'),
(22, 5, 'Christmas Party', 'christmas parties are a great way to get family, friends, and coworkers together to celebrate the holiday season. If you are planning a Christmas party, you may be feeling the stress of coordinating and managing the event. so give yourself a relief and handover it to us. we can do it in the best way.', 54000, 'pimage/1693153111chri.jpg', '2023-08-27'),
(23, 5, 'Reception Ceremony', 'Reception ceremony has its own importance in Indian culture and for that, we at FUSION organize your reception function in a great ambience. We assist you in everything you need for the reception including DJ Night, Food, beverages, and other necessities at your wish.', 45212, 'pimage/1693153320sp6.jpeg', '2023-08-27');

-- --------------------------------------------------------

--
-- Table structure for table `contect`
--

CREATE TABLE `contect` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `feedback` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contect`
--

INSERT INTO `contect` (`id`, `name`, `email`, `phone`, `feedback`) VALUES
(1, 'priya', 'priya12@gmil.com', 1234567891, 'this is vaery good emkfgvj fhg ifdugh vndfjkvh sdifghiusdg vjdsbcbjsofksjdfh aeriyew iryeiwndf eoa [oeijt gdprgh raprtdj jpdsgyvriugy tyrh haihtripeghveiugnyrhgh greihnerigh'),
(2, 'bhoomika', 'bhk@gmail.com', 1234567891, 'this is vaery good emkfgvj fhg ifdugh vndfjkvh sdifghiusdg vjdsbcbjsofksjdfh aeriyew iryeiwndf eoa [oeijt gdprgh raprtdj jpdsgyvriugy tyrh haihtripeghveiugnyrhgh greihnerigh'),
(3, 'Pooja', 'poojs12@gmial.com', 256820041, 'this is vaery good emkfgvj fhg ifdugh vndfjkvh sdifghiusdg vjdsbcbjsofksjdfh aeriyew iryeiwndf eoa [oeijt gdprgh raprtdj jpdsgyvriugy tyrh haihtripeghveiugnyrhgh greihnerigh'),
(4, 'janvi', 'janvi@gmail.com', 2147483647, 'hidfnsf fjeiofj wae fewhf a;sdjfh dhf');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `uid` varchar(100) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tname` varchar(100) NOT NULL,
  `total_price` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `guest` varchar(50) NOT NULL,
  `payment_method` varchar(100) NOT NULL,
  `mobile` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `book_on` date NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `uid`, `fname`, `email`, `tname`, `total_price`, `start_date`, `end_date`, `guest`, `payment_method`, `mobile`, `address`, `city`, `state`, `book_on`, `status`) VALUES
(1, '1', ' root', 'poojs12@gmial.com', 'Wedding Event', 'RS 157500/-', '2023-08-30', '2023-09-05', '150-174', 'cash on delivery', 97985321, 'jhgutt76t7v767 6ytk vytu', 'dvd', 'fdgnery', '2023-08-28', 'pending'),
(2, '1', ' root', 'poojs12@gmial.com', 'color theme', 'RS 27300/-', '2023-08-30', '2023-08-30', '150-174', 'cash on delivery', 97985321, 'jhgutt76t7v767 6ytk vytu', 'cghtdh', 'fdgnery', '2023-08-28', '0'),
(3, '1', ' root', 'poojs12@gmial.com', 'Wedding Event', 'RS 157500/-', '2023-09-21', '2023-09-23', '150-174', 'cash on delivery', 97985321, 'jhgutt76t7v767 6ytk vytu', 'ergregr', 'fvfrgrwge', '2023-09-01', '1'),
(4, '1', ' root', 'poojs12@gmial.com', 'Wedding Event', 'RS 157500/-', '2023-09-02', '2023-09-04', '0-49', 'cash on delivery', 97985321, 'jhgutt76t7v767 6ytk vytu', 'jamnager', 'gujrat', '2023-09-01', '0'),
(5, '1', ' root', 'poojs12@gmial.com', 'Dealer Meet', 'RS 20000/-', '2013-05-25', '2013-05-13', '0-49', 'cash on delivery', 97985321, 'jhgutt76t7v767 6ytk vytu', 'mumbai', 'maharastra', '2013-05-10', '1');

-- --------------------------------------------------------

--
-- Table structure for table `theme`
--

CREATE TABLE `theme` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `themename` varchar(200) NOT NULL,
  `tdetails` varchar(2500) NOT NULL,
  `tprice` int(11) NOT NULL,
  `timg` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theme`
--

INSERT INTO `theme` (`id`, `cid`, `themename`, `tdetails`, `tprice`, `timg`) VALUES
(1, 1, 'Color Based theme', 'A wedding color scheme, also known as a wedding color palette, is a selection of different colors used in every element of your wedding day celebration, such as your attire, wedding flower centerpieces, invitations, table linens, and wedding cake design.', 40000, 'timage/1689770924cowed.jpg'),
(2, 1, 'Carnival theme', 'A carnival-themed event requires over-the-top decorations and exciting features that let all the guests know exactly what type of event they are attending. Posters and props are a great way to get guests in the carnival spirit and to transform a blank space into a carnival extravaganza.', 32000, 'timage/1689771022carwe.jpg'),
(3, 1, 'Vintage theme', 'Vintage is considered old-fashioned for many people. But it also works in a different way: The modern vintage wedding is a combination of the past and the present. If you like the old-fashioned style, but still want to integrate a modern touch, this wedding motto is perfect for you.', 35000, 'timage/1689771083winw.jpg'),
(4, 1, 'Farm Fastival', 'The idea of a festival-themed wedding is to re-create the whimsical atmosphere and aesthetics of a live music festival - think Glastonbury or the Secret Garden Party - mixed with elements of a more traditional bohemian or vintage themed wedding.', 20000, 'timage/1689771190fawed.jpg'),
(5, 1, 'Beach theme', 'You can decorate the room with beach towels, umbrellas, sand, seashells or anything else one could see at the beach. Everyone can wear beach attire, sandals, and even funky sunglasses. A good choice of background music will add to the mood; maybe steel drums or a Beach Boys tape.', 45000, 'timage/1689771277beach1.jpg'),
(6, 1, 'Green Garden', 'Ideas for simple greenery wedding decor include hanging plants, wreathes, potted plants, backdrops adorned with greenery and of course, nature themed centerpieces. Your guests will love the idea of nature inspired wedding decorations, no matter the wedding theme or venue.', 35000, 'timage/grwedd.jpg'),
(7, 1, 'Fairytail theme', 'Whether that be to protect a friend, protect the future, or save the country, the Fairy Tail guild will always fight for what they believe in. No matter what you are fighting for, as long as you believe in your cause, you should have no fear. Don not give up before you even try.', 25000, 'timage/1689771760fwed.jpg'),
(8, 1, 'Western theme', 'Westerns often stress the harshness and isolation of the wilderness, and frequently set the action in an arid, desolate landscape. Western films generally have specific settings, such as isolated ranches, Native American villages, or small frontier towns with a saloon.', 25000, 'timage/1689771849wewed.jpg'),
(9, 1, 'Royal theme', 'Lavish yet elegant wedding decor is the hallmark of a royal wedding. This theme is best represented by rich gold accents, delicate scrollwork and dashes of rich shades like royal blue or amethyst. Dripping arrangements of pure white and blush flowers are best off-set by the powerful gold accenture.', 25000, 'timage/1689772163rwed.jpeg'),
(10, 1, 'Lucknawi theme', 'Choosing a theme you love will not only make your wedding an enjoyable and memorable experience for yourself, but, also for your guests too. Your guests are more likely to remember your wedding if you requested they attend wearing costumes or your included unusual styling elements and decorations on the day.', 25000, 'timage/1689772211lwed.jpg'),
(11, 1, 'Rajsthani theme', 'Palla and Janev are two of the most fascinating traditions of Rajasthani weddings. In Janev ceremony, a groom wears a saffron color robe and a holy thread known as the Janev while performing the Havan for a seamless and happy nuptial life.', 28000, 'timage/1689772272rawed.jpg'),
(12, 1, 'Southern theme', 'On the wedding day, the groom takes part in Dev Karya by visiting nearby temples to seek blessings. The bride and groom participate in Var Puja, Mandap puja, Jaimala, Saptapadi, Dahreherdu, Vidai, and Griha Pravesh. Their wedding is celebrated with a playful Okhli ceremony of games and customs.', 25000, 'timage/1689772329swed.jpg'),
(20, 2, 'color theme', 'The theme-color meta tag provides a way to suggest a color that browsers should use to customize the display of the page or of the surrounding user interface. For example, browsers might use the color for the pages title bar or use it as a color highlight in a tab bar or task switcher.', 26000, 'timage/1689772616cotheme1.jpg'),
(21, 2, 'Beach theme', 'You can go old school for a beachy party theme, such as a mermaid party with lots of sparkles, a pirate party with treasure and adventure, or a tropical luau with all the trimmings, or you can try something different with off-the-beaten-path beachy party ideas.', 2600, 'timage/1689772829cotheme2.jpg'),
(22, 2, 'Classic Theme', 'Corporate theme allows you to take full control of your site design by being able to customize everything from Google fonts, background images and colors, the site logo, the menu navigation design, and even sidebar widgets, without touching a single line of code.', 25000, 'timage/1689772873cotheme3.png'),
(23, 2, 'Western theme', 'Westerns often stress the harshness and isolation of the wilderness, and frequently set the action in an arid, desolate landscape. Western films generally have specific settings, such as isolated ranches, Native American villages, or small frontier towns with a saloon.', 25000, 'timage/1689773046cotheme5.jpg'),
(24, 2, 'Harmonic Elegance ', 'Harmonic is a unique theme that really lets your content sing. Maybe you are a band looking to make your home on WordPress.com. Perhaps you are a photographer looking to showcase your work. You may be a blogger who just wants a theme that looks a bit distinctive.', 25000, 'timage/cotheme9.jpg'),
(25, 2, 'MoonLight Theme', 'Credit: NASA Scientific Visualization Studio. The Moon does not make its own light —”moonlight” is actually reflected sunlight. At any moment, half of the Moon is brightly sunlit (this is the day side). The other half is in the dark (this is the night side).', 25000, 'timage/1689773443cotheme10.jpg'),
(26, 2, 'Black Theme', 'Dark mode is a display setting that uses light-colored fonts, icons, and other design elements on a dark background. This high-contrast display transforms the user interface&nbsp; of websites, apps, and more from a traditional light-themed into this darker version.', 25000, 'timage/1689773483cotheme11.jpg'),
(27, 2, 'Gala Dinner Theme', 'A gala dinner is a large formal or semi-formal event, including a drinks reception, a sit-down dinner, and dancing. There will usually be some form of presentation, speech, awards ceremony, or announcement between dinner and dancing.', 25000, 'timage/1689773526cotheme12.jpg'),
(28, 3, 'Kids Theme', 'Choosing a party theme is a great way to bring all the elements of your party together, keeping everything unified, and create a professional impression. It also an opportunity to introduce some fun to the festivities and let your imagination take over when it comes to decoration, entertainment and more.', 25000, 'timage/1689773712b3.jpg'),
(29, 3, 'First Birthday', 'Whether you decide to plan a big bash or keep things more intimate, honing in on a theme can help make the party feel all the more special.', 25000, 'timage/1689773778fir.jpg'),
(30, 3, 'Theme by Color', 'What a color-themed party? In a nutshell, a color-themed party is pretty much what it sounds like. It a party that centers around designated colors.', 25000, 'timage/1689773851bir2.jpg'),
(31, 3, 'Theme by Character', 'Petey and Meg are the first characters introduced in The Birthday Party. They are the owners of the boarding house in which Stanley lives. Petey is an older man who stacks deck chairs for a living. He lives a very monotonous lifestyle, based on routine.', 25000, 'timage/1689773928b8.jpg'),
(32, 3, 'Boys Theme', 'Game themed birthday party decorations for boys and girls with Plant Balloon,Tableware,Paper Cup,Tablecloth, Backdrop Super Movie Theme Party.', 132142, 'timage/1689773982birthday4.jpg'),
(33, 3, 'Girls Theme', 'Create a \"Happy Birthday\" bunting for a wall or a cake, fill balloons with confetti and pinatas with candy, and top tables with runners and centerpieces, all with a uniquely creative touch to make them your own.', 25000, 'timage/1689774024b1.jpg'),
(34, 4, 'color theme', 'Dark, cool colors create a sophisticated look, soft pastels make the tone seem more romantic, and bright, warm colors build energy and intensity. Consider how your color choices will affect the tone of your party and the mood of your guests.', 50000, 'timage/1689774190mutheme1.jpg'),
(35, 4, 'Beach theme', 'Pleasant musical moments engage the brain pleasure system.Listening to music often evokes intense emotions. Much of music pleasure comes from the patterns of melody, rhythm, and sudden changes. Musical pleasure, like food and sex, motivates us to engage in music.', 50000, 'timage/1689774215mutheme2.jpg'),
(36, 4, 'Classic Theme', 'Event management club works to execute the events, festivals, seminars, workshops concerts, or conventions and annual fests through meticulous planning.', 25000, 'timage/1689774301mutheme3.jpg'),
(37, 4, 'Digital Theme', 'From Longman Dictionary of Contemporary EnglishRelated topics: Leisure ˈtheme ˌparty noun [countable] British English a party where everyone has to dress in a particular way connected with a particular subject a Wild West theme party.', 250000, 'timage/1689774345mutheme6.png'),
(38, 5, 'color theme', 'Stick with neutral colors—shades of black, gray, and white—to create a modern, sleek atmosphere. There a reason black and white color palettes are a classic choice.', 132142, 'timage/1689774509stheme1.jpg'),
(39, 5, 'Greand MaskBall Theme', 'Use drapes of silk or velvet to cover up modern household items. Fill glass vases with feathers and beads. Hang masks on walls or create centerpieces with them. Sprinkle glitter and sequins on tables and countertops.', 45656, 'timage/1689774570stheme3.jpg'),
(40, 5, 'Coktail Theme', 'Choose an era, like the Roaring 20s or totally awesome 80s party or 90s theme party. Or consider giving it a creative party theme, like “under the sea” or “all white party.” Other popular cocktail party themes include murder mystery dinner parties and tiki time.', 25000, 'timage/1689774627stheme6.jpg'),
(41, 5, 'Traditional Theme', 'Traditional style often includes silk, linen and velvet upholstery and window coverings in damask, florals, stripes and plaids with ornately detailed dark wood, inspired by 18th and 19th century designs. Layered in color and texture, traditional style interiors bring a sense of history and glamour to a space.', 25000, 'timage/1689774671stheme7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(8) NOT NULL,
  `mobile` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(250) NOT NULL,
  `uimage` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `uname`, `email`, `password`, `mobile`, `gender`, `address`, `uimage`) VALUES
(1, 'root', 'poojs12@gmial.com', '123', 234567891, 'male', 'jfh reuht tu b43tj4p3k vpq34otivit', 'uimage/1690451680bts.jpeg'),
(3, ' janvi', 'hnu@gmil.com', '123', 12365478, 'female', '', 'uimage/1690534047beach1.jpg'),
(4, ' mansee', 'm1@gmail.com', '789', 1234567879, 'female', 'kjvnknvknvnvvviehiehhefiehfihefihef', 'uimage/1690699827background7.jpg'),
(5, '', '', '', 0, '', 'woghioghr grigrg otot', 'uimage/1691070184'),
(6, 'bhk', 'bhk@gmail.com', '123', 2147483647, 'female', 'k3lj 34oqyr vtyiuhiurt v34iytt', 'uimage/16913934711690375969148.jpg'),
(7, 'priya', 'priya12@gmil.com', '4568', 1236547891, 'female', 'efjogjewjgewjgwojgew', 'uimage/1691492284entertainment.jpg'),
(8, 'priya', 'priya12@gmil.com', '432254', 1234567890, 'female', '', 'uimage/1691492413background7.jpg'),
(9, 'bhoomika', 'poojs12@gmial.com', '13246', 1234567890, 'female', 'jhffuyefu ef8efte', 'uimage/1691492772entertainment2.jpg'),
(10, 'priya', 'poojs123@gmial.com', '12345678', 1234567890, 'female', 'dfghyre', 'uimage/1691663818entertainment.jpg'),
(11, 'bhoomika', 'bhk123@gmail.com', 'A@s10', 1236547891, 'male', 'gfghbniohbor;ig s;', 'uimage/1692085024Elite Events.jpg'),
(12, 'pooja', 'jhg@gmial.com', 'Aferf@12', 1234567893, 'male', 'fgvr8egyre87t', 'uimage/1692085133corporate 1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catpackages`
--
ALTER TABLE `catpackages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contect`
--
ALTER TABLE `contect`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theme`
--
ALTER TABLE `theme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `catpackages`
--
ALTER TABLE `catpackages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `contect`
--
ALTER TABLE `contect`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `theme`
--
ALTER TABLE `theme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
