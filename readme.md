**2ой уровень - пакет с примитивнейшим логгером**

по заданию класс logger должен реализовывать интерфейс PSR LoggerInterface, что и сделано
два требуемых интерфейса WriterInterface и FormatterInterface реализуются классами FileFormatter и FileWriter
объекты этих классов используются объектом класса logger в режиме HAS A

класс Logger содержит метод universalWrite в котором вызывается метод write объекта FileWriter, 
а в нём перед записью в файл вызывается метод форматирования format объекта FileFormatter

конструкторы вроде записаны верно...

лог пишется в файл logs.txt, лежащий в корне (на гитхабе есть его пример)...


(каталог log с файлом logs.txt - для примера работы логера)