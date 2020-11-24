# docker-lnmp
docker lnmp development environment.

#docker-compose 命令：
docker-compose --help  #查看docker-compose的具体使用方法
Usage:
  docker-compose [-f <arg>...] [options] [--] [COMMAND] [ARGS...]
  docker-compose -h|--help

example：
docker-compose ps      #List containers
docker-compose images  #List images
docker-compose start   #Start services
docker-compose stop    #Stop services
docker-compose rm      #Remove stopped containers
docker-compose up      #Create and start containers

#执行 docker-compose up 命令没有指明 .yml 文件时，需要切换到.yml所在目录后再执行 docker-compose up 命令

#参考资料：
https://github.com/evan886/docker-compose-lnmp
https://github.com/shmilylbelva/dnmp

#DockerHub镜像加速：https://wiki.linuxchina.net/index.php/DockerHub镜像加速
#mac上利用docker搭建lnmp开发环境: https://www.jianshu.com/p/d04e00d0bf8d

