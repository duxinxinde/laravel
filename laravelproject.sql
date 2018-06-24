# Host: localhost  (Version: 5.5.53)
# Date: 2018-06-18 23:44:57
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "administrator"
#

DROP TABLE IF EXISTS `administrator`;
CREATE TABLE `administrator` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(20) NOT NULL DEFAULT '',
  `password` varchar(50) NOT NULL DEFAULT '',
  `picture` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

#
# Data for table "administrator"
#

/*!40000 ALTER TABLE `administrator` DISABLE KEYS */;
INSERT INTO `administrator` VALUES (1,'杜鑫','duxin',''),(2,'强秀敏','qiangxiumin',''),(3,'何云涛','heyuntao','');
/*!40000 ALTER TABLE `administrator` ENABLE KEYS */;

#
# Structure for table "contact"
#

DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext,
  `tel` varchar(55) DEFAULT NULL,
  `email` varchar(55) DEFAULT NULL,
  `title` text,
  `languge` text,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "contact"
#

/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;

#
# Structure for table "dynamics"
#

DROP TABLE IF EXISTS `dynamics`;
CREATE TABLE `dynamics` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `national` tinytext,
  `nationalpic` varchar(150) DEFAULT NULL,
  `text1` text,
  `text2` text,
  `text3` text,
  `text4` text,
  `text5` text,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

#
# Data for table "dynamics"
#

/*!40000 ALTER TABLE `dynamics` DISABLE KEYS */;
INSERT INTO `dynamics` VALUES (1,'澳洲动态','http://localhost/laravelproject/public/storage/uploads/K5HZoNp3IT.jpg','最新！2017世界大学综合排名Top 1000出炉！悉尼大学排名澳洲第1（世界Top 0.3%），共27所澳洲大学上榜！','收藏！澳大利亚私人医疗保险大扫盲，弄懂再去看病，可为你省下巨额医药费！','澳洲各大学Final考场都什么样？│赛马场、赛狗场、体育看台、食堂应有尽有。。。1','>噩耗！心疼留学生，澳洲政府2018“强制增加”英语考试难度！你以为考完雅思就完了？。。。','【土豪】别再羡慕别人买iPhone X啦！快来算算你一年的费用，值多少部iPhone X吧！csbsbv'),(2,'中国动态','http://localhost/laravelproject/public/storage/uploads/Ss1KKza6WL.jpg','NAATI又出大事了！你的NAATI或白读了，学生签证还可能被取消？！','【10月18号EOI战报】会计获邀恢复正常，审计75分大步前进，IT三大专业龟速获邀，非热门专业仍旧65分获邀！','非移民专业！无相关学术背景！也可移民澳洲？！……','【跟时间赛跑】详解143付费父母移民签证和103排队父母签证等待时间','逆天！这个专业移民仅需60分！并且平均年薪高达$11万+'),(3,'美国动态\n','img1/index/3.jpg','确定为v反对四人帮合同已经号较好','行业剧给日本共和国high',' 隔壁哦不过弄i工农i恶化','让他年少时是不可能麻痹哦好','违法不给啊价格v啊虽然'),(4,'法国动态','img1/index/4.jpg','而非日本和他一句，了， ','让你今天都可以','几天假6 ','后吉尔嘎可能昆山基本',' 的发表据媒体还是 ');
/*!40000 ALTER TABLE `dynamics` ENABLE KEYS */;

#
# Structure for table "emuteacher"
#

DROP TABLE IF EXISTS `emuteacher`;
CREATE TABLE `emuteacher` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `sort` varchar(25) DEFAULT '',
  `img` varchar(25) DEFAULT '',
  `teacher` varchar(25) DEFAULT '',
  `content1` varchar(25) DEFAULT '',
  `content` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

#
# Data for table "emuteacher"
#

