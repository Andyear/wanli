### 环境准备
1. 下载安装开发工具[HbuilderX](https://www.dcloud.io/hbuilderx.html)
	> 推荐下载使用HbuilderX App开发版本进行开发
2. 克隆或下载源码
	###### 示例项目 
		此方式为整个AJ_VUE演示项目，里面有Color UI组件库，演示，模板等，建议用户可以下载 此项目运行用于查看演示效果，通过里面的示例，可以快速掌握项目用法。
	项目地址：[https://github.com/yooge/robot](https://github.com/yooge/robot)
	
	###### 空白项目(最小化项目)
		此方式为一个空白的AJ_VUE示例工程，无任何组件，熟练开发后推荐下载此版本
	项目地址：[https://github.com/yooge/autojs-vue-mini](https://github.com/yooge/autojs-vue-mini)
3. 运行示例项目
	1. 初始化项目文件
		>  1. HbuilderX开发工具顶部 -> 运行 -> 运行到终端 -> 1.初始化/依赖包
		>  2. HbuilderX开发工具顶部 -> 运行 -> 运行到终端 -> 2.更新/安装基座
	2. 配置运行基座
		>  HbuilderX开发工具顶部 -> 运行 -> 手机或模拟器 -> 运行基座选择 -> 自定义基座
	3. 执行 (调试/运行)
	###### 运行到手机 
		>  1. 连接手机(需ADB生效) 
		>  2. HbuilderX开发工具顶部 -> 运行 -> 手机或模拟器 -> 选择你的手机名字
	
	###### 运行到模拟器
		>  1. HbuilderX开发工具顶部 -> 工具 -> 设置 -> 运行配置 -> 模拟器端口
		>  2. HbuilderX开发工具顶部 -> 运行 -> 手机或模拟器 -> 选择模拟器名字
	4. 发布/升级，生成APK
		>  1. HbuilderX开发工具顶部 -> 发行 -> 本地打包 -> 生成app资源
		>  2. HbuilderX开发工具顶部 -> 运行 -> 运行到终端 -> 发布
4. 开始编码
	推荐大致了解Vue项目结构后进行
	> 项目主体UI：pages/robots/	用于编写前端代码
	> 项目AJ脚本：staic/robots/	用于编写AJ代码
