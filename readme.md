
# ECStore Pro: Laravel 微信网店微服务框架

<p align="center"><img src="docs/static/logo.png?raw=true" title="ECStore Pro" height=100></p>

## 概述

- ### ECStore Pro 致力于创造更加易于扩展开发, 以开源社区驱动的移动支付电商框架

    ECStore Pro is a free open source ecommerce platform for online merchants. 
    ECStore Pro provides a professional and reliable foundation from which to build a successful online store.

- ECStore Pro 基于以下开源程序集成:

    * Laravel 5.5
    * Wordpress 4.7
    * 好商城 V5
    * 微擎 WeEngine




## 环境依赖

* Mysql 5.7+
* PHP 7.0+
* composer 1.0+
* Apache 服务器需要配置 mod_rewrite, Nginx 需要配置好伪静态规则(与 Laravel 相同)
* PHP mbstring, curl, openssl, mcrypt, gd 等扩展(以安装向导检测信息为准)
* Memcached 或者 Redis 缓存

## 安装

1. 安装需要配置域名(VirtualHost), 将网站根目录设置为 **`public/`** 目录, 例如 Apache 的配置(假设站点主目录为 `D:\www\` ):

    ‼️必须安装在 **域名根目录** 下, 不能在某个网站子目录下(比如: `http://localhost/ecstore`) 否则会路径出错

        <VirtualHost *:80>
             DocumentRoot "D:/www/ecstore.dev/public"
             ServerName ecstore.dev
        </VirtualHost>

    请自行配置好 `Composer` 执行环境, 命令行窗口进入 `D:\www\` 目录执行安装:

        composer create-project ecstore/pro ecstore.dev
    
    即可将 ECStore Pro 安装到 `ecstore.dev` 目录下, 如果执行时间很长, 可能是你没有配置 Composer 国内镜像, 请在上面的安装命令执行前先执行

        composer config -g repo.packagist composer https://packagist.phpcomposer.com

    配置好你的 Composer 国内镜像再进行安装, 可以参考 [Composer 中国镜像站点](http://www.phpcomposer.com)
    


2. 等待 Composer 代码下载完毕后, 用浏览器访问网站域名(比如: http://ecstore.dev/ ),
    正常情况下会进入安装向导页面, 填写数据库参数和管理员账号信息(需要先用 phpmyadmin, navicat 等工具创建好数据库)完成安装

3. Apache 服务器需要开启 mod_rewrite 伪静态扩展, 并保证扩展已经正确配置好

    Nginx 伪静态规则配置请参考 Laravel Nginx 伪静态设置    

4. 后台访问网址: `http://您的域名/admin` 后台用户名与密码在安装向导页面设置

    ### Tips
    

    - ❤️ Windows 本地集成开发环境推荐使用 Laragon WAMP (用英文安装好以后在设置里切换到中文)
    
        (支持自动配置本地域名并自带`git`,`composer`和微信开发需要的`ngrok`), 
        
        官方网站: [http://laragon.org](http://laragon.org)
    
        直接下载(V3.1)链接: [https://pan.baidu.com/s/1o882L3W](https://pan.baidu.com/s/1o882L3W) 密码: `6isc`
    
## 二次开发

- `app/` 目录下模块文件在用 composer 进行更新时会被删除并重新下载, 

    如果需要修改或者扩展模块里面的类, 可以将类文件按照类的﹝**命名空间对应的路径** ﹞复制到 `fixture/` 目录下修改, 程序会优先加载
    
    例如要扩展 `App\Bootstrap` 类, 可以把 `app/bootstrap/src/Bootstrap.php` 复制到 `fixture/App/Bootstrap.php`, 然后修改代码
    
- 静态文件(如 `.js`, `.css`, `.png` 等)以及模板文件(`.twig`, `.blade.php` 等), 请修改 `public/` 目录里的文件, 更新模块时不会被强制覆盖

    更新模块后如果出现页面异常或者报错, 可能需要手动强制更新 `public/` 下的模块文件, 请先备份您修改过的文件然后在项目目录( `public/` 目录的上一层)里执行:
    
        php artisan vendor:publish --tag=public --force 
        
- 更新和模块安装功能需要保证以下文件和目录及其子目录可写

    - app/
    - public/
    - storage/
    - composer.json
    - composer.lock

## License

[GNU General Public License version 3 (GPLv3)](docs/license.txt?raw=true)

## Links

- [点这里加入开发群: 665863675﹝ECStore Pro﹞](https://jq.qq.com/?_wv=1027&k=5qYJy7I)
- [发布页面 Github](https://ecstore.github.io/Pro/)
- [问题反馈 Issues](https://github.com/ECStore/Pro/issues)
- [文档 Documents](https://github.com/ECStore/Pro/wiki)
- [提交PR (Pull Request)](https://github.com/ECStore/Pro/pulls)
- [开发者社区 club.shopes.cn](https://club.shopes.cn)

