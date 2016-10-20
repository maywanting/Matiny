哎……重写个博客系统有种要考虑很多的感觉

- 考虑要点
1、多语言支持
2、多推送支持比如文章存哪，图片存哪

- 命令行模式
matiny new 文件名  创建markdown文件,自带
matiny construct (文件名) 生成html页面,自带

matiny项目文件
-source 文章原文，还有一些对于文章的显示的配置(系统自带)
|-2016
||-10
|||-27
||||-helloword
|||||-helloword.md (默认必须有，包含文章的原文，mardown形式)
|||||-helloword.info (基本信息插件，包含文章的基本信息，注1)
|||||-helloword.comment (评论插件)

-plugin 每个插件实现
|-md (系统自带)
||-mdNew.php (继承console/new.php) 创建source目录和文件
||-mdConstruct.php
|-info
||-new (系统自带，创建的时候运行啥)
||-construct

-config 配置
|-plugin.json

- console
|- console.php (所有console的父类) 参数，run，error的处理，success的处理
|- new.php(所有plugin中new的父类，继承console.php) 规定参数是什么，该命令的说明，run的处理，error的处理，success的处理
|- construct.php
-core (核心)后期使用者不能动
|-console.php(功能：读取目前所有插件的列表(config/plugin.json),里面配置所有的插件情况，例如new，如果md的new为true，则运行(plugin/md/new.php)内代码，一个一个运行)

-request (请求处理)
|

-public (生成的显示页面)
|

-theme (主题)
|

-install.sh (安装文件，默认装入martin命令)

#plugin.json
'md':{
    'new':true,
    'construct':true,
},
'info':{
    'new':true,
    'construct':true,
},
'comment':{
    'new':true,
    'construct':true,
}
