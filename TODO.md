# 目前进度安排
>- 写default主题……

## 路由设置
- 路由重写（nginx的路由规则以及apache的路由规则编写）
- 路由注册
- 请求的分解处理
- 调取plugin中的数据
- 拼接html文本返回请求

## default主题适配
- 文章详细适配
- 首页适配

## construct命令
>- plugin中参数修改，改为json字符串，里面包含的是需要construct的名单
>- construct命令提前做好获取construct名单

## import命令
>- 基本导入
- 多级目录的兼容
- 不只是导入markdown，其他的导入，只不过得是规定的格式

## export命令
- 基本导出

## plugin
- 除了命令行形式下的index.php入口之外，多一个web请求的入口php文件，规范一下命名，命令行下plugin入口为cli.php，web请求的入口为web.php

#markdown插件的一些调整
- 前面的html还有body去掉，外面包层div，id为article

# 后期考虑计划
- 如果创建失败，是否停止执行之后的，这里可以配置。
- 命令行能否变色？？
- 数据存储形式的多样化。例如MdPlugin。index.php对外的接口文件，然后根据MdPlugin的配置，可以更改博客内容的存储位子，如果是文件则new命令怎么处理，如果是数据库new命令怎么处理，这些因配置而更改的操作对外文件不要显示出来。
- 文件存储的话，路径格式配置，然后路径创建在总的交给console创建，不交给plugin创建，plugin只能创建文件。
- 学习vim的插件机智，支持多语言版本的插件，编程语言。
- 静态与动态的结合，造个伪动态。拿搜索举例，有两台服务器，服务器A存放静态资源（我是打算利用gitpage），服务器B存放动态资源，B中存放A中所有博客文章的索引和访问url，然后搜索的时候，请求B，B中PHP计算出搜索的结果，然后动态创造搜索页返回，点击页面中的链接则访问静态资源中的博文。这么干其实是想节省自己的服务器带宽……
- 考虑集成composer --不利于多插件，后期斟酌一下是否需要继承composer还是用git来
- 考虑到重名，建议取文件的md5，然后作为文件名
- 评论中用户的头像，用gravatar。https://en.gravatar.com/emails
- 多语言支持
- 学习wordpress，vim，hexo，laravel

- 主题参考：http://blank.withemes.com/
- 默认主题参考：https://bpplpp.com
