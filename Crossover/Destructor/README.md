### \#Destructor

#### Clase con destructor sin parámetros (Clases regulares)
1. Instanciar una clase con destructor => **Ok, se ejecuta el destructor**
2. Instanciar una clase vacía que extiende un clase con destructor => **Ok, se ejecuta el destructor del padre**
3. Instaciar una clase y llamar el destructor del padre desde un método propio => **Se ejecuta el destructor del padre**
4. Instaciar una clase sobre escribir el destructor y llamar el destructor del padre desde un método propio =>
**Solo se puede invocar el destructor del padre al llamar el método propio que implementa *parent::__destruct()***







