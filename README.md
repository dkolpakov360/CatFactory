## Фабрика котов

a. Создайте класс Cat - кот, у кота должны быть три свойства имя, цвет, возраст, все они должны
быть инициализированы в конструкторе

c. Создайте класс CatFactory - этот класс будет создавать котов, с помощью именованных
конструкторов, например вот такой:

```
public static function createBlack8YearsOldCat($name)
{
  return new Cat($name, 'black', 8);
}
```

d. Обратите внимание название конструктора фабрики точно совпадает с параметрами создаваемого
кота.

e. Создайте еще 6 различных статичных конструкторов в фабрике, каждый из которых будет
создавать котов с разными параметрами. Должны быть конструкторы, которые
предустанавливают только 1 параметр, например createBlackCat(подумайте какие здесь
параметры), при создании кота все свойства должны быть проинициализированы значениями

f. Создайте массив котов, заполните его, используя все созданные конструкторы и выведите на
экран (например функцией print_r())