/*!40000 ALTER TABLE `emuteacher` DISABLE KEYS */;
INSERT INTO `emuteacher` VALUES (1,'雅思名师','img1/Student.png','巍峰老师','上海外国语大学英语学博士和语言学硕士','曾在北京新东方任职口语讲师6 年，在上海东方学院任职口语和写作的主讲师5 年。巍峰老师在口语方面尤其擅长，特别是高压，短期，快速突破等方面，有7天之内带领考生的口语从5.0 到6.5 分的突破。3，4，5 月份的6 分口语班通过率为95%。'),(2,'雅思名师','img1/5.jpg','Michael老师','悉尼雅思殿堂级写作口语名师','3项9分大神。USYD教育博士, 从小在国外长大，纯正英文口语，多年钻研提升中国同学写作口语逻辑和思考。对逻辑思维解题有独特方法，熟悉考试题型动态。专于题型分析，剖析问题症结，让同学们看到题目不再慌，不用再死背题库。极具个性的Michael老师上课风趣幽默，但批改起作文可是一丝不苟。 Michael老师的班已经可以称为7分包过班。因此只要按照Michael老师的方法套路, 7分绝对是打底。'),(3,'雅思名师','img1/7.jpg','马老师','雅思教学名师','具有3 年以上的雅思教学经验。善于分析出题思路，教给学生学习雅思的技巧，能让学生在短期内获得比较明显的进步。他的讲课风趣生动，对阅读逻辑思维解题有独特方 法，熟悉考试题型动态。词汇方面能根据雅思单词分类，词汇应用，一直到英语词汇的构成法则，逐一分析雅思考试中的每一词族。'),(4,'商科名师','img1/Student.png','jigsaw','MQ商科补习教师','MQ会计传奇，当年年级第一；教學經驗豐富，精通会计各科重点考点，．上课时充滿教學熱誠，讲课生动，風趣幽默，激发学生的对会计课程的兴趣，尤其对taxtion，Auditing等领域深有研究，连很多其他学校的同学都点名要预约他的课程。'),(5,'商科名师','img1/5.jpg','Paul Chen','2012年悉尼科技大学Finance 资深 Tut','授课经验丰富，多年的教学辅导中帮助近千名同学起死回生，顺利通过考试。Paul老师以耐心，亲和力在学生群中著称，每次课前他都会详尽的为学生准备notes和辅助资料； Paul老师对金融学课题有独到分析及見解，在不需死记硬背下，让学生轻易掌握金融学的原理及思考脉络。听过他的课后，学生不仅会掌握考试技能，更能融会贯通整个课程内容，对金融产生真正的兴趣！'),(6,'商科名师','img1/7.jpg','Myranda','MQ的Finance专家','拥有超过3年的教学经验，上课逻辑清晰，能夠把枯燥的经济金融课程讲的轻松易懂。 • 讲解细腻生动，以大量考试案例分析梳理； • 教学成績卓绝，深受学生欢迎和爱戴 • 笔记条理清楚，重点明确，在短时间帮助同学迅速提高成绩；');
/*!40000 ALTER TABLE `emuteacher` ENABLE KEYS */;

#
# Structure for table "liuxueactive"
#

DROP TABLE IF EXISTS `liuxueactive`;
CREATE TABLE `liuxueactive` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(50) DEFAULT NULL,
  `title` varchar(25) DEFAULT '',
  `content` varchar(255) DEFAULT '',
  `more` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

#
# Data for table "liuxueactive"
#

