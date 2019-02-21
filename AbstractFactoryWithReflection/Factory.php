<?php


namespace Renzhifan\DesignPatterns\AbstractFactoryWithReflection;


use ReflectionClass;
use ReflectionException;

class Factory
{
    /**
     * 数据库
     *
     * @var string
     */
    public $db = 'MySQL';

    /**
     * 产品类的命名空间
     *
     * @var string
     */
    public $namespace = 'Renzhifan\DesignPatterns\AbstractFactoryWithReflection\\';

    /**
     * Factory constructor.
     */
    public function __construct()
    {
        /**
         * 从配置项中获取 driver
         */
        $config = include 'config.php';
        $this->db = $config['driver'];
    }

    /**
     * 创建 User 产品
     *
     * @return MySQLUser|SQLiteUser
     */
    public function createUser()
    {
        $className = $this->namespace . $this->db . 'User';

        try {
            $class = new ReflectionClass($className);

            /*public ReflectionClass::newInstance ( mixed $args [, mixed $... ] ) : object

创建类的新的实例。给出的参数将会传递到类的构造函数。 */
            $user = $class->newInstance();
        } catch (ReflectionException $Exception) {
            throw new \InvalidArgumentException('暂不支持的数据库类型');
        }
        return $user;
    }

    /**
     * 创建 Article 产品
     *
     * @return MySQLArticle|SQLiteArticle
     */
    public function createArticle()
    {
        $className = $this->namespace . $this->db . 'Article';
        try {
            $class = new ReflectionClass($className);
            $article = $class->newInstance();
        } catch (ReflectionException $Exception) {
            throw new \InvalidArgumentException('暂不支持的数据库类型');
        }
        return $article;
    }
}