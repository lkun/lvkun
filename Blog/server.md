windows 7 64下 IIS 7.5安装配  此博文包含图片	 (2011-04-10 16:17:52)转载▼
标签： 杂谈	分类： 电脑知识
win7的IIS安装配置比较麻烦，研究了一下午才搞个明白，希望对看到的人有用。
  
  
  原文在：http://blog.sina.com.cn/s/blog_4ff4a5180100qkm9.html   这有图片说明，更形象点。
一、 windows 7下 IIS 7.5安装配置
   一般人说win7自带IIS，这个是没错，不过不准确，win7家庭版是不带IIS也无法安装的，如果你是win7家庭版，放弃安装IIS的想法吧，或者把 win7家庭版升级升旗舰版，升级办法看另一篇日志：win7家庭版如何升级到专业版和旗舰版   
 
  安装办法：
1、进入控制面板 --> 打开或关闭Windows功能
windows <wbr><wbr>7的IIS安装配置及连接access数据库问题
2、 选择如下所示两项，点击安装完成
 
windows <wbr><wbr>7的IIS安装配置及连接access数据库问题

 下面是配置
3、进入控制面板 -->管理工具 -->双击 Internet信息服务（IIS）管理器
4、选择下图左边的 Default Web Site，并双击右边的 ASP 的选项
 windows <wbr><wbr>7的IIS安装配置及连接access数据库问题
5、启用父路径，默认为False 改为True
windows <wbr><wbr>7的IIS安装配置及连接access数据库问题
6、选择配置站点右边侧的高级设置，选择站点存放路径
windows <wbr><wbr>7的IIS安装配置及连接access数据库问题

windows <wbr><wbr>7的IIS安装配置及连接access数据库问题

7、保存后返回，选择右侧边绑定，然后选择编辑 ，修改网站端口，80，8081或其他端口
windows <wbr><wbr>7的IIS安装配置及连接access数据库问题
 
windows <wbr><wbr>7的IIS安装配置及连接access数据库问题

8、网页配置界面，选择默认文档，添加index.asp
windows <wbr><wbr>7的IIS安装配置及连接access数据库问题
9、配置完成，访问 http://localhost/  80端口 或者 http://localhost:8081/ 8081端口 等就可以看到

二、 windows 7下 IIS 7.5 连接access数据库问题
 
如果你安装某些asp 的cms,安装失败信息提示为：没有注册类这样的信息，问题就出在了64位的操作系统和32位的数据库不能兼容，解决办法另一个日志可见。
 
传送门：win7 64位下IIS7.5无法连接access 数据库解决办法

Win7 64bit下IIS7.5无法连接Access数据库的解决方案 (2010-05-24 16:23:20)
转载
标签：
win7
iis
access
it
分类： it
打开IIS管理器，查看网站的高级属性
Win7 64bit下IIS7.5无法连接Access数据库的解决方案
也可以在这里直接修改使用的应用程序池。强调一下，无论使用哪个应用程序池都是可以成功启用Access的
Win7 64bit下IIS7.5无法连接Access数据库的解决方案

返回，点击左边应用程序池节点，查看刚才使用的应用程序池的高级属性（这里是DafaultAppPool)
Win7 64bit下IIS7.5无法连接Access数据库的解决方案
启用32位应用程序选项设为True
Win7 64bit下IIS7.5无法连接Access数据库的解决方案
IIS的设置到此结束，一般到这个地方就没什么问题了。
 
接下来修改一些文件夹的访问权限
C:\Windows\temp （典型路径，请根据实际安装路径确定）
C:\Windows\ServiceProfiles\NetworkService\AppData\Local\Temp
给上面两个文件夹添加Authenticated Users的完全访问权限
Win7 64bit下IIS7.5无法连接Access数据库的解决方案