/*!40000 ALTER TABLE `liuxueactive` DISABLE KEYS */;
INSERT INTO `liuxueactive` VALUES (1,'img1/immigrant/1.png','【澳洲留学】澳洲续学生签证全攻略\0','上两个月来，是学生签证过期的高峰期，很多学生因为续签问题搞的手忙脚乱，还有不少学生遭到拒签或者是错过递交签证时间甚至忘记续签，... \0','详细阅读'),(2,'img1/immigrant/2.png','【澳洲留学】申请高中流程和注意事项','背景了解： 旧政策下中国学生必须在国内完成初三之后才可以来澳洲就读高中； 新政策下中国学生最早可以在完成小学6年级或者初中预科班（相当于澳洲...   ','详细阅读'),(3,'img1/immigrant/Student.png','【澳洲留学】解析澳大利亚高中五大优势','澳大利亚是经济、科技、文化高度发展、具有全球竞争力的一流强国。其顶尖教育质量在世界上久负盛誉，授予的学位为世界各发达国家所认可。澳大利亚的中...  ','详细阅读'),(4,'img1/immigrant/1.png','【澳洲留学】澳洲留学选学校不看排名看什么？','很多学生和家长咨询的时候经常会被问到“这个学校的排名怎么样啊？”“这个学校名气大不大啊？”留学专家表示：首先，学校排名不是一概而论的，只是从... ','详细阅读'),(5,'img1/immigrant/2.png','【澳洲留学】澳洲留学读预科的六大优势','摘要：澳大利亚不仅有久负盛名的澳洲八大，还有在世界排名位居前列的其他院校，而澳洲预科就是国内高中生通往名校的一架便捷桥梁。 澳大利亚不仅有久...    ','详细阅读'),(6,'img1/immigrant/Student.png','【澳洲留学】澳洲留学签证主要限制条款详解','1. 8105条款：打工时间限制 持有学生签证，意味着留学生自动获得打工的许可，但是在开课期间你每2周总共最多只能工作40小时。如果学生打工...   ','详细阅读'),(7,'img1/immigrant/1.png','【澳洲留学】【Emu 移民留学】签证不贴签，是否暗','自 2012年10月1日起，澳大利亚现代化的电子签证系统开始了新的革命，赴澳无需办理护照贴签手续，即能确认你的签证状态和你在澳洲的权利。这对...  ','详细阅读'),(8,'img1/immigrant/2.png','【澳洲留学】你是澳洲陪读签证(580)的合法监护人','海外学生持学生签证在澳洲读书，如果未满18岁，就可以申请一种叫做 澳洲陪读签证（澳洲580签证）Student Guardian visa ...','详细阅读');
/*!40000 ALTER TABLE `liuxueactive` ENABLE KEYS */;

#
# Structure for table "liuxueintroduce"
#

DROP TABLE IF EXISTS `liuxueintroduce`;
CREATE TABLE `liuxueintroduce` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `sort` tinytext,
  `img` varchar(50) DEFAULT NULL,
  `school` tinytext,
  `docation` tinytext,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "liuxueintroduce"
#

/*!40000 ALTER TABLE `liuxueintroduce` DISABLE KEYS */;
/*!40000 ALTER TABLE `liuxueintroduce` ENABLE KEYS */;

#
# Structure for table "liuxuepic"
#

DROP TABLE IF EXISTS `liuxuepic`;
CREATE TABLE `liuxuepic` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "liuxuepic"
#

/*!40000 ALTER TABLE `liuxuepic` DISABLE KEYS */;
/*!40000 ALTER TABLE `liuxuepic` ENABLE KEYS */;

#
# Structure for table "pictures"
#

DROP TABLE IF EXISTS `pictures`;
CREATE TABLE `pictures` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `img_path` varchar(55) NOT NULL DEFAULT '',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

#
# Data for table "pictures"
#

/*!40000 ALTER TABLE `pictures` DISABLE KEYS */;
INSERT INTO `pictures` VALUES (7,'uploads/20180614/5b224b118c397.jpg'),(8,'uploads/20180614/5b224b12f33f1.jpg'),(9,'uploads/20180614/5b224b133a2e7.jpg');
/*!40000 ALTER TABLE `pictures` ENABLE KEYS */;

#
# Structure for table "signed"
#

DROP TABLE IF EXISTS `signed`;
CREATE TABLE `signed` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) DEFAULT NULL,
  `content1` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

#
# Data for table "signed"
#

