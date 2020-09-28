<?php 

/*

2. Фабрика котов

a. Да, котов производят на фабрике!

Создайте класс Cat - кот, у кота должны быть три свойства имя, цвет, возраст, все они должны
быть инициализированы в конструкторе

c. Создайте класс CatFactory - этот класс будет создавать котов, с помощью именованных
конструкторов, например вот такой:
public static function createBlack8YearsOldCat($name)
{
return new Cat($name, 'black', 8);
}

d. Обратите внимание название конструктора фабрики точно совпадает с параметрами создаваемого
кота.

e. Создайте еще 6 различных статичных конструкторов в фабрике, каждый из которых будет
создавать котов с разными параметрами. Должны быть конструкторы, которые
предустанавливают только 1 параметр, например createBlackCat(подумайте какие здесь
параметры), при создании кота все свойства должны быть проинициализированы значениями

f. Создайте массив котов, заполните его, используя все созданные конструкторы и выведите на
экран (например функцией print_r())

*/

// Создайте класс Cat - кот, у кота должны быть три свойства имя, цвет, возраст, все они должны
// быть инициализированы в конструкторе

namespace CatFactory;

class Cat
{
	public $name;
	public $color;
	public $age;

	public function __construct($name, $color, $age)
	{
		$this->name = $name;
		$this->color = $color;
		$this->age = $age;	
	}

}

class CatFactory
{

	public function methodConvert($methodName, $nameCat)
	{
		$str = $methodName;

		$str = str_replace('CatFactory\CatFactory::create', '', $str);

		$age = preg_replace('/[^0-9]/', '', $str);
		$color = preg_replace('/[^A-Za-z]/', '', $str);

		return new Cat($nameCat, $color, $age);
	}

	public static function createBlack8YearsOldVat($name)
	{
		return new Cat($name, 'black', 8);	
	}

	public static function createYellow16($name)
	{
		return CatFactory::methodConvert( __METHOD__ , $name);	
	}

	public static function createBlue2($name)
	{
		return CatFactory::methodConvert( __METHOD__ , $name);	
	}

	public static function createGreen8($name)
	{
		return CatFactory::methodConvert( __METHOD__ , $name);	
	}

	public static function createGrey6($name)
	{
		return CatFactory::methodConvert( __METHOD__ , $name);	
	}

	public static function createOrange3($name)
	{
		return CatFactory::methodConvert( __METHOD__ , $name);	
	}

	public static function createPurple4($name)
	{
		return CatFactory::methodConvert( __METHOD__ , $name);	
	}

	public static function createWhite5($name)
	{
		return CatFactory::methodConvert( __METHOD__ , $name);	
	}
}

$catFactory = new CatFactory();

$cats = [
	$catFactory->createBlack8YearsOldVat('Busya'),
	$catFactory->createYellow16('Vasya'),
	$catFactory->createBlue2('Sasha'),
	$catFactory->createGreen8('Niki'),
	$catFactory->createGrey6('Bars'),
	$catFactory->createOrange3('Volk'),
	$catFactory->createPurple4('Lion'),
	$catFactory->createWhite5('Baks'),
];

echo '<pre>';
var_dump($cats);
echo '</pre>';