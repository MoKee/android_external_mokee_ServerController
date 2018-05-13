# 如何贡献机型下载界面数据
 ——————————————————

#### 准备
* [gerrit](https://mokeedev.review)账号
* 一台能上网的linux或mac
* ssh key（下面会说明如何配置）

－－－－－－－－－－－－－－－－－－

##	一 、准备折腾环境
* <font size=5 color=#999999>1、获取gerrit帐号</font>
	* 进入[Mokee gerrit review](mokeedev.review),右上角点击sign in，可使用github，gitcafe，google等帐号登陆![demo11](http://7xo4qi.com1.z0.glb.clouddn.com/demo11.tiff)
	* 再点击右上角头像，settings，设置自己的username和email address![demo12](http://7xo4qi.com1.z0.glb.clouddn.com/demo12.tiff)
	* 找到左边最下面agreement,进入New Contributor Agreement，选择Individual，拖到最下面，输入I AGREE，确定。即可获得推送权限
	>最终效果：![demo20](http://7xo4qi.com1.z0.glb.clouddn.com/20.tiff)

<font size=5 color=#999999>
2、git配置</font>

	`git config --global user.name XXX`

	`git config --global review.mokeedev.review.username XXX(与review的username一致)`

	`git config --global user.email XXX@XXX.com`


最终效果如下：</font>
![mac icon](http://7xo4qi.com1.z0.glb.clouddn.com/example.png)

* <font size=5 color=#999999>3、添加ssh key</font>
  *	生成ssh key
  `ssh-keygen -t rsa -C <email>`
  >	email和上面git设置的邮箱保持一致
  * 进入生成目录(一般为~/.ssh)，打开id_rsa.pub，复制文件中的ssh-keygen
  *	进入[review](mokeedev.review),右上角打开settings，找到ssh public keys，点击添加（add key，将复制的内容复制进去，再点击add就添加成功啦。示例![demo10](http://7xo4qi.com1.z0.glb.clouddn.com/demo10.tiff)

* <font size=5 color=#999999>4、执行git clone,将需要的代码库同步</font>

	`git clone ssh://<username>@mokeedev.review:29418/MoKee/android_external_mokee_ServerController && scp -p -P 29418 <username>@mokeedev.review:hooks/commit-msg android_external_mokee_ServerController/.git/hooks/`
>    username填写在mokeedev.review上填写的username

![demo8](http://7xo4qi.com1.z0.glb.clouddn.com/demo8.tiff)




##	二、更新机型数据
* <font size=5 color=#999999>1、素材准备</font>

	 1⃣️机型图片
	 ![cancro demo](http://7xo4qi.com1.z0.glb.clouddn.com/cancro.png)
	 (推荐分辨率：218*248)

	2⃣️机型参数
>  处理器(cpu):
>
>  内存容量(ram):
>
>  存储容量(rom):
>
>  电池容量(battery):
>
>  屏幕信息(display):
>
>  处理器架构(cpuarch):


*  <font size=5 color=#999999>2、更新device.php和图片</font>
	* ①进入</font> <font color=#FF0000>*源码目录/external/mokee/ServerController*</font> 打开device.php（建议使用sublime，notepad++等)

	* ②在$devices_info中找到自己机型的代号
>   'model'是机型代号 'name'是机型全称 下一步请使用'model'的名称
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

	`git add --all`

	`git commit`
	>修改内容说明，请使用英文

* <font size=5 color=#999999>上传到服务器等待审核</font>

`git push ssh://<username>@mokeedev.review:29418/MoKee/android_external_mokee_ServerController HEAD:refs/for/master`
>    Username填写在mokeedev.review上填写的username
>    ![demo8](http://7xo4qi.com1.z0.glb.clouddn.com/demo8.tiff)

# 到此为止，所有的工作已经做完，如果修改符合规范，则会合并至主代码分区，不久你就可以看到自己的贡献啦
撰写者：ray

微博：[329ray](http://weibo.com/577551284)(若发现文档中的不足或有问题，可提交issue或私信我)

论坛支持：[魔趣论坛](https://bbs.mokeedev.com)