/*!40000 ALTER TABLE `signed` DISABLE KEYS */;
INSERT INTO `signed` VALUES (1,'恭喜宋同学获189签证下签','2017/06/19'),(2,'恭喜刘同学获186签证下签','2017/06/13'),(3,'恭喜张女士获187签证下签','2017/06/13'),(4,'恭喜李同学获189签证下签','2017/07/19'),(5,'恭喜王同学获189签证下签','2017/07/19'),(6,'恭喜侯同学获189签证下签','2017/07/16'),(7,'恭喜赵同学获189签证下签','2017/07/15'),(8,'恭喜武同学获189签证下签','2017/07/15');
/*!40000 ALTER TABLE `signed` ENABLE KEYS */;

#
# Structure for table "teampic"
#

DROP TABLE IF EXISTS `teampic`;
CREATE TABLE `teampic` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(55) DEFAULT '',
  `cont` varchar(55) DEFAULT '',
  `contt` varchar(50) DEFAULT '',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

#
# Data for table "teampic"
#

/*!40000 ALTER TABLE `teampic` DISABLE KEYS */;
INSERT INTO `teampic` VALUES (1,'img1/index/Melbourne .jpg','墨尔本大学--University of Melbourne  ','优势科目：MBA，医科，法律'),(2,'img1/index/Newcastle .jpg','纽卡斯尔大学--University of Newcastle  ','优势科目：医学，保健，工程，护理'),(3,'img1/index/University .jpg','澳洲国立大学--Australian National University ','优势科目：工程，理科'),(4,'img1/index/Technology.png','昆士兰科技大学--Technology','优势科目：IT，法律，商科，教育'),(5,'img1/index/Queensland .jpg','昆士兰大学--University of Queensland   ','优势科目：医学，法律，商科'),(6,'img1/index/Adelaide .jpg','阿德雷德大学--University of Adelaide ','优势科目：医学，法律，工程，会计'),(7,'img1/index/Wales.jpg','新南威尔士大学--University of New South Wales ','优势科目：MBA，医'),(8,'img1/index/Australia .jpg','西澳大学--University of Western Australia  ','优势科目：医学，法律，');
/*!40000 ALTER TABLE `teampic` ENABLE KEYS */;

#
# Structure for table "videos"
#

DROP TABLE IF EXISTS `videos`;
CREATE TABLE `videos` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `v_path` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "videos"
#

/*!40000 ALTER TABLE `videos` DISABLE KEYS */;
INSERT INTO `videos` VALUES (1,'201806141.mp4');
/*!40000 ALTER TABLE `videos` ENABLE KEYS */;

#
# Structure for table "whyus"
#

DROP TABLE IF EXISTS `whyus`;
CREATE TABLE `whyus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

#
# Data for table "whyus"
#

/*!40000 ALTER TABLE `whyus` DISABLE KEYS */;
INSERT INTO `whyus` VALUES (1,'带你飞翔，，，，，'),(2,'确保签约客户高质量服务体验'),(3,'与中国驻悉尼领馆、各高校团体关系紧密'),(4,'不VS v成本DVD发那科部分'),(5,'吃饭咯很快就从v'),(6,'请问发给他回家');
/*!40000 ALTER TABLE `whyus` ENABLE KEYS */;

#
# Structure for table "yasiform"
#

DROP TABLE IF EXISTS `yasiform`;
CREATE TABLE `yasiform` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `uname` varchar(20) NOT NULL,
  `science` varchar(20) NOT NULL,
  `tel` varchar(30) NOT NULL,
  `people` varchar(20) NOT NULL,
  `day` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "yasiform"
#

/*!40000 ALTER TABLE `yasiform` DISABLE KEYS */;
INSERT INTO `yasiform` VALUES (1,'鑫鑫','英语','18191965832','100','123');
/*!40000 ALTER TABLE `yasiform` ENABLE KEYS */;

#
# Structure for table "znxs"
#

DROP TABLE IF EXISTS `znxs`;
CREATE TABLE `znxs` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "znxs"
#

/*!40000 ALTER TABLE `znxs` DISABLE KEYS */;
/*!40000 ALTER TABLE `znxs` ENABLE KEYS */;
