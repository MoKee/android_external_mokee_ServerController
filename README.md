# 如何贡献机型下载界面数据
 ——————————————————

#### 准备
* [gerrit](http://review.mfunz.com)账号
* [mokee open source源码](http://github.com/mokee)
* 一台能上网的linux或mac
* ssh key

－－－－－－－－－－－－－－－－－－

##	一 、准备折腾环境
* <font size=5 color=#999999>1、获取gerrit帐号</font>
	* 进入[Mokee gerrit review](review.mfunz.com),右上角点击sign in，可使用github，gitcafe，google等帐号登陆![demo11](http://7xo4qi.com1.z0.glb.clouddn.com/demo11.tiff)
	* 再点击右上角头像，settings，设置自己的username和email address![demo12](http://7xo4qi.com1.z0.glb.clouddn.com/demo12.tiff)
* <font size=5 color=#999999>2、git配置</font>
	`git config --global user.name`
	`git config --global review.review.mfunz.com.username`
	`git config --global user.email`

> 举例说明：
<font size=2>你的PC的用户名，也就是xxx@localhost前面是xxx
那么你git config --global user.name <username> 就得是 xxx
git config --global user.email <email>就得是xxx@xxx
Gerrit的帐号必须是xxx
Gerrit邮箱必须是xxx
不是怎么办？改呗~
最终效果如下：</font>
![mac icon](http://7xo4qi.com1.z0.glb.clouddn.com/example.png)

* <font size=5 color=#999999>3、添加ssh key</font>
  *	生成ssh key
  `ssh-keygen -t rss -c email`
  >	email和上面git设置的邮箱保持一致
  * 进入生成目录(一般为~/.ssh)，打开id_rsa.pub，复制文件中的ssh-keygen
  *	进入[review](review.mfunz.com),右上角打开settings，找到ssh public keys，点击添加（add key，将复制的内容复制进去，再点击add就添加成功啦。示例![demo10](http://7xo4qi.com1.z0.glb.clouddn.com/demo10.tiff)

* <font size=5 color=#999999>4、执行git clone,将需要的代码库同步</font>
	`git clone ssh://yourusername@review.mfunz.com:29418/MoKee/android_external_mokee_ServerController && scp -p -P 29418 yourusername@review.mfunz.com:hooks/commit-msg android_external_mokee_ServerController/.git/hooks/`  
>    yourusername填写在review.mfunz.com上填写的username
>    ![demo8](http://7xo4qi.com1.z0.glb.clouddn.com/demo8.tiff)




##	二、更新机型数据
* <font size=5 color=#999999>1、素材准备</font>
	 1⃣️机型图片
	 ![cancro demo](http://7xo4qi.com1.z0.glb.clouddn.com/cancro.png)
	 (推荐分辨率：109*124)

	2⃣️机型参数
>  处理器(cpu):
   内存容量(ram):
   存储容量(rom):
   电池容量(battery):
   屏幕信息(display):
   处理器架构(cpuarch):


*  <font size=5 color=#999999>2、更新device.php和图片</font>
	* ①进入</font> <font color=#FF0000>*源码目录/external/mokee/ServerController*</font> 打开device.php（建议使用sublime，notepad++等)

	* ②在$devices_info中找到自己机型的代号
>   'model'是机型代号 'name'是机型全称 下步请使用'model'
	![demo3](http://7xo4qi.com1.z0.glb.clouddn.com/demo3.jpg)

	* ③在$hardware_info中更新自己的机型，代码规范如下

>	     // ('model name'填写上步获取的‘model’，cpu后面的''填写cpu型号)
		'model name' => array('cpu' => '',
 	   // (ram后面的''填写机器内存大小)
 	     'ram' => '',
 	   // (rom后面的''填写机器的存储容量)
 	   	 'rom' => '',
 	   //  (battery后面的''填写机器的电池容量)
         'battery' => '',
       //  (display后面的''填写机器的屏幕信息)
  	     'display' => '',
  	   //  (cpuarch后面的''填写处理器架构)
         'cpuarch' => ''),
<font size=6>效果如高亮部分</font>
![demo5](http://7xo4qi.com1.z0.glb.clouddn.com/demo7.tiff)

  ④加入图片
	进入 <font color=#FF0000>*/static/images/*</font>,将已准备好的机型图片重命名为model.png
>  <font size=1.5>// *(model是前面获取的机型代号，且图片必须是<font size=4>PNG PNG PNG</font>)*</font>

##	三、上传，提交代码审核

* <font size=5 color=#999999>修改成功后提交gerrit服务器审核</font>
	`git add <path>	`
	>path是你添加图片文件或者修改的device.php文件的路径，一般通过git status可以看到

	`git commit -a -m`
	>修改内容说明，请使用英文

* <font size=5 color=#999999>上传到服务器等待审核</font>	`git push ssh://<username>@review.mfunz.com:29418/android_external_mokee_ServerController HEAD:refs/for/master`
>    Username填写在review.mfunz.com上填写的username
>    ![demo8](http://7xo4qi.com1.z0.glb.clouddn.com/demo8.tiff)

# 到此为止，所有的工作已经做完，如果修改符合规范，则会合并至主代码分区，不久你就可以看到自己的贡献啦
撰写者：ray
微博：[329ray](http://weibo.com/577551284)(若发现文档中的不足或有问题，可提交issue或私信我)