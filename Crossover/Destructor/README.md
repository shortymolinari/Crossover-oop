### \#Destructor

#### Clase con destructor sin parámetros (Clases regulares)
1. Instanciar una clase con destructor => **Ok, se ejecuta el destructor**
2. Instanciar una clase vacía que extiende un clase con destructor => **Ok, se ejecuta el destructor del padre**
3. Instaciar una clase y llamar el destructor del padre desde un método propio => **Se ejecuta el destructor del padre**
4. Instaciar una clase sobre escribir el destructor y llamar el destructor del padre desde un método propio =>
**Solo se puede invocar el destructor del padre al llamar el método propio que implementa *parent::__destruct()***

### Person.php 

#### Heredando un destructor
1.  Extender una clase con un **destructor public** => **Ok se ejecuta automaticamente**
2.  Extender una clase con un **destructor protected** => **no detiene la ejecución del código y genera un Warning**
3.  Extender una clase con un **destructor private** => **no detiene la ejecución del código y genera un Warning**
4.  Extender una clase sobreescibir el dstructor y cambiar la visibilidad a  **protected** => **Fatal error**
5.  Extender una clase sobreescibir el dstructor y cambiar la visibilidad a  **private** => **Fatal error**
6.  Sobreescribir el destructor con un trait => **Ok**
7.  Sobreescribir un destructor `final` => **Fatal Error**

8. Pausando la ejecución del código con una función `sleep()` => **Ok el destructor se ejecuta al términar la pausa y finalizar la ejecución del código"**

### Params.php

#### Destructor con parametros
1. Instanciar una clase que tiene un destructor que require parametros => **Fatal Error**

### Anonymous.php

1. Pasandole una clase anomina con destructor a una variable => **Ok**








